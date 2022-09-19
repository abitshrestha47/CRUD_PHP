<?php
//     include('db_config.php');
//     //  $id=$_GET['id'];
//     //  echo $id;
//    if(isset($_POST['delete'])){
//        $id=$_POST['id'];
//         $sql="DELETE FROM doitem WHERE ID='$id'";
//         $result=$conn->query($sql);
//     }
    include ('db_config.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $id= $_POST['btn'];
        echo $id;
        $sql="DELETE FROM doitem WHERE ID='$id'";
        $result=$conn->query($sql);
        header('location:todo.php');
    }
?>