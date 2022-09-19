<?php
    include ('db_config.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $todo=$_POST['todo'];
        $sql="INSERT INTO doitem(Title) VALUES ('$todo')";
        $result=$conn->query($sql);
        header('location:todo.php');
    }
?>