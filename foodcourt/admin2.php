<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      	  </style>
  </head>
  <body>
        <?php
    $a1=$_POST['r1'];
    $a2=$_POST['name'];
    $a3=$_POST['unit'];
    $a4=$_POST['price'];
    $a5=$_POST['description'];
    $a6=$_POST['date'];
echo"work";
include('connect.php');
  
$sql="INSERT INTO `admins`(type,Itemname,unit,sellprice,descript,date) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6')";

  

  if(mysqli_query($link,$sql))

  {
    echo"records added succssfully";
  }
  else
  {
    echo"cant able to excecuted".mysqli_error($link);
  }

  header('location:admin.php');

  mysqli_close($link)
?>  
  </body>
  </html>