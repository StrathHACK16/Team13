<!DOCTYPE html>
<html lang="en">
  <head>
	<style type="text/css">
		.patrat
		{
			width: 100px;
			height: 200px;
			float: left;
			margin-right: 30px;
			border: 1px solid #000;
			background-color: #777;
		}
		.patrat:hover 
		{
			background-color: #ccc;
		}
		.buton
		{
			padding: 4px;
			border: 1px solid #cecece;
			background: rgba(255,255,255,1);
			background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 18%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
			background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(18%, rgba(252,252,252,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
			background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 18%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
			background: -o-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 18%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
			background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 18%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
			background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(252,252,252,1) 18%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );
			text-decoration: none;
		}
	</style>
  </head>
  <body>
	 <div class="node2">
     <?php foreach($trips as $trip){?>

		<div class="item2">
			   <div class="location">
					<div class="loc_details2">
						<a href="main/trip/<?php echo $trip->id;?>" style="text-decoration:none"> 
							<img src="<?php echo base_url('assets/images2/'. rand(1, 8) .'.jpg'); ?>" />
							<h1>  <?php echo $trip->name;?> </h1> 
						</a>
					</div>
			   </div>
		</div>	   

     <?php }?>  
 	</div>
 
  </body>
</html>
