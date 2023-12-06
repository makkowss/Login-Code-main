<?php
session_start();
include('config.php');

 if(isset($_SESSION['username'])) {
  
    $user_check = $_SESSION['username'];

    $ses_sql = mysqli_query($conn,"SELECT * from tbl_user2 where username = '$user_check'");

    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);


    if(!isset($_SESSION['username'])){
        header("location:index.php");
    }

 } else {
    header("location:index.php");
 }
?>