<?php 
    @session_start();

    if(isset($_POST['submit'])){
        require_once("admin/Customer.php");
        require_once("dashboard/config.php");
        $cm = new Customer();

        $reg = $cm->signin($_POST);

        if($reg != "false" ){

          $fetch = mysqli_fetch_assoc($reg);
                
                $_SESSION['userName'] = $fetch['userName'];
                $_SESSION['email'] = $fetch['email'];
                $_SESSION['customerId'] = $fetch['id'];
           
            header("location:dashboard");
        }

    }

?>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Page Login | ICO Crypto - ICO Landing Page &amp; Multi-Purpose Cryptocurrency HTML Template</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=210">
    <link rel="stylesheet" href="assets/css/style.css?ver=210">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="assets/css/theme.css?ver=210">
</head>

<body class="nk-body body-wider bg-light-alt">
    <div class="nk-wrap">
        <main class="nk-pages nk-pages-centered bg-theme">
            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="./" class="ath-logo"><img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"></a>
                </div>
                <div class="ath-body">
                    <h5 class="ath-heading title">Sign in <small class="tc-default">with your ICO Account</small></h5>
                    <form action="" method="POST">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" name="username" placeholder="Your Username">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pdb-r">
                            <div class="field-item pb-0">
                                <input class="input-checkbox" id="remember-me-2" type="checkbox">
                                <label for="remember-me-2">Remember Me</label>
                            </div>
                            <div class="forget-link fz-6">
                                <a href="page-reset.html">Forgot password?</a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-md" name="submit">Sign In</button>
                    </form>
                    <div class="sap-text"><span>Or Sign In With</span></div>
                    <ul class="row gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                </div>
                <div class="ath-note text-center tc-light"> Don’t have an account? <a href="page-register.html"> <strong>Sign up here</strong></a>
                </div>
            </div>
        </main>
    </div>
    <!-- Preloader -->
    <div class="preloader"><span class="spinner spinner-round"></span></div>
    <!-- JavaScript -->
    <script src="assets/js/jquery.bundle.js?ver=210"></script>
    <script src="assets/js/scripts.js?ver=210"></script>
    <script src="assets/js/charts.js?ver=210"></script>
    <script src="assets/js/charts.js?ver=210"></script>
</body>

</html>