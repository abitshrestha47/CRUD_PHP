<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <form class="m-4" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h1>Update your information</h1>
    <input type="text" class="form-control" name="title" placeholder="your update value here...">
    <?php
       if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['btn1'])){
            $id=$_POST['btn1'];
        }?>
        <button  class="btn btn-success mt-2" type="submit" name="parsed" value="<?=$id?>">Update</button>
        <?php }?>
    </form>
  </body>
</html>
<?php
    include ('db_config.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['parsed'])){
            $new_title=$_POST['title'];
            $id= $_POST['parsed'];
            $sql="UPDATE doitem set title='$new_title' WHERE ID='$id'";
            $result=$conn->query($sql);
            header('location:todo.php');
        }
   }
?>

