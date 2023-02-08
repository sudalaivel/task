<?php
  $i1 = $_FILES['name'];
  $i2 = $_FILES['unit'];
  $i3 = $_POST['description'];
  $i4 = $_POST['date'];
  $v1=$_POST['hide1'];
  echo $image1;

 include('connect.php');
  

  $sql="UPDATE `custorder` SET name='$i1',unit='$i2',description='$i3',date='$i4' WHERE id='$v1'";


  if(mysqli_query($link,$sql))

  {
    header("location:vieworder.php");
  }
  else
  {
    echo"cant able to excecuted".mysqli_error($link);
  }
  
  mysqli_close($link)
?>  