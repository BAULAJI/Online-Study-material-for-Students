<?php
   $Firstname=$_POST['Firstname'];
   $Lastname=$_POST['Lastname'];
   $Email=$_POST['Email'];
   $Phonenumber=$_POST['Phonenumber'];
   $Password=$_POST['Password'];
   $Age=$_POST['Age'];
   
   $conn=new mysqli('localhost','root','','oslt');
   if($conn->connect_error)
   {
    die('Connection Failed :'.$conn->connect_error);
   }
   else{
    $stmt=$conn->prepare("insert into reg1(Firstname,Lastname,Email,Phonenumber,Password,Age)values(?,?,?,?,?,?)");
    $stmt->bind_param("sssisi",$Firstname,$Lastname,$Email,$Phonenumber,$Password,$Age);
    $stmt->execute();
    include("homef.php");
    $stmt->close();
   }

?>