(function (StockMarket, $) {
    StockMarket.loadData = function (options) {
        return $.ajax({
            url: "http://js.devexpress.com/Demos/StockMarket/odata/StockDatas" + options.method,
            dataType: "json",
            success: options.callback
        });
    };

    Date.prototype.getWeek = function () {
        var jan1 = new Date(this.getFullYear(), 0, 1);
        return Math.ceil((((this - jan1) / 86400000) + jan1.getDay() + 1) / 7);
    };

    var StockMarketView = function () {
        var that = this;

        var categories = [{
            "Software": ["ADBE", "MSFT", "ORCL"],
            "Game Development": ["ATVI", "ERTS"],
            "Internet & Online Shopping": ["YHOO", "AMZN", "EBAY"],
            "Hardware & Electronics": ["MSI", "INTC", "HPQ", "IBM", "DELL", "CSCO", "SNE", "AAPL"]
        }];

        var chartPalette = ["#edb9c8", "#e7a2b6", "#e18ba3", "#dc7491", "#d0456d", "#c41748", "#b11541", "#9d123a", "#8a1033"];

        var gridOptions = {
            dataSource: {},
            paging: {
                enabled: false
            },
            commonColumnSettings: { alignment: "center" },
            selection: {
                mode: "single"
            },
            columns: [{
                dataField: "Company.CompanyName",
                caption: "Symbol"
            }, {
                dataField: "Price",
                caption: "Last Price",
                dataType: "number",
                format: "fixedPoint",
                precision: 4,
                width: "22%"
            }, {
                dataField: "Volumne",
                caption: "Volume"
            }, {
                dataField: "Volume Dynamics",
                caption: "Volume Dynamics",
                width: "40%",
                allowEditing: false,
                allowSorting: false,
                alignment: "center",
                cellTemplate: function(container, options) {
                    $("<div />")
                        .dxSparkline($.extend(sparkOptions, {
                            dataSource: options.data.sparkLineData.reverse().slice(0,20),
                            lineColor: options.row.isSelected ? "#fff" : "#d01143",
                            size: {
                                width: 141,
                                height: 14
                            }
                        }))
                        .appendTo(container);
                }
            }],
            onSelectionChanged: function(items) {
                if(items.selectedRowsData[0]) {
                    var grid = items.component;
                    if(items.currentDeselectedRowKeys[0]) {
                        grid.getCellElement(grid.getRowIndexByKey(items.currentDeselectedRowKeys[0]), "Volume Dynamics").children().dxSparkline({ lineColor: "#d01143" });
                        grid.getCellElement(grid.getRowIndexByKey(items.currentSelectedRowKeys[0]), "Volume Dynamics").children().dxSparkline({ lineColor: "#fff" });
                    }
                    that.initCharts(items.selectedRowsData[0]);
                }
            },
            showRowLines: false
        };

        var pivotGridOptions = {
            allowSortingBySummary: true,
            allowSorting: true,
            allowFiltering: true,
            allowExpandAll: true,
            dataSource: {
                store: new DevExpress.data.CustomStore({
                    load: function(options) {
                        var d = $.Deferred();
                        $.when(that.pivotGridDataDeferred).done(function(data) {
                            if(data) {
                                $.each(data, function(_, item) {
                                    $.each(categories, function(_, category) {
                                        for(var key in category) {
                                            if($.inArray(item.Company.CompanyName, category[key]) >= 0)
                                                item.Company.Category = key;
                                        }
                                    });
                                });
                            }

                            d.resolve(data);
                        });

                        return d.promise();
                    },
                    onLoading: function(options) {
                        that.isLoaded = false;
                    },
                    onLoaded: function(options) {
                        that.isLoaded = true;
                        that.pivotGridDataDeferred = $.Deferred();
                    }
                
                }),
                fields: [{
                    dataField: "Company.Category",
                    width: 200,
                    area: "row"
                }, {
                    dataField: "Company.CompanyName",
                    width: 70,
                    area: "row"
                }, {
                    dataField: "Date",
                    dataType: "date",
                    area: "column"
                }, {
                    dataField: "Date",
                    dataType: "date",
                    groupInterval: "day",
                    visible: false
                }, {
                    dataField: "Price",
                    dataType: "number",
                    format: "fixedPoint",
                    precision: 2,
                    summaryType: "avg",
                    caption: "Avg Price",
                    area: "data"
                }]
            },
            onContentReady: function(options) {
                that.lineChart.load(that.createDataSourceForLineChart(options.component));
            },
            fieldChooser: {
                enabled: false
            }
        };

        var sparkOptions = {
            dataSource: [],
            argumentField: "Date",
            valueField: "Volumne",
            type: "line",
            showMinMax: false,
            showFirstLast: false,
            tooltip: {
                enabled: false,
            }
        };

        var candlesOptions = {
            dataSource: [],
            commonSeriesSettings: {
                argumentField: "Date",
                type: "candlestick"
            },
            title: {
                text: "Price",
                horizontalAlignment: "right",
                font: {
                    size: 16,
                    color: "#5d5d5d",
                    family: "'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana",
                    weight: 400
                }
            },
            series: [
                {
                    openValueField: "OpenP",
                    highValueField: "HighP",
                    lowValueField: "LowP",
                    closeValueField: "CloseP",
                    color: "#333333",
                    reduction: {
                        color: "#c41748"
                    }
                }
            ],
            valueAxis: [
                {
                    label: {
                        format: "currency",
                        precision: 1
                    },
                    placeholderSize: 40
                }, {
                    position: "right",
                    placeholderSize: 10
                }
            ],
            legend: {
                visible: false
            },
            argumentAxis: {
                label: {
                    visible: false,
                    customizeText: function(arg) {
                        return Globalize.format(arg.value, "MMM yyyy");
                    },
                    overlappingBehavior: {
                        mode: "enlargeTickInterval"
                    }
                },
                grid: {
                    visible: true
                },
                minorGrid: {
                    visible: true,
                    opacity: 1
                },
                minorTickCount: 3,
                maxValueMargin: 0.02,
                minValueMargin: 0.02,
                argumentType: "datetime",
                tickInterval: { months: 1 }
            },
            commonPaneSettings: {
                border: {
                    visible: true
                }
            }
        };

        var pieOptions = {
            dataSource: [],
            resolveLabelOverlapping: "shift",
            legend: {
                visible: false
            },
            diameter: 0.55,
            palette: chartPalette,
            series: [{
                type: "doughnut",
                argumentField: "CompanyName",
                valueField: "Volumne",
                label: {
                    visible: true,
                    font: {
                        size: 11
                    },
                    radialOffset: -10,
                    backgroundColor: 'none',
                    customizeText: function(arg) {
                        return '<span style="font-size: 12px">&#9632;</span>'
                               + '<span style="color: #696969"> ' + arg.argumentText
                               + ': ' + arg.percentText + '</span>';
                    }
                },
            }],
        };

        var barsOptions = {
            dataSource: [],
            title: {
                text: "Volume (min)",
                horizontalAlignment: "right",
                font: {
                    size: 16,
                    color: "#5d5d5d",
                    family: "'Segoe UI', 'Helvetica Neue', 'Trebuchet MS', Verdana",
                    weight: 400
                }
            },
            series: {
                argumentField: "Date",
                valueField: "Volumne",
                type: "bar",
                color: "#c41748"
            },
            legend: {
                visible: false
            },
            valueAxis: [
                {
                    label: {
                        customizeText: function() {
                            return this.value / 1000000 + "M";
                        }
                    },
                    placeholderSize: 40
                }, {
                    position: "right",
                    placeholderSize: 10
                }
            ],
            argumentAxis: {
                grid: {
                    visible: true
                },
                label: {
                    customizeText: function(arg) {
                        return Globalize.format(arg.value, "MMM yyyy");
                    },
                    overlappingBehavior: {
                        mode: "enlargeTickInterval"
                    }
                },
                maxValueMargin: 0.02,
                minValueMargin: 0.02,
                tickInterval: { months: 1 },
                argumentType: "datetime"
            },
            commonPaneSettings: {
                border: {
                    visible: true
                }
            },
            animation: {
                enabled: false
            }
        };

        var lineOptions = {
            dataSource: [],
            commonSeriesSettings: {
                argumentField: "interval",
                valueField: "price",
                type: "line"
            },
            crosshair: {
                enabled: true,
                color: "#c41748",
                width: 3,
                dashStyle: "dot",
                label: {
                    visible: true,
                    backgroundColor: "#c41748",
                    font: {
                        color: "#fff",
                        size: 12,
                    }
                }
            },
            palette: chartPalette,
            legend: {
                position: "inside",
                horizontalAlignment: "left",
                border: {
                    visible: true
                },
                font: {
                    size: 11
               
                }
            },
            loadingIndicator: {
                show: true
            },
            seriesTemplate: {
                nameField: "company"
            }
        };

        var tmpMenuOptions = {
            showFirstSubmenuMode: "onClick",
            selectionMode: "single",
            selectionByClick: true,
            items: [{
                icon: "tmp-menu",
                items: [{
                    CSSclass: "week",
                    text: "1 week",
                    selected: true
                }, {
                    CSSclass: "weeks",
                    text: "2 weeks"
                }, {
                    CSSclass: "month",
                    text: "1 month"
                }]
            }],
            onItemClick: function(data) {
                if (!data.itemData.items) {
                    that.initCharts(that.grid.instance.getSelectedRowsData()[0]);
                    data.element
                        .removeClass(data.component.option("selectedItem").CSSclass)
                        .addClass(data.itemData.CSSclass)
                }
                data.element.toggleClass("active");
            },
            onSubmenuHidden: function(data) {
                data.element.removeClass("active");
            },
            width: 52,
            height: 52
        };


        that.updateData = function() {

            var i = 0;

            that.pivotGridDataDeferred = $.Deferred();
            that.grid.instance.beginCustomLoading();
            that.pieChart.instance.showLoadingIndicator();

            var intervalID = setInterval(getData, 8000);

            function getData() {
                that.currentDate = (new Date(2004, 8, 21 + i)).toISOString();

                var startDate = new Date(that.currentDate);

                startDate.setMonth(startDate.getMonth() - 36);
                startDate = startDate.toISOString();

                (i == 0) && that.updatePivotGridData();

                StockMarket.loadData({
                    method: "?$expand=Company&$filter= Date le datetime'" + that.currentDate + "'&$orderby=Date desc&$top=320",
                    callback: function(data) {
                        if(data.value.length) {

                            $.each(data.value, function(_, item1) {
                                item1.sparkLineData = [];
                                item1.CompanyName = item1.Company.CompanyName;
                                $.each(data.value, function(_, item2) {
                                    if(item1.CompanyID == item2.CompanyID)
                                        item1.sparkLineData.push({ "Date": item2.Date, "Volumne": item2.Volumne });
                                });
                            });

                            that.grid.load(data.value.slice(0, 16));
                            that.pieChart.load(data.value.slice(0, 10));
                        } else {
                            clearInterval(intervalID);
                        }
                    }
                })
                i++;
            }
        };

        that.initCharts = function(selectItemData) {
            var startDate = new Date(that.currentDate);
                
            startDate.setMonth(startDate.getMonth() - (that.currentInterval || 6));
            startDate = startDate.toISOString();

            StockMarket.loadData({
                method: "?$expand=Company&$filter=CompanyID eq " + selectItemData.CompanyID + " and Date ge datetime'" + startDate + "' and Date le datetime'" + that.currentDate + "'",
                callback: function(data) {
                    var oldData = data.value,
                        newData = [],
                        i, j = 0;

                    if(oldData.length) {
                        $.each(oldData, function(_, item) {
                            item.OpenP = parseFloat(item.OpenP);
                            item.HighP = parseFloat(item.HighP);
                            item.LowP = parseFloat(item.LowP);
                            item.CloseP = parseFloat(item.CloseP);
                        });

                        for(i = oldData.length - 1; i > 0; i--) {
                            var condition,
                                currentItemWeek = (new Date(oldData[i].Date)).getWeek(),
                                prevItemWeek = (new Date(oldData[i - 1].Date)).getWeek(),
                                currentItemMonth = (new Date(oldData[i].Date)).getMonth(),
                                prevItemMonth = (new Date(oldData[i - 1].Date)).getMonth();

                            switch(that.tmpMenu.option("selectedItem").text) {
                                case "1 week":
                                    condition = currentItemWeek != prevItemWeek;
                                    break;
                                case "2 weeks":
                                    condition = currentItemWeek != prevItemWeek && (j++ % 2 == 0);
                                    break;
                                case "1 month":
                                    condition = currentItemMonth != prevItemMonth;
                                    break;
                            }

                            if(condition)
                                newData.push(oldData[i]);
                        }

                        that.candlesChart.load(newData);
                        that.barChart.load(newData);
                    }
                }
            });
        };

        that.createDataSourceForLineChart = function(pivotGridInstance) {
            var data = pivotGridInstance.getDataSource().getData(),
                rowLevel = 1,
                columnLevel = 1,
                dataSource = [];

            var foreachTree = function(items, func, members) {
                members = members || [];
                for(var i = 0; i < items.length; i++) {
                    members.unshift(items[i]);
                    func(members);
                    if(items[i].children) {
                        foreachTree(items[i].children, func, members);
                    }
                    members.shift();
                }
            };

            foreachTree(data.rows, function(members) {
                rowLevel = Math.max(rowLevel, members.length);
            });

            foreachTree(data.columns, function(members) {
                columnLevel = Math.max(columnLevel, members.length);
            });
            
            foreachTree(data.rows, function(rowMembers) {
                if(rowLevel === rowMembers.length) {
                    var names = $.map(rowMembers, function(member) { return member.value; }).reverse();
                    foreachTree(data.columns, function(columnMembers) {
                        if(columnLevel === columnMembers.length) {
                            var args = $.map(columnMembers, function(member) { return member.text; }).reverse(),
                                value = ((data.values[rowMembers[0].index] || [])[columnMembers[0].index] || [])[0];

                            dataSource.push({
                                company: names[names.length - 1],
                                interval: args.join("/"),
                                price: value === undefined ? null : value
                            });
                        }
                    });
                }
            });
            
            return dataSource;
        };

        that.changeInterval = function(e) {
            $(".radiogroup").removeClass("active");
            e.element.addClass("active");
            that.currentInterval = e.element.data("interval");
            that.initCharts(that.grid.instance.getSelectedRowsData()[0]);
        };

        that.redrawViews = function(e) {
            var currentView = $("body").attr("id"),
                selectedView = e.element.data("view");
            if (currentView !== selectedView) {
                $("body").attr("id", selectedView);
                that.initView(selectedView, false);
            }
        };

        that.updatePivotGridData = function() {
            var startDate = new Date(that.currentDate);

            startDate.setMonth(startDate.getMonth() - 36);
            startDate = startDate.toISOString();

            StockMarket.loadData({
                method: "?$expand=Company&$select=Date,Price,Company/CompanyName&$filter=Date ge datetime'" + startDate + "' and Date le datetime'" + that.currentDate + "'&$orderby=Date desc&$top=9000",
                callback: function(data) {
                    if(data.value.length) 
                       that.pivotGridDataDeferred && that.pivotGridDataDeferred.resolve(data.value);
                }
            });
        };

        that.initPivotGrid = function(options) {
            var pivotGridContainer = $("#pivotgrid"),
                pivotgrid = pivotGridContainer.dxPivotGrid(options).dxPivotGrid("instance");

            return pivotgrid;
        };

        that.initGrid = function(options) {
            var gridContainer = $("#grid"),
                grid = gridContainer.dxDataGrid(options).dxDataGrid("instance");

            return {
                instance: grid,
                load: function(data) {
                    var selectedRowsData = that.grid.instance.getSelectedRowsData(),
                        store = {
                            type: "array",
                            data: data,
                            key: "CompanyID"
                        };

                    grid.option("dataSource.store", store);

                    if(!selectedRowsData[0]) {
                        grid.option("loadPanel.enabled", false);
                        grid.selectRows(data[0].CompanyID);
                    } else {
                        that.initCharts(selectedRowsData[0]);
                    }
                }
            }
        };

        that.initChart = function(options, type) {
            var chartContainer = $("#" + type),
                chart = null;

            if(type == "pie")
                chart = chartContainer.dxPieChart(options).dxPieChart("instance");
            else
                chart = chartContainer.dxChart(options).dxChart("instance");

            return {
                instance: chart,
                load: function(data) {
                    chart.option("dataSource", data);
                }
            };
        };

        that.initView = function(view, isUpdate) {
            if(view == "charts") {
                that.barChart = that.initChart(barsOptions, "bar");
                that.candlesChart = that.initChart(candlesOptions, "candles");
                that.barChart.instance.showLoadingIndicator();
                that.candlesChart.instance.showLoadingIndicator();
            }
            else {
                if(!that.pivotGrid || (isUpdate && that.isLoaded)) {
                    isUpdate && that.updatePivotGridData();
                    that.pivotGrid = that.initPivotGrid(pivotGridOptions);
                    that.lineChart = that.initChart(lineOptions, "line");
                    that.lineChart.instance.showLoadingIndicator();
                }
            }
        };

        that.init = function() {
            that.grid = that.initGrid(gridOptions, "grid");
            that.pieChart = that.initChart(pieOptions, "pie");
            that.tmpMenu = $(".tmp-menu").dxMenu(tmpMenuOptions).dxMenu("instance");
            that.initView("charts", false);
            that.updateData();
        };
    };

    $(function() {
        StockMarket.StockMarketView = new StockMarketView();
        StockMarket.StockMarketView.init();
        
        var changeIntervalAction = function(e) { StockMarket.StockMarketView.changeInterval(e) },
            redrawViewsAction = function (e) { StockMarket.StockMarketView.redrawViews(e) },
            buttonsArray = [
                { CSSClass: "button-charts", clickAction: redrawViewsAction, width: 54, height: 42 },
                { CSSClass: "button-pivotgrid-chart", clickAction: redrawViewsAction, width: 54, height: 42 },
                { CSSClass: "refresh", clickAction: function(e) { StockMarket.StockMarketView.initView("pivotgrid-chart", true) } },
                { CSSClass: "button-6-months", clickAction: changeIntervalAction },
                { CSSClass: "button-12-months", clickAction: changeIntervalAction },
                { CSSClass: "button-18-months", clickAction: changeIntervalAction },
                { CSSClass: "button-24-months", clickAction: changeIntervalAction },
                { CSSClass: "button-48-months", clickAction: changeIntervalAction },
        ];

        $.each(buttonsArray, function(_, button) {
            $("." + button.CSSClass).dxButton({
                width: button.width || 52,
                height: button.height || 52,
                icon: button.CSSClass,
                onClick: button.clickAction
            });
        });
    });
}(window.StockMarket || {}, jQuery));
