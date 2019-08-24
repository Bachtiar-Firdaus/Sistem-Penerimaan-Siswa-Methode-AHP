<?php 
 
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION['MM_Username'])) {
	header("Location: dashboard.php");
	exit;
}
require_once('Connections/koneksi.php');
$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "dashboard.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_koneksi, $koneksi);
  
  $LoginRS__query=sprintf("SELECT username, password FROM tb_users WHERE username=%s AND password=LEFT(PASSWORD(%s), 12)",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}

 ?>
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN SYSTEM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/newdms/assets/bower_components/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/newdms/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/newdms/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/newdms/assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/newdms/assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
  <style>
	body {
		margin-top:50px;
	}
  </style>
</head>

<h1>Program SPK</h1>

  <div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>

    <form action="<?php echo $loginFormAction; ?>" method="POST" name="login" autocomplete="off">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username atau email ..">

      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password ..">

      
      <button type="submit" name="submit" class="btn btn-info btn-block btn-flat">Sign In</button>

      <br/>
      <br/>
      <center>
        <a class="link" href="https://www.malasngoding.com">kembali</a>
      </center>
    </form>
    
  </div>

    
        
      </div>
      <!-- /.login-box-body -->
   	  </div>
	<!-- /.login-box --> 
</div>
<div class="col-md-8">
 
</div>    
<!-- jQuery 3 -->
<script src="http://localhost/newdms/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/newdms/assets/bower_components/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="http://localhost/newdms/assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html> 