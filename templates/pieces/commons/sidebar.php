<?php
defined('_SECURED') or die('Restricted access');
?>
<div class="sidebar-menu toggle-others fixed">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="dashboard-1.html" class="logo-expanded">
                    <img src="assets/images/logoDMaster.jpg" width="80" alt="" />
                </a>

                <a href="dashboard-1.html" class="logo-collapsed">
                    <img src="assets/images/logoDMaster.jpg" width="40" alt="" />
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a>

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>

            <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
            <div class="settings-icon">
                <a href="#" data-toggle="settings-pane" data-animate="true">
                    <i class="linecons-cog"></i>
                </a>
            </div>


        </header>



        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="active opened active">
                <a href="index.php?page=orders">
                    <i class="linecons-cog"></i>
                    <span class="title">Orders</span>
                </a>
                
            </li>
            <li>
                <a href="index.php?page=products">
                    <i class="linecons-desktop"></i>
                    <span class="title">Products</span>
                </a>
                
            </li>
            <li>
                <a href="index.php?page=delivery">
                    <i class="linecons-note"></i>
                    <span class="title">Delivery</span>
                </a>
                
            </li>
            <li>
                <a href="index.php?page=settings">
                    <i class="linecons-star"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=reports">
                    <i class="linecons-mail"></i>
                    <span class="title">Reports</span>
                   
                </a>
                
            </li>
            <li>
                <a href="index.php?page=clients">
                    <i class="linecons-database"></i>
                    <span class="title">Clients</span>
                </a>
                
            </li>
            <li>
                <a href="index.php?page=routes">
                    <i class="linecons-params"></i>
                    <span class="title">Routes</span>
                </a>
                
            </li>
            <li>
                <a href="index.php?page=production">
                    <i class="linecons-beaker"></i>
                    <span class="title">Production</span>
                  
                </a>
                
            </li>
            
            
        </ul>

    </div>

</div>

