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
	  <?php if(isSet($trip_id)): ?>
	  <li><a class="navigation" href="<?= base_url('members/add_trips/' . $trip_id); ?>">Add Location</a></li>
	  <?php endIf; ?>
      <li><a class="navigation" href="<?= base_url('authentification/logout'); ?>">Logout</a></li>
    </ul>
