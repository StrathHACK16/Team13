<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Main</title>
<link href="<?php echo base_url('assets/style2.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body background="<?php echo base_url('assets/Wallpapers/wall2.jpg'); ?>">    
    <ul>
      <li><a class="navigation" href="<?= base_url('members'); ?>">Home</a></li>
      <li><a class="navigation" href="<?= base_url('members/maps'); ?>">Maps</a></li>
      <li><a class="navigation" href="<?php echo base_url('members/add_name'); ?>">Create Trip</a></li>
      <li><a class="navigation" href="<?= base_url('authentification/logout'); ?>">Logout</a></li>
    </ul>
	
<section class="loginform cf">
<h1>Create a new Trip</h1>

<div class="loginpage">
<?php if(!empty($this -> session -> userdata('error_message'))) : ?>
	<div class="error"><?php echo $this -> session -> userdata('error_message'); $this -> session -> set_userdata('error_message', '') ; ?></div>
<?php endif; ?>
<form class="loginform" name="login" action="" method="post" accept-charset="utf-8">
	  <input type="text" name="name" placeholder="Trip Name"/>
      <button>Create Trip</button>
 </form>
</div>
</section>

</body>

</html>
