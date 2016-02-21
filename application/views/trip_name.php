<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Create your own trip!</title>
   <style type="text/css">
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
   <h1>Create your own trip!</h1>
   <?php?>
   <form method="post" action="">
     <label for="name">Name of the trip:</label>
     <input type="text" size="20" id="name" name="name"/>
	 <input type="submit" name="Submit" value="Submit">
   </form>
 </body>
</html>