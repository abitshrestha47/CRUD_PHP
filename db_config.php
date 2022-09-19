<?php
    $conn=new mysqli('localhost:47','root','','todo1');
    if($conn->connect_error){
        die($conn->connect_error);
    }
    // echo "success";
?>