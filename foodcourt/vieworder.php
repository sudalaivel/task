<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MakeOrder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>CustomerOrders</title>
</head>
<body>
	  	<h1>Order List</h1>
  		<table class="table"> 
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Dish Name</th>
      <th scope="col">unit</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>

     <th scope="col">action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
include('connect.php');
$sql="SELECT*FROM custorder";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0){
 
  while($row= mysqli_fetch_array($result))
  {


?>

    <tr>
      <th scope="row"><?php echo$row['id'];?></th>
      <td><?php echo$row['name'];?></td>
      <td><?php echo$row['unit'];?></td>
       <td><?php echo$row['description'];?></td>
              <td><?php echo$row['date'];?></td>


      <td class="space"><a href="edit.php?id=<?php echo$row['id'];?>"><i class="fa fa-pencil" style="font-size:24px"></i></a>   ,
      	<a href="delete.php?id=<?php echo$row['id'];?>"><i class="fa fa-trash" style="font-size:24px">	</i></a><br>
      </td>
     
    </tr>

 
                      
                      <?php  }  } } ?>


  </tbody>
</table>

</body>
</html>