<!DOCTYPE html>
<html>
<title>
	NITC EDUCENTER | Logout
</title>
<head>
	 <?php
// Start the session
session_start();
?>
<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- 	<script src='lib/angular/angular.min.js'></script> -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
 	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js'></script>
 	<script src='js/bootstrap.min.js'></script>
  <script src="js/myfile.js"></script>
  <link rel="stylesheet" type="text/css" href="style/myfile.css">


</head>
<body>
<?php 
$_SESSION["user"]=NULL;
header('Location: index.php');

?>

</body>
</html>
