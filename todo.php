<?php
    include('db_config.php');
    $sql="SELECT * FROM doitem";
    $result=$conn->query($sql);
    // echo "<pre>";
    // print_r($result);
    // echo "<pre>";
    // if(isset($_POST['id'])){
    //     // echo $_POST['id'];
    //     $id=$_POST['id'];
    //     $sql="DELETE FROM doitem WHERE ID='$id'";
    //     $result=$conn->query($sql);
    // }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
        <form action="save-todo.php" method="POST" class="m-4">
            <h1>To do information</h1>
            <input type="text" name="todo" class="form-control" placeholder="enter your todo list...">
            <button type="submit" class="mt-2 btn btn-primary">To Do</button>
        </form>
<table class="table m-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">To Do</th>
      <th colspan="2" scope="col" >Action</th> 
    </tr>
  </thead>
  <tbody>
    <?php while($row=$result->fetch_assoc()){?>
    <tr>
      <th scope="row"><?php echo $row['ID'] ?></th>
      <td><?php echo $row['Title'] ?></td>
      <form method="POST" action="delete.php">
        <td><button type="submit" name="btn" value="<?=$row['ID']?>" class="btn btn-danger">Delete</button></td>
      </form>
      <form action="update.php" method="POST">
      <td><button type="submit" name="btn1" value="<?=$row['ID']?>" class="btn btn-success">Update</button></td>
      </form>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </body>
</html>

