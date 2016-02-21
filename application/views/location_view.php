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
<h1>Add new location</h1>

<div class="loginpage">
<?php if(!empty($this -> session -> userdata('error_message'))) : ?>
	<div class="error"><?php echo $this -> session -> userdata('error_message'); $this -> session -> set_userdata('error_message', '') ; ?></div>
<?php endif; ?>
   <form method="post" action="">
     <label for="location_go">Location Start:</label>
     <input type="text" size="20" id="location_go" name="location_go"/>
     <br/>
     <label for="location_come">Location End:</label>
     <input type="text" size="20" id="location_come" name="location_come"/>
     <br/>
	 <label for="date">Date: (yyyy-mm-dd)</label>
     <input type="date" size="20" id="date" name="date"/>
     <br/>
     <input type="submit" value="Search"/>
   </form>
</div>
</section>

</body>