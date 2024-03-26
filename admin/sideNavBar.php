<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <?php
    
        if(isset($_GET['page'])){

            $page = htmlentities(trim($_GET['page'])); 
        }else{

            $page = "home";
        }
    
    
    ?>

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    <img src="assets/img/logo.png" width="90%" />
                </a>
            </div>

            <ul class="nav">
                <li class="<?php echo $page == "home" ? "active": ""; ?>">
                    <a href=".?page=home">
                    <i class="ti-view-grid"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#mts">
                    <a href="#">
                        <i class="ti-bar-chart"></i>
                        <p>Transactions</p>
                    </a>
                    <div class="collapse" id="mts">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=orders">All</a>
                            </li>
                            <li>
                                <a href=".?page=orders&option=buy">Buy</a>
                            </li>
                            <li>
                                <a href=".?page=orders&option=sell">Sell</a>
                            </li>
                        </ul>

                    </div>
                </li>

                  <li data-toggle="collapse" data-target="#cms">
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Customers</p>
                    </a>
                    <div class="collapse" id="cms">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=customerlist">Customers</a>
                            </li>
                            <li>
                                <a href=".?page=customerlist&action=pendingkyc">Pending KYC verification</a>
                            </li>
                            <li>
                                <a href=".?page=sendmail">Send Email</a>
                            </li>
                            
                        </ul>

                    </div>
                </li>

                <li data-toggle="collapse" data-target="#apis">
                    <a href="#">
                        <i class="ti-files"></i>
                        <p>API Settings</p>
                    </a>
                    <div class="collapse" id="apis">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=apisettings">Api Settings</a>
                            </li>
                        </ul>

                    </div>
                </li>

                  <li data-toggle="collapse" data-target="#usm">
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                    <div class="collapse" id="usm">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=users">Users</a>
                            </li>
                            <li>
                                <a href=".?page=newuser">Add New User</a>
                            </li>
                            <li>
                                <a href=".?page=userroles">User Roles</a>
                            </li>
                        </ul>

                    </div>
                </li>

                 <li data-toggle="collapse" data-target="#ss">
                    <a href="#">
                        <i class="ti-files"></i>
                        <p>Settings</p>
                    </a>
                    <div class="collapse" id="ss">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=general-settings">General Settings</a>
                            </li>
                             <li>
                                <a href=".?page=emailsettings">Email Settings</a>
                            </li>
                        </ul>

                    </div>
                </li>

            </ul>
        </div>
    </div>