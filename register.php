<?php 

    if(isset($_POST['submit'])){
        require_once("../../admin/Customer.php");
        require_once("../../config.php");
        $cm = new Customer();

        $reg = $cm->register($_POST);

       $message = "Registration Successful...We've sent you a verification email.";
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
    <title>Page Register | ICO Crypto - ICO Landing Page &amp; Multi-Purpose Cryptocurrency HTML Template</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=210">
    <link rel="stylesheet" href="assets/css/style.css?ver=210">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="assets/css/theme.css?ver=210">
</head>

<body class="nk-body body-wider bg-light-alt">
    <div class="nk-wrap">
        <main class="nk-pages nk-pages-centered bg-theme">
        <?php if(isset($message)){ ?>

            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="" class="ath-logo"><img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"></a>
                </div>
                <div class="ath-body" style="text-align:center">
                    <?php echo $message; ?>
                </div>
        </div>

<?php  }else{?>
            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="" class="ath-logo"><img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo"></a>
                </div>
                <div class="ath-body">
                    <h5 class="ath-heading title">Sign Up <small class="tc-default">Create New Instantbitx Account</small></h5>
                    <form action="" method="POST">
<!--                         <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" name="username" placeholder="Username" required>
                            </div>
                        </div> -->
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="email" class="input-bordered" name="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" name="repassword" placeholder="Repeat Password" required>
                            </div>
                        </div>
                        <div class="field-item">
                            <input class="input-checkbox" id="agree-term-2" name="tc" type="checkbox" required>
                            <label for="agree-term-2">I agree to Instantbitx <a href="#">Privacy Policy</a> &amp; <a href="#">Terms</a>.</label>
                        </div>
                        <button class="btn btn-primary btn-block btn-md" name="submit">Sign Up</button>
                    </form>
                    <div class="sap-text"><span>Or Sign Up With</span></div>
                    <ul class="btn-grp gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                </div>
                <div class="ath-note text-center tc-light"> Already have an account? <a href="page-login.html"> <strong>Sign in here</strong></a>
                </div>
            </div>
            <?php } ?>
        </main>
    </div>
    <!-- Preloader -->
    <!-- <div class="preloader"><span class="spinner spinner-round"></span></div> -->
    <!-- JavaScript -->
    <script src="assets/js/jquery.bundle.js?ver=210"></script>
    <script src="assets/js/scripts.js?ver=210"></script>
    <script src="assets/js/charts.js?ver=210"></script>
    <script src="assets/js/charts.js?ver=210"></script>
</body>

</html>