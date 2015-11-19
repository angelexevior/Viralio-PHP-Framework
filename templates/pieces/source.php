<?php
defined('_SECURED') or die('Restricted access');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<!DOCTYPE html>
<html lang="en">
    <?php include('templates/pieces/commons/head.php'); ?>
    <body class="page-body">

        <div class="settings-pane">

            <a href="#" data-toggle="settings-pane" data-animate="true">
                &times;
            </a>

            <div class="settings-pane-inner">

                <div class="row">

                    <div class="col-md-4">

                        <div class="user-info">

                            <div class="user-image">
                                <a href="extra-profile.html">
                                    <img src="assets/images/user-2.png" class="img-responsive img-circle" />
                                </a>
                            </div>

                            <div class="user-details">

                                <h3>
                                    <a href="extra-profile.html">John Smith</a>

                                    <!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
                                    
                                </h3>

                                <p class="user-title">Administrator</p>

                                <div class="user-links">
                                    <a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
                                    <a href="extra-profile.html" class="btn btn-success">Upgrade</a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-8 link-blocks-env">

                        <div class="links-block left-sep">
                            <h4>
                                <span>Notifications</span>
                            </h4>

                            <ul class="list-unstyled">
                                
                                <li>
                                    <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
                                    <label for="sp-chk2">Events</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
                                    <label for="sp-chk3">Updates</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
                                    <label for="sp-chk4">Server Uptime</label>
                                </li>
                                <li> 
                                    <label for="sp-chk4"></label>
                                </li>
                            </ul>
                        </div>

                        <div class="links-block left-sep">
                            <h4>
                                <a href="#">
                                    <span>Help Desk</span>
                                </a>
                            </h4>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i class="fa-angle-right"></i>
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-angle-right"></i>
                                        Submit a Ticket
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-angle-right"></i>
                                        Domains Protocol
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-angle-right"></i>
                                        Terms of Service
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

            
            <?php include('commons/sidebar.php'); ?>

            <div class="main-content">

                <?php
                include('templates/pieces/commons/navbar.php');

                //Getting the current page content
                $page = $platform->getPage();
                include('templates/pieces/pages/' . $page . '.php');
               
                ?>			

                <!-- Main Footer -->
                <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
                <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
                <!-- Or class "fixed" to  always fix the footer to the end of page -->
                
            

        

        <!-- Page Loading Overlay -->
        <div class="page-loading-overlay">
            <div class="loader-2"></div>
        </div>




        <!-- Bottom Scripts -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/resizeable.js"></script>
        <script src="assets/js/joinable.js"></script>
        <script src="assets/js/xenon-api.js"></script>
        <script src="assets/js/xenon-toggles.js"></script>


        <!-- Imported scripts on this page -->
        <script src="assets/js/xenon-widgets.js"></script>
        <script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
        <script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
        <script src="assets/js/toastr/toastr.min.js"></script>


        <!-- JavaScripts initializations and stuff -->
        <script src="assets/js/xenon-custom.js"></script>

    </body>
</html>

