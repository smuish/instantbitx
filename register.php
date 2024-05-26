<?php 

    if(isset($_POST['submit'])){
        require_once("admin/Customer.php");
        require_once("dashboard/config.php");
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
                    <form action="" name="svbtn" id="svbtn" method="POST">
                        <!-- <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" name="username" placeholder="Username" required>
                            </div>
                        </div> -->
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="email" class="input-bordered" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap" id="lpss">
                                <input type="password" class="input-bordered" name="password" id="pss" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" name="repassword" id="repss" placeholder="Repeat Password" required>
                            </div>
                        </div>
                        <div class="field-item">
                            <input class="input-checkbox" id="agree-term-2" name="tc" type="checkbox" required>
                            <label for="agree-term-2">I agree to Instantbitx <a href="#">Privacy Policy</a> &amp; <a href="#">Terms</a>.</label>
                        </div>
                        <button class="btn btn-primary btn-block btn-md" name="submit">Sign Up</button>
                    </form>
                </div>
                <div class="ath-note text-center tc-light"> Already have an account? <a href="login.php"> <strong>Login</strong></a>
                </div>
            </div>
            <?php } ?>
        </main>
    </div>
    <!-- Preloader -->
    <div class="preloader"><span class="spinner spinner-round"></span></div>
    <!-- JavaScript -->
    <script src="assets/js/jquery.bundle.js?ver=210"></script>
    <script src="assets/js/scripts.js?ver=210"></script>
    <script>
        ps = document.getElementById('pss')
        reps = document.getElementById('repss')
        document.getElementById('svbtn').addEventListener('submit', registerU)
        function registerU(e){

           // e.preventDefault()

            if(ps.value.length < 6 ){

                ps.focus()
                msg = document.createElement('div')
                msg.innerHTML = "Password should be at least 6 chararcters long"
                document.getElementById('lpss').appendChild(msg)
                
            }else if(ps.value != reps.value){
                ps.focus()
                msg = document.createElement('div')
                msg.innerHTML = "Password mismatch"
                document.getElementById('lpss').appendChild(msg)

            }else{
                document.getElementById("svbtn").submit();
            }
        }
    </script>
</body>

</html>