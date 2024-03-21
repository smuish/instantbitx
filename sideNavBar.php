<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <?php $page = htmlentities(trim($_GET['page'])); ?>

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

                <li class="<?php echo $page =="identity" ? "active": ""; ?>">
                    <a href=".?page=identity">
                    <i class="ti-id-badge"></i>
                        <p>KYC / Identity Form</p>
                    </a>
                </li>
                <li class="<?php echo $page == "buy" ? "active": ""; ?>">
                    <a href=".?page=buy">
                    <i class="ti-shopping-cart"></i>
                        <p>Buy</p>
                    </a>
                </li>
                <li class="<?php echo $page == "sell" ? "active": ""; ?>">
                    <a href=".?page=sell">
                    <i class="ti-panel"></i>
                        <p>Sell</p>
                    </a>
                </li>
                <li class="<?php echo $page == "orders" ? "active": ""; ?>">
                    <a href=".?page=orders">
                    <i class="ti-panel"></i>
                        <p>My Orders</p>
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#pages">
                    <a href="#">
                        <i class="ti-bar-chart"></i>
                        <p>Manage Trade</p>
                    </a>
                    <div class="collapse" id="pages">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href="orders.php">All</a>
                            </li>
                            <li>
                                <a href="">Buy</a>
                            </li>
                            <li>
                                <a href="">Sell</a>
                            </li>
                            <li>
                                <a href="">Completed</a>
                            </li>
                        </ul>

                    </div>
                </li>

                  <li data-toggle="collapse" data-target="#post">
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Customers</p>
                    </a>
                    <div class="collapse" id="post">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href="company-list.php">Customers</a>
                            </li>
                            <li>
                                <a href="">Pending KYC</a>
                            </li>
                            <li>
                                <a href="">KYC Log</a>
                                <li>
                                <a href="">Send Email</a>
                            </li>
                            </li>
                        </ul>

                    </div>
                </li>

                <li data-toggle="collapse" data-target="#pages">
                    <a href="#">
                        <i class="ti-files"></i>
                        <p>API Settings</p>
                    </a>
                    <div class="collapse" id="pages">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href="orders.php">Api Settings</a>
                            </li>
                        </ul>

                    </div>
                </li>

                  <li data-toggle="collapse" data-target="#post">
                    <a href="#">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                    <div class="collapse" id="post">
                        
                        <ul class="sub-menu">
                            <li>
                                <a href="company-list.php">All Users</a>
                            </li>
                            <li>
                                <a href="">Add New User</a>
                            </li>
                            <li>
                                <a href="">Tags</a>
                            </li>
                        </ul>

                    </div>
                </li>

                 <li>
                    <a href="">
                        <i class="ti-files"></i>
                        <p>Settings</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>