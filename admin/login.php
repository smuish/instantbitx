<?php 
  @session_start();
  include_once "../dashboard/config.php";
  include_once "User.php";

  $cs = new User();
  $error = "";
  if(isset($_POST['submit'])){

    $authenticate =mysqli_fetch_assoc( $cs->login($_POST));

    if($authenticate){

       $_SESSION['loggin'] = "logged";
       $_SESSION['owner'] = $authenticate['id'];
       $_SESSION['type'] = "customer";
       
       
       header("location:index.php");
    }else{

      $error = "Invalid details. Try again";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
    <div style="display:flex; justify-content: center; align-items: center; height: 100vh">
      
      <div class="col-md-3 col-sm-12 card" >
      <div style="max-width: 200px; margin:20px auto">
        <img src="https://instantbitx.com/dashboard/assets/img/logo.png" width="100%" style="margin:0px auto" />
      </div>
        <form method="POST">
        <?php echo isset($_POST['submit']) ? $error : ""; ?>
        <div class="form-group">
          <input type="text" name="username" id="username" placeholder="Username" class="form-control"/>
        </div>
        <div class="form-group">
          <input type="password" name="pssw" id="pssw" placeholder="Password" class="form-control" />
        </div>

        <div class="form-group text-center">
          <button name="submit" class="btn btn-danger">Login</button>
        </div>
      </form>
    </div>
    </div>
</body>
</html>