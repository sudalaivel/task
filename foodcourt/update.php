<?php
  $i1 = $_POST['name'];
  $i2 = $_POST['unit'];
  $i3 = $_POST['description'];
  $i4 = $_POST['date'];
  $v1=$_POST['hide1'];

 include('connect.php');
  

  $sql="UPDATE `custorder` SET name='$i1',unit='$i2',description='$i3',date='$i4' WHERE id='$v1'";

echo$sql;

  if(mysqli_query($link,$sql))

  {
    echo"records updated succssfully";
  }
  else
  {
    echo"cant able to excecuted".mysqli_error($link);
  }
  header("location:vieworder.php");

  mysqli_close($link)
?>  