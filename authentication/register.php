 <?php
session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../public/backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/backend/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../public/backend/assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../public/backend/assets/css/main.min.css" rel="stylesheet">
    <link href="../public/backend/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../public/backend/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../public/backend/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="login.php">Sign Up</a></p>
<form action="manage.php" method="post">
            <div class="auth-credentials m-b-xxl">
            <label for="signInEmail" class="form-label">Name</label>
    <input name="username" type="text" class="form-control m-b-md {
<?php if(isset($_SESSION['name_error'])) {echo'is-invalid';}else{echo'';}?>
" id="signInEmail" aria-describedby="signInEmail" placeholder="Enter The Name"
value="<?=(isset( $_SESSION['old_name'])) ? $_SESSION['old_name' ]:'';unset ($_SESSION['old_name']) ?>" >
  <!---name  start--->
 <?php if(isset($_SESSION['name_error'])) { ?>
<div id = "emailhelp"class="form-text m-b-md text-danger"><?php echo $_SESSION['name_error'] ?>*</div>
<?php } unset($_SESSION['name_error'] )?>
<!----name end---->
 
                <label for="signInEmail" class="form-label">Email address</label>
                <input name="email" type="text" class="form-control m-b-md <?php if(isset($_SESSION['email_error'])) {echo'is-invalid';}else{echo'';}?>
                "id="signInEmail" aria-describedby="signInEmail" placeholder="Enter The Email addresss"
                value="<?=(isset( $_SESSION['old_email'])) ? $_SESSION['old_email' ]:'';unset ($_SESSION['old_email']) ?>" >
            
<!---email  start--->
<?php if(isset($_SESSION['email_error'])) { ?>
<div id = "emailhelp"class="form-text m-b-md text-danger"><?php echo $_SESSION['email_error'] ?>*</div>
<?php } unset($_SESSION['email_error'] )?>
<!----email end---->

                <label for="signInPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control m-b-md <?php if(isset($_SESSION['password_error'])) {echo'is-invalid';}else{echo'';}?> 
                "id="signInPassword" aria-describedby="signInPassword" placeholder="Password"
                value="<?=(isset( $_SESSION['old_password'])) ? $_SESSION['old_password' ]:'';unset ($_SESSION['old_password']) ?>" >
<div class="my-2">
<input type="checkbox" onclick="showpass()">Show Password
</div>

                <!---password  start--->
<?php if(isset($_SESSION['password_error'])) { ?>
<div id = "emailhelp"class="form-text m-b-md text-danger"><?php echo $_SESSION['password_error'] ?>*</div>
<?php } unset($_SESSION['password_error'] )?>
<!----password end---->

                <label for="signInEmail" class="form-label">Confirm Password</label>
                <input name="c_password" type="password" class="form-control m-b-md <?php if(isset($_SESSION['c_password_error'])) {echo'is-invalid';}else{echo'';}?> 
                "id="signInPassword" aria-describedby="signInEmail" placeholder="password"
                value="<?=(isset( $_SESSION['old_c_password'])) ? $_SESSION['old_c_password' ]:'';unset ($_SESSION['old_c_password']) ?>" >
<div class="my-2">
<input type="checkbox" onclick="shoconfram()">Show Password
</div>     
<!---c-password  start--->
<?php if(isset($_SESSION['c_password_error'])) { ?>
<div id = "emailhelp"class="form-text m-b-md text-danger"><?php echo $_SESSION['c_password_error'] ?>*</div>
<?php } unset($_SESSION['c_password_error'] )?>
<!---c-password end---->
 

            </div>
 
            <div class="auth-submit"> 
                <button name="register"type="submit" class="btn btn-primary">Sign In</a>
            </div>

    </form>
            <div class="divider"></div>            
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="../public/backend/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../public/backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/backend/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../public/backend/assets/plugins/pace/pace.min.js"></script>
    <script src="../public/backend/assets/js/main.min.js"></script>
    <script src="../public/backend/assets/js/custom.js"></script>

<!--show password--->
<script>
    function showpass () {
  var x = document.getElementById("signInPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
<!---c-show password--->
<script>
    function shoconfram() {
  var x = document.getElementById("signInPassword");
  if (x.type === "c_password") {
    x.type = "text";
  } else {
    x.type = "c_password";
  }
}




</body>
</html>