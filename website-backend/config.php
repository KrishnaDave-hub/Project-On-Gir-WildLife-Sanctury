<?php
    $sever="localhost";
    $user="root";
    $pass="";
    $database="website form";

    $conn=mysqli_connect($sever,$user,$pass,$database);

    if(!$conn){
        echo"<script>alert('Connection Failed.')</script>";
    }
?>