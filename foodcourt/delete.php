<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CustomerOrders</title>
</head>
<body>
  <h1>Delete</h1>
  <?php
  $v1=$_GET['id'];

  include('connect.php');

  $sql="DELETE FROM `custorder` WHERE id='$v1'";

  if(mysqli_query($link,$sql))
  {
    echo $v1,"record deleted";
  }
  else
  {
    echo"cant excecute".mysql_error($link);
  }
  header("location:vieworder.php");

  mysqli_close($link)
  ?>
  
  
</body>
</html>
