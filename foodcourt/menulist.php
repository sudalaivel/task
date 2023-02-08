<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      	  </style>
  </head>
  <body>

  	<h1>Menu List</h1>
    <a href="admin.php">AddnewDishes</a>


  		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DishName</th>
     <th scope="col">Type</th>
      <th scope="col">Prize</th>
      <th scope="col">Unit</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>


    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
include('connect.php');
$sql="SELECT*FROM admins";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0){
 
  while($row= mysqli_fetch_array($result))
  {


?>

    <tr>
      <th scope="row"><?php echo$row['id'];?></th>
      <td><?php echo$row['type'];?></td>
      <td><?php echo$row['Itemname'];?></td>
       <td><?php echo$row['unit'];?></td>
        <td><?php echo$row['sellprice'];?></td>
       <td><?php echo$row['descript'];?></td>
       <td><?php echo$row['date'];?></td>

      <!-- <td class="space"><a href="menuedit.php?id=<?php echo$row['id'];?>"><i class="fa fa-pencil" style="font-size:24px"></i></a>   ,
      	<a href="menudelete.php?id=<?php echo$row['id'];?>"><i class="fa fa-trash" style="font-size:24px">	</i></a><br>
      </td> -->
     
    </tr>

 
                      
                      <?php  }  } } ?>


  </tbody>
</table>

  	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>