<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>customerdetail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      	  </style>
  </head>
  <body>
  	<h1>customer Details</h1>
  		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">message</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
include('connect.php');
$sql="SELECT*FROM custinfo";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0){
 
  while($row= mysqli_fetch_array($result))
  {


?>

    <tr>
      <th scope="row"><?php echo$row['id'];?></th>
      <td><?php echo$row['name'];?></td>
      <td><?php echo$row['email'];?></td>
       <td><?php echo$row['phone'];?></td>
              <td><?php echo$row['message'];?></td>


     
     
    </tr>

 
                      
                      <?php  }  } } ?>


  </tbody>
</table>





</body>
</html>