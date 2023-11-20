<?php

if (isset($_POST["save"])) {

  $username = $_POST["un"];
  $password = $_POST["pw"];

  $con = mysqli_connect("localhost","root","","oslt");
  $query = "select*from reg1 where Email='$username' and Password='$password'";
  $result = mysqli_query($con, $query);
  $c = mysqli_num_rows($result);
  if ($c > 0) {
      session_start();
      $_SESSION['un'] = $username;
      echo "<script>
          window.location.assign('homef.php');
          alert('Login Successfull');
          </script>";
    }
 else {
    echo "<script>alert('check the entered details')</script>";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            width: 1000px;
            margin: 0;
            margin-left: auto;
            margin-right: auto;
            background-image: url(https://www.mixedinamerica.org/wp-content/uploads/2018/08/image-background-color-5.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding-bottom: 50px;
        }
        form{
            padding: 20px;
            padding-top: 90px;
            margin-left: auto;
            margin-right: auto;
        }
        input[type=submit]{
         background-color: #0056ff;
         padding-top: 12px;
         padding-bottom: 12px;
         padding-left: 24px;
         padding-right: 24px;
         font-size:15px;
         color:white;
         border: none;
         border-radius: 24px;
       }
       input[type=submit]:hover{
        transition: 0.4s;
        background-color: darkblue;
       }
        input[type="text"]{
            border-left: none;
            border-right: none;
            border-top: none;
            border-bottom: 1px solid black;
            border-radius: 24px;
            width: 40%;
        }
        input[type="email"]{
            border-left: none;
            border-right: none;
            border-top: none;
            border-bottom: 1px solid black;
            border-radius: 24px;
            width: 40%;
        }
        
        input[type="text"]:hover{
            background-color: rgb(192, 190, 190);
            transition: 0.4s;
        }
        input[type="email"]:hover{
            background-color: rgb(192, 190, 190);
            transition: 0.4s;
        }
        input{
            padding: 20px;
        }
        span{
            padding: 3px;
        }
        a{
            text-decoration: none;
        }
      
    </style>
</head>
<body>
    <br>
    <br>
   
    <center><form method="post">
        <center><h1>Sign In</h1></center>
        <br>
       <input type="email" placeholder="Email" name="un" required><br><br>
       <input type="text" placeholder="Password" name="pw" required><br><br>
       <input type="submit" value="Login" name="save" onclick="login()"><br><br>
       <span><a href="regff.php">Create an Account?</a> </span>
       <span><a href="regff.php" style="padding: 10px;">Forget Password?</a></span>
       <h3>(Or)</h3>
       <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/1200px-Google_%22G%22_Logo.svg.png" width="50px" height="50px"></span>
       <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" width="50" height="50"></span>
       <span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/LinkedIn_icon_circle.svg/800px-LinkedIn_icon_circle.svg.png" height="50" width="50"></span>
       <span><img src="https://www.logo.wine/a/logo/GitHub/GitHub-Logo.wine.svg" height="60" width="60"></span><br>
      
        </form></center>
    </fieldset>
       
</body>
</html>