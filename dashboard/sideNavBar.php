<style>
.navbar-toggle .icon-bar{
    background-color: #333333;
}
</style>
<div class="sidebar" data-background-color="white" data-active-color="danger">
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

    <script>

function* foo(index) {
  while (index < 2) {
    yield index;
    index++;
  }
}

const iterator = foo(0);

console.log(iterator.next().value);
// Expected output: 0

console.log(iterator.next().value);
// Expected output: 1

    </script>