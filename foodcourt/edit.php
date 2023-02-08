<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EditOrder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>CustomerOrders</title>
</head>
<body>
   <?php
        $a1=$_GET['id'];

 
include('connect.php');
        $sql="SELECT * FROM custorder where id='$a1'";

if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0){
 
  while($row= mysqli_fetch_array($result))
  {


?>

  <center>
 <form method="post" action="update.php">
  <h2>Edit Order</h2>
  <a href="menulist.php">View Menulist</a>
  <input type="hidden" name="hide1"  value="<?php echo$row['id'];?>">

    <label>Dish Name</label><br>
    <input type="text" name="name" value="<?php echo$row['name'];?>"><br><br>
        <label for="browser">unit</label><br>
        <input list="unit" placeholder="eg:kg,ltr,pcs,pkt" name="unit" value="<?php echo$row['unit'];?>" >
          <datalist id="unit">
            <option value="kilogram">
            <option value="liter">
            <option value="pockets">
           <option value="pieaces">
          </datalist> 
                  <br><br>


      <label>  Description</label><br>
       <input type="text" name="description" value="<?php echo$row['description']?>"><br>
     <!-- <br><textarea  name="description"></textarea><br><br> -->
            <label>Date</label><br><input type="date" name="date"
                   value="2023-02-07"> <br><br>
                   <label>Payment Method</label>
                   <select>
                     <option>COD</option>
                   </select><br><br>

           <button class="btn btn-dark" type="submit">Save</button>
            <button class="btn btn-dark" type="reset">Cancel</button>
   
 </form>
 <a href="vieworder.php">view my order</a>
</center>
<?php }}}?>
  
</body>
</html>
