<?php
include "connection.php";
include "navbar.php ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box2
{
height: 590px;
width: 400px;
background-color:black;
margin: 0px auto;
opacity: .7;
color: white;
padding: 20px;
} 
      
      section
  {
    margin-top: -20px;
  }
      </style>
      </head>
      <body>
        <!--  <nav class="navbar navbar-inverse">
              <div class="container-fluid">
          <div class="navbar-header">
      
              <a class="navbar-brand " >ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
                  <ul class="nav navbar-nav">
                      <li><a href="index.php">HOME</a></li>
                      <li><a href="">BOOKS</a></li>
      
                      <li><a href="">FEEDBACK</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="student_login.html"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                  <li><a href="student_login.html"><span class =" glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                  <li><a href="registration.html"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
              </div>
              </nav>-->
</head>
<body>
    <section>
        <div class="reg_img">
         <div class="box2">
             <h1 style ="text-align: center;font-size: 35px;font-family: Lucida Console;">&nbsp Library Management System</h1>
             <h1 style="text-align:center;font-size:20px;">User Registration Form</h1>
             <form name="Registration" action="" method="post">
                 
                 <div class="login">
                    <input class="form-control" type ="text" name="first" placeholder="First Name" required=""><br>
                    
                    <input class="form-control" type ="text" name="last" placeholder="Last Name" required="">
                    <br>
                 <input  class="form-control" type = "text" name="username" placeholder="Username" required=""><br>
                
                 <input  class="form-control" type = "password" name="password" placeholder="Password" required=""><br>
                 <input  class="form-control" type ="text" name ="roll" placeholder="Roll No" required=""><br>

                 <input  class="form-control" type ="text" name="email" placeholder="Email" required=""><br>
                 <input  class="form-control" type ="text" name="contact" placeholder="Phone No" required=""><br>
                 <input class ="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:black; width: 70px; height:30px">
                 </div>
             </form>
            
         </div>
 
        </div>
     </section>
     <?php
     if(isset($_POST['submit']))
     {
        $count=0;
        $sql="SELECT username from `student` ";
        $res=mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
            if ($row['username']==$_POST['username'])
            {
                $count=$count+1;
            }
        }
        if($count==0)
    
        {mysqli_query($db,"INSERT INTO `student` VALUES ('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]',
        '$_POST[roll]','$_POST[email]','$_POST[contact]','blank.png');");
        ?>
        <script type="text/javascript">
            alert("Registration successfully");
        </script>
        <?php
     }
     else
     {
        ?>
        <script type="text/javascript">
            alert("The username already exists.");
        </script>
        <?php

       }
      }
     ?>
     </body>