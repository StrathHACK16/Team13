<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="http://trip-scanner.net/assets/style.css" rel="stylesheet" type="text/css">
</head>
<body background="http://trip-scanner.net/assets/Wallpapers/wall2.jpg">
<h1>TRIP SCANNER</h1>
<section class="loginform cf">

<div class="loginpage">
<?php if(!empty($this -> session -> userdata('error_message'))) : ?>
	<div class="error"><?php echo $this -> session -> userdata('error_message'); $this -> session -> set_userdata('error_message', '') ; ?></div>
<?php endif; ?>
<form class="loginform" name="login" action="http://trip-scanner.net/authentification/register" method="post" accept-charset="utf-8">
	  <input type="text" name="name" placeholder="Full Name"/>
	  <input type="text" name="email" placeholder="email address"/>
      <input type="password" name="password" placeholder="password" />
      <button>Register</button>
 </form>
</div>
</section>

</body>

</html>
