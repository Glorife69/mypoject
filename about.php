<?php

session_start();
$con= mysqli_connect('localhost','root',"",'event_management');




if (isset($_POST['save_datetime']))    
{
    $fname= $_POST[ 'fname'];
    $lname= $_POST[ 'lname'];
    $email= $_POST[ 'email'];
    $number= $_POST[ 'number'];
    $event_dt=$_POST[ 'event_dt'];
    $type=$_POST[ 'type'];
    $others=$_POST[ 'others'];
    


   

   $query="INSERT INTO users (fname,lname,email,number,eventdt,type,others)
    VALUES('$fname','$lname',' $email',' $number ','$event_dt ','$type' ,'$others')";
    $query_run=mysqli_query($con,$query);
    header('location:index.php#contact');

  
    
    

}


  













?>