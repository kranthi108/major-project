<!DOCTYPE html>
<html>
<head>
  <?php
// Start the session
session_start();
?>
	<title>EDUCENTER</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- 	<script src='lib/angular/angular.min.js'></script> -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
 	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js'></script>
 	<script src='js/bootstrap.min.js'></script>
  <script src="js/myfile.js"></script>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

   <script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       });
   </script>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
    footer { background-color:#0c1a1e; min-height:350px; font-family: 'Open Sans', sans-serif; }
    .footerleft { margin-top:50px; padding:0 36px; }
    .logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

    .footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
    .footerleft p i { width:20px; color:#999;}


    .paddingtop-bottom {  margin-top:50px;}
    .footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
    .footer-ul li { line-height:29px; font-size:12px;}
    .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
    .footer-ul i { margin-right:10px;}
    .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }

    .social:hover {
         -webkit-transform: scale(1.1);
         -moz-transform: scale(1.1);
         -o-transform: scale(1.1);
     }
     
     

     
     .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
     .icon-ul li { line-height:75px; width:100%; float:left;}
     .icon { float:left; margin-right:5px;}
     
     
     .copyright { min-height:40px; background-color:#000000;}
     .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}
     .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
     .post p { font-size:12px; color:#FFF; line-height:20px;}
     .post p span { display:block; color:#8f8f8f;}
     .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
     .bottom_ul li { float:left; line-height:40px;}
     .bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}
     .bottom_ul li a { color:#FFF;  font-size:12px;}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
  <?php 
        if($_SESSION["user"]==NULL)
         {
           header('Location: signup.php'); 
          } ?>
       <div>
          <nav class='navbar navbar-inverse'>
            <div class='container-fluid'>
              <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>                        
                </button>
                <a class='navbar-brand' href='#'><img src='photos/logo1.png' alt = 'no image' style='width:50px;height:18px;' ></img></a>
              </div>
              <div class='collapse navbar-collapse' id='myNavbar'>
                <ul class='nav navbar-nav'>
                  <li class='active'><a href='index.php'>Home</a></li>
                  <li><a href='index.php'>About</a></li>
                  <li><a href='#'>Projects</a></li>
                  <li><a href='#'>Contact</a></li>
                        <form class='navbar-form navbar-left' method="Post" action="search.php">
                          <div class='form-group'>
                            <input type='text' class='form-control' placeholder='Search'>
                          </div>
                          <button type='submit' class='btn btn-default'>Submit</button>
                        </form>                  
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                  <?php 
                  if($_SESSION["user"]==NULL){

                  echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                  <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                } else
                {

                  #echo "<li><a href='index.php'><span class='glyphicon glyphicon-user'></span>"." ".$_SESSION["user"]."</a></li>";
                 echo " <div class='dropdown'>
  <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>&nbsp " . $_SESSION["user"]."&nbsp
  <span class='caret'></span></button>
  <ul class='dropdown-menu'>
 <li>  <a href='#'>Edit Profile</a></li>
     <li> <form action='projects.php' method='post'><input type='Submit' value='My Projects' name='option'></form></li>
     <li> <a href='#'>Messages</a></li>
    <li>  <a href='logout.php'>Logout</a> </li>
  </ul>
</div>";
 #   <li class="dropdown">
  #  <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Dropdown</a>
   # <div class="dropdown-content" id="myDropdown">
    #  <a href="#">Link 1</a>
     ##<a href="#">Link 3</a>
    #div>
  #</li>

                }

                  ?>
                  
                </ul>
              </div>
            </div>
          </nav>

          <div class='container-fluid text-center'>    
            <div class='row content'>
              <div class='col-sm-2 sidenav'>
              <br><br>
                <p><form action='projects.php' method='post'><input type='Submit' value='Post New Project' name='option'></form></p><br><br>
                <p><a href='#'>Areas of Interests</a></p><br><br>
                <p><a href='#'>Chat room</a></p><br><br>
                <p><a href='#'>Edit</a></p><br><br>

              </div>
              <div class='col-sm-8 text-left'> 
                    <br><br>                
                <!-- <table>
                  <thead
                    <tr>
                      <th>Firtst name</th>
                      <th>Last name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr> -->
                      <?php

                        

			                      $servername = "athena.nitc.ac.in";
			                      $username = "b130417cs";
			                      $password = "b130417cs";
			                      $dbname = "db_b130417cs";
                            $option=$_POST['option'];
			                      // Create connection
			                      $conn = mysqli_connect($servername, $username, $password, $dbname);

			                      // Check connection
			                      if (!$conn) 
			                      {
			                          die('Connection failed: ' . mysqli_connect_error());
			                      }
                            
                            if($option=='submit')
                            {
                              $title=$_POST['title'];
                              $field=$_POST['field'];
                              $description=$_POST['description'];
                              $startdate=$_POST['startdate'];
                              #echo "date =".$startdate;
                              $status=$_POST['status'];
                              $user=$_SESSION['user'];
                              $sql="insert into project(uname,sdate) values('$user','$startdate');";
                              $result=mysqli_query($conn,$sql);
                              if($result)
                              {
                                $sql1="select sno from project order by sno desc limit 1;";
                                $result1=mysqli_query($conn,$sql1);
                                if($result1){
                                while($row=mysqli_fetch_assoc($result1))
                                {
                                  $sno=$row["sno"];
                                  $ssno=100000+$sno;
                                  $pid="P$ssno";
                                  $sql2="update project set pid='$pid' where sno=$sno ;";
                                  $result2=mysqli_query($conn,$sql2);
                                  if($result2)
                                  {
                                    $sql3="insert into store(pid,name,field,description,status) values('$pid','$title','$field','$description','$status');";
                                    $result3=mysqli_query($conn,$sql3);
                                    if($result3)
                                    {
                                      echo "Project added successfully";
                                       $sql = "SELECT * FROM store where pid='$pid';";
                                      $result = mysqli_query($conn,$sql);

                                     if ($result->num_rows > 0) {
                            
                              
                              // echo '<tr>'.'<th>name</th>'.'<th>pid</th>'.'<th>field</th>'.'<th>description</th></tr>';
                                    while($row = mysqli_fetch_assoc($result))
                                  {
                                  echo "<center><table border=1px width=100% style='width: 800px; padding:10px; border: 5px solid gray; margin: 0; background-color: white; box-shadow:15px 15px; border-radius: 25px;' >";
                                  echo "<tr>"."<td>"."<h3>".$row["name"]."</h3>"."</td>"."</tr>"."<br>"."<tr>"."<td>"."<h4>".$row["description"]."</h4>"."</td>"."</tr>"."<tr>"."<td><h6>&nbsp tags:".$row["field"]." &nbspPosted on:&nbsp".$row["pdate"]."</h6></td></tr><br><br>" ;  
                                  }
                                echo "</table></center><br><br>";
                                 }
                                    }
                                    else
                                    {
                                      echo "Error occurred in uploading project3";
                                    }
                                  }
                                  else
                                    {
                                      echo "Error occurred in uploading project2";
                                    }
                                }
                              }
                              else
                                    {
                                      echo "Error occurred in uploading project1";
                                    }
                            }
                            else
                                    {
                                      echo "Error occurred in uploading project0";
                                    }

                            }
                           else if($option=='Post New Project')
                            {
                              #echo "<center><table border=1px width=50% style='width: 800px; padding:250px; border: 5px solid gray; margin: 0; background-color: white; box-shadow:15px 15px; border-radius: 25px;' >";
    
                              echo "<!-- <tr><td width='75%'><div class='container'>
            <form class='form-horizontal' role='form' method='Post' action = 'projects.php' enctype='multipart/form-data'>
            <!-- <fieldset><legend>New Project</legend> -->
                <!-- <h2><center>&nbsp &nbsp New Project</center></h2>
                <div class='form-group'>
                    <label for='Title' class='col-sm-3 control-label'>Title</label>
                    <div class='col-sm-9'>
                        <input type='text' id='title' name='title' placeholder='Title' class='form-control' autofocus required>
                        <span class='help-block'>NITC EDUCENTER</span>
                    </div>
                </div><br>
             
                <div class='form-group'>
                    <label for='title' class='col-sm-3 control-label'>Field</label>
                    <div class='col-sm-9'>
                        <input type='text' id='title' name='field' placeholder='Field' class='form-control' autofocus required>
                        <span class='help-block'>Web Development,Networks,DBMS,OS</span>
                    </div>
                </div><br>
                
                <div class='form-group'>
                    <label for='title' class='col-sm-3 control-label'>Description</label>
                    <div class='col-sm-9'>
                        <input type='text' id='description' name='description' placeholder='Description' class='form-control' required>
                    </div>
                </div><br>
                <div class='form-group'>
                    <label for='startDate' class='col-sm-3 control-label'>Starting Date(yyyy-mm-dd)</label>
                    <div class='col-sm-9'>
                        <input type='date' id='datepicker' name='startdate' class='form-control' placeholder='Starting Date' required>

                    </div> 
                </div><br>
            <div class='form-group'>
                    <label for='status' class='col-sm-3 control-label'>Status</label>
                    <div class='col-sm-9'>
                        <select id='status' name='status' class='form-control'>
                            <option>InProgress</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div> <br>

            <div class='form-group'>
                    <label for='file' class='col-sm-3 control-label'>File Upload</label>
                    <div class='col-sm-9'>
                        <input type='file' name='fileToUpload' id='fileToUpload' >
                    </div>
                </div> <br>
                <div class='form-group'>
                    <div class='col-sm-9 col-sm-offset-3'>
                        <button type='submit' class='btn btn-primary btn-block' value='submit' name='option'>Submit</button>
                    </div></form>
                    <!--</fieldset>-->
                </td></tr>";

        echo "</table></center><br><br>-->";

                            }
                            else 
                            {
                              $username=$_SESSION['user'];
			                      $sql = "SELECT DISTINCT * FROM store,project where store.pid=project.pid and uname='$username';";
			                      $result = mysqli_query($conn,$sql);

			                      if ($result->num_rows > 0) {
			           			      
                              
                              // echo '<tr>'.'<th>name</th>'.'<th>pid</th>'.'<th>field</th>'.'<th>description</th></tr>';
                                while($row = mysqli_fetch_assoc($result))
                                {
                                  echo "<center><table border=1px width=100% style='width: 800px; padding:10px; border: 5px solid gray; margin: 0; background-color: white; box-shadow:15px 15px; border-radius: 25px;' >";
                                  echo "<tr>"."<td>"."<h3>".$row["name"]."</h3>"."</td>"."</tr>"."<br>"."<tr>"."<td>"."<h4>".$row["description"]."</h4>"."</td>"."</tr>"."<tr>"."<td><h6>&nbsp tags:".$row["field"]." &nbspPosted on:&nbsp".$row["pdate"]."</h6></td></tr><br><br>" ;  
                                }
                                echo "</table></center><br><br>";
                                }
                              }
                            
										  ?>

<!-- 			                       echo '<tr>'.'<td>'.$row['pid'].'</td>'.'<td>'.$row['name'].'</td>'.'<td>'.$row['field'] .'</td>'.'<td>'.$row['description'].'</td>'.'</tr>';  
 -->                      
                     <!--  <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table> -->  
                <!-- <p></p>
                <hr>
                <h3>Anything</h3>
                <p>Kranthi kiran  </p> -->
              </div>
              <div class='col-sm-2 sidenav'>
                <div class='well'>
                  <p>ADS</p>
                </div>
                <div class='well'>
                  <p>ADS</p>
                </div>
              </div>
            </div>
          </div>

          <link href='https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css' rel='stylesheet'>
<!--footer start from here-->
                  <footer>
                    <div class='container'>
                      <div class='row'>
                        <div class='col-md-4 col-sm-6 footerleft '>
                          <div class='logofooter'> <img src='photos/logo1.png' alt = 'no image' style='width:150px;height:50px;' ></div>
                          <p> Educenter is an online portal for the students of NITC to interact with alumni and faculty for queries regarding completed projects, ongoing projects and new project ideas Where a student can choose projects to work with the help of faculty and seniors by this process one can get good access to new projects in different areas and helps students grow in that way recommended</p>
                          <p><i class='fa fa-map-pin'></i> #130, pg2 hostel, NITC hostels, Calicut -110085, INDIA</p>
                          <p><i class='fa fa-phone'></i> Phone (India) : +91 7736859989</p>
                          <p><i class='fa fa-envelope'></i> E-mail : educenter@hotmail.com</p>
                          
                        </div>
                        <div class='col-md-2 col-sm-6 paddingtop-bottom'>
                          <h6 class='heading7'>GENERAL LINKS</h6>
                          <ul class='footer-ul'>
                            <li><a href='#'> Career</a></li>
                            <li><a href='#'> Privacy Policy</a></li>
                            <li><a href='#'> Terms & Conditions</a></li>
                            <li><a href='#'> Services</a></li>
                            <li><a href='#'> Ranking</a></li>
                            <li><a href='#'> Case Studies</a></li>
                            <li><a href='#'> Frequently Asked Questions</a></li>
                          </ul>
                        </div>
                        <div class='col-md-3 col-sm-6 paddingtop-bottom'>
                          <h6 class='heading7'>LATEST POST</h6>
                          <div class='post'>
                            <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2016</span></p>
                            <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2016</span></p>
                            <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2016</span></p>
                          </div>
                        </div>
                        <div class='col-md-3 col-sm-6 paddingtop-bottom'>
                          <div class='fb-page' data-href='https://www.facebook.com/facebook' data-tabs='timeline' data-height='300' data-small-header='false' style='margin-bottom:15px;' data-adapt-container-width='true' data-hide-cover='false' data-show-facepile='true'>
                            <div class='fb-xfbml-parse-ignore'>
                              <blockquote cite='https://www.facebook.com/facebook'><a href='https://www.facebook.com/facebook'>Facebook</a></blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <!--footer start from here-->

                  <div class='copyright'>
                    <div class='container'>
                      <div class='col-md-6'>
                        <p>© 2016 - All Rights with Webenlance</p>
                      </div>
                      <div class='col-md-6'>
                        <ul class='bottom_ul'>
                          <li><a href='#'>webenlance.com</a></li>
                          <li><a href='#'>About us</a></li>
                          <li><a href='#'>Blog</a></li>
                          <li><a href='#'>Faq's</a></li>
                          <li><a href='#'>Contact us</a></li>
                          <li><a href='#'>Site Map</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>