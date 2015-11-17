﻿(function(ThemeBuilder) {

    var PreviewViewModel = function(cssTemplateLoader, previewRepository, parentIframeNotifier) {

        var DYNAMIC_STYLES_ID = "dynamic-styles",
             _cssTemplateLoader = cssTemplateLoader,
             currentState = {
                 theme: {
                     name: null,
                     colorScheme: null
                 },
                 group: null
             };

        var makeReplacedValue = function(constName) {
            var str = constName.replace("@", "").replace(/_/g, "-").toLowerCase();
            str = str.replace("5-", "-five-");
            str = str.replace("6-", "-six-");
            str = str.replace("7-", "-seven-");
            str = str.replace("8-", "-eight-");
            return "dx-theme-builder-" + str + "(?=(\\s|;|,|}))";
        };

        var removeOverlaysFromBody = function() {
            $("body > .dx-overlay").remove();
        };

        var makeInfoHeader = function(metadataVersion) {
            var generatedBy = "* Generated by the DevExpress Theme Builder",
                version = "* Version: " + metadataVersion,
                link = "* http://js.devexpress.com/themebuilder/";

                return ["/*", generatedBy, version, link, "*/"].join("\n");
        };

        this.contentUrl = "Content/DevExtreme/";

        this.typography = ko.observable();

        this.isMobileTheme = ko.observable(false);
        this.themeColoring = ko.observable("light");
        this.isApplication = ko.observable(false);

        this.widgets = ko.observableArray([]);
        this.application = ko.observable();

        this.theme = ko.observable();
        this.colorScheme = ko.observable();

        this._createCssFromTemplate = function(metadata, cssTemplate) {
            // otherwise the regex bellow will interpret \f chars as escape characters
            var css = cssTemplate.replace(/(\f)(\d+)/g, "\\f$2");
            css = css.replace(/url\(icons\/dxicons/gi, "url(Content/DevExtreme/css/icons/dxicons");

            $.each(metadata, function(i, group) {
                for(var j = 0, len = group.length; j < len; j++) {
                    var key = makeReplacedValue(group[j].Key);
                    var regExp = new RegExp(key, "g");
                    css = css.replace(regExp, group[j].Value);
                }
            });

            return css;
        };

        this._createDynamicStyles = function(css) {

            $("#" + DYNAMIC_STYLES_ID).remove();

            $("<style>" + css + "</style>")
                .attr("type", "text/css")
                .attr("id", DYNAMIC_STYLES_ID)
                .appendTo("head");
        };

        this.applyInlineStyles = function(metadata, theme, colorScheme) {
            var d = $.Deferred(),
                that = this;
            _cssTemplateLoader.load(theme, colorScheme).done(function(cssTemplate) {
                var css = that._createCssFromTemplate(metadata, cssTemplate);
                that._createDynamicStyles(css);
                d.resolve();
            });

            return d.promise();
        };

        this.getCSSFromPage = function(metadataVersion) {
            var css = makeInfoHeader(metadataVersion);
            css += $("#" + DYNAMIC_STYLES_ID).html();
            return css.replace(/url\(Content\/DevExtreme\/css\/icons\/dxicons/gi, "url(icons/dxicons");
        };

        this.getCSS = function(metadataVersion) {
            var css = this.getCSSFromPage(metadataVersion);
            parentIframeNotifier.notify("getCSS", css);
        };

        this.saveCSS = function(metadataVersion) {
            var css = this.getCSSFromPage(metadataVersion);
            parentIframeNotifier.notify("saveCSS", css);
        };

        this.init = function(metadata, group, clearBody) {
            var that = this,
                theme = this.theme(),
                colorScheme = this.colorScheme(),
                updateWidgetsPreview = false,
                previewData = previewRepository.getData({ name: theme, colorScheme: colorScheme }, group);
            
            this.typography("dx-theme-" + theme + "-typography");
            this.isMobileTheme($.inArray(theme, ["ios7", "win8", "android5"]) > -1);
            this.themeColoring($.inArray(colorScheme, ["light", "white", "default"]) > -1 ? "light" : "dark");
            this.isApplication(group.indexOf("layout") > -1);

            if(currentState.theme.name !== theme || currentState.theme.colorScheme !== colorScheme || currentState.group !== group)
                updateWidgetsPreview = true;

            return that.applyInlineStyles(metadata, theme, colorScheme).done(function() {
                if(clearBody)
                    removeOverlaysFromBody();

                if(updateWidgetsPreview || !that.widgets() || !that.widgets().length) {
                    that.widgets(previewData);
                }

                parentIframeNotifier.notify("stylesUpdated");

                currentState.theme.name = theme;
                currentState.theme.colorScheme = colorScheme;
                currentState.group = group;
            });
        };
    };

    ThemeBuilder.PreviewViewModel = PreviewViewModel;

})(ThemeBuilder);