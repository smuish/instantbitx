<style>

.navbar-toggle .icon-bar{

    background-color: #333333;
}
    </style>
<div class="sidebar" data-background-color="white" data-active-color="danger">
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
                <li class="<?php echo $page == "orders" ? "active": ""; ?>">
                    <a href=".?page=orders">
                        <i class="ti-bar-chart"></i>
                        <p>Transactions</p>
                    </a>
                    <!-- <div class="collapse" id="mts">
                        
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

                    </div> -->
                </li>

                  <li data-toggle="collapse" data-target="#cms" class="<?php echo ($page == "customerlist" || $page == "sendmail") ? "active": ""; ?>">
                    <a href="#">
                        <i class="ti-id-badge"></i>
                        <p>Customers</p>
                    </a>
                    <div class="collapse" id="cms">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=customerlist">Customers</a>
                            </li>
                            <li>
                                <a href=".?page=sendmail">Send Email</a>
                            </li>
                            
                        </ul>

                    </div>
                </li>

                  <li data-toggle="collapse" data-target="#usm" class="<?php echo ($page == "users" || $page == "newuser" || $page == "userroles") ? "active": ""; ?>">
                    <a href="#">
                    <i class="ti-user"></i>
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

                <li data-toggle="collapse" data-target="#dos" class="<?php echo ($page == "neworderform" || $page == "dailyorders") ? "active": ""; ?>">
                    <a href="#">
                    <i class="ti-layout-list-thumb"></i>
                        <p>Daily Orders</p>
                    </a>
                    <div class="collapse" id="dos">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=dailyorders">All</a>
                            </li>
                            <li>
                            <a href=".?page=neworderform">New Order</a>
                            </li>
                        </ul>

                    </div>
                </li>

                 <li class="<?php echo ($page == "emailsettings" || $page == "general-settings" || $page == "apisettings" || $page == "identity") ? "active": ""; ?>">
                    <a href=".?page=general-settings">
                        <i class="ti-settings"></i>
                        <p>Settings</p>
                    </a>
                    <!-- <div class="collapse" id="ss">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href=".?page=general-settings">General Settings</a>
                            </li>
                             <li>
                                <a href=".?page=emailsettings">Email Settings</a>
                            </li>
                            <li>
                                <a href=".?page=apisettings">Api Settings</a>
                            </li>
                            <li>
                                <a href=".?page=identity">KYC</a>
                            </li>
                        </ul>

                    </div> -->
                </li>

                <li class="active-pro">
                    <a href="logout.php">
                    <strong><i class="ti-power-off"></i>
                        <p>Sign out</p>
                    </strong>
                    </a>
                </li>

            </ul>
        </div>
    </div>