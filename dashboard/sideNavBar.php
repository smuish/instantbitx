<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <?php 
    if(!isset($_GET['page'])){

        $page = "home";
    }else{
    $page = htmlentities(trim($_GET['page'])); 
    }
    ?>

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    <img src="assets/img/logo.png" width="90%" />
                </a>
            </div>

            <ul class="nav">
                <li class="<?php if($page == "home" || $page == ""){echo "active"; } ?>">
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
                    <i class="ti-money"></i>
                        <p>Sell</p>
                    </a>
                </li>
                <li class="<?php echo $page == "orders" ? "active": ""; ?>">
                    <a href=".?page=orders">
                    <i class="ti-receipt"></i>
                        <p>My Orders</p>
                    </a>
                </li>
                <li class="<?php echo $page == "mysettings" ? "active": ""; ?>">
                    <a href=".?page=mysettings">
                    <i class="ti-settings"></i>
                        <p>My settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>