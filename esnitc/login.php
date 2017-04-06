<!DOCTYPE html>
<html>
<head>
    <title>EDUCENTER</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='lib/angular/angular.min.js'></script>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
<?php
// Start the session
session_start();
?>

<style>
body{
    background: url(http://mymaplist.com/img/parallax/back.png);
    background-color: #444;
    background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
}

.vertical-offset-100{
    padding-top:100px;
}

</style>
</head>
<body>
<script src='http://mymaplist.com/js/vendor/TweenLite.min.js'></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<?php 
$servername='athena.nitc.ac.in';
    $username='b130417cs';
    $password='b130417cs';
    $db='db_b130417cs';
    $conn=mysqli_connect($servername,$username,$password,$db);
    if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
$option=$_POST["option"];
echo $_SESSION["user"];
if($_SESSION["user"]!=NULL)
{
	echo "Already logged in as ".$_SESSION["user"];
	header('Location: index.php');  
}
else if($option=='Login')
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from user where email='$email'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_assoc($result))
{
	$new_password=$row["password"];
	#echo "new=$new_password";
	
	if($password==$new_password)
	{
	$_SESSION["user"]=$row["uname"];
	$uname=$row["uname"];
	$_SESSION["user"]=$uname;
        if($uname=='admin')
        {
            header('Location: adminpage.php');
        }
        else{
        header('Location: index.php'); 
        } 
	#header('Location: index.php');  
	
	}
	else
	{
		echo "<div class='container'>
    <div class='row vertical-offset-100'>
        <div class='col-md-4 col-md-offset-4'>
    		<div class='panel panel-default'>
    		<h3 ><font color='red'>You have enter Email/Password Incorrect!!!<font color='black'></h3>
			  	<div class='panel-heading'>
			    	<h3 class='panel-title'>Please sign in</h3>
			 	</div>
			  	<div class='panel-body'>
			    	<form accept-charset='UTF-8' role='form' method='post' action='login.php'>
                    <fieldset>
			    	  	<div class='form-group'>
			    		    <input class='form-control' placeholder='E-mail' name='email' type='email' required>
			    		</div>
			    		<div class='form-group'>
			    			<input class='form-control' placeholder='Password' name='password' type='password' required>
			    		</div>
			    		<div class='checkbox'>
			    	    	<label>
			    	    		<input name='remember' type='checkbox' value='Remember Me'> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class='btn btn-lg btn-success btn-block' type='submit' value='Login' name='option'>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>";
	}
}
else
{
echo "<div class='container'>
    <div class='row vertical-offset-100'>
        <div class='col-md-4 col-md-offset-4'>
    		<div class='panel panel-default'>
    		<h3 ><font color='red'>You have enter Email/Password Incorrect!!!<font color='black'></h3>
			  	<div class='panel-heading'>
			    	<h3 class='panel-title'>Please sign in</h3>
			 	</div>
			  	<div class='panel-body'>
			    	<form accept-charset='UTF-8' role='form' method='post' action='login.php'>
                    <fieldset>
			    	  	<div class='form-group'>
			    		    <input class='form-control' placeholder='E-mail' name='email' type='email' required>
			    		</div>
			    		<div class='form-group'>
			    			<input class='form-control' placeholder='Password' name='password' type='password' required>
			    		</div>
			    		<div class='checkbox'>
			    	    	<label>
			    	    		<input name='remember' type='checkbox' value='Remember Me'> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class='btn btn-lg btn-success btn-block' type='submit' value='Login' name='option'>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>";
}
}
else
{
echo "<div class='container'>
    <div class='row vertical-offset-100'>
        <div class='col-md-4 col-md-offset-4'>
    		<div class='panel panel-default'>
			  	<div class='panel-heading'>
			    	<h3 class='panel-title'>Please sign in</h3>
			 	</div>
			  	<div class='panel-body'>
			    	<form accept-charset='UTF-8' role='form' method='post' action='login.php'>
                    <fieldset>
			    	  	<div class='form-group'>
			    		    <input class='form-control' placeholder='E-mail' name='email' type='email' required>
			    		</div>
			    		<div class='form-group'>
			    			<input class='form-control' placeholder='Password' name='password' type='password' required>
			    		</div>
			    		<div class='checkbox'>
			    	    	<label>
			    	    		<input name='remember' type='checkbox' value='Remember Me'> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class='btn btn-lg btn-success btn-block' type='submit' value='Login' name='option'>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>";
}
 ?>
</body>
</html>