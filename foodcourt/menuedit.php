<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
          </style>
  </head>
  <body>

     <?php
        $a1=$_GET['id'];

 
include('connect.php');
        $sql="SELECT * FROM admins where id='$a1'";

if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0){
 
  while($row= mysqli_fetch_array($result))
  {


?>


    <center>
 <form method="post" action="adminupd.php">
  <h2>Edit Dish</h2>

    <label>Dish Name</label><br>
    <input type="text" name="name" value="<?php echo$row['id']?>"> <br><br>

<label >Type</label>
<input type="radio"  name="r1" value="veg">
<label>Veg</label>
  <input type="radio" name="r1" value="nonveg">
  <label>nonveg</label><br><br>

    <label>SellingPrice:</label><br>
    <input type="text" name="price"><br>
        <label for="browser">unit</label><br>
        <input list="unit" placeholder="eg:kg,ltr,pcs,pkt" name="unit" >
          <datalist id="unit">
            <option value="kilogram">
            <option value="liter">
            <option value="pockets">
           <option value="pieaces">
          </datalist> 
                  <br><br>


      <label>  Description</label>
       <!-- <input type="text" name="r5"> -->
     <br><textarea name="description"></textarea><br><br>
            <label>Date</label><br><input type="date" name="date"
                   value="2023-02-07"> <br><br>
                  <br>

           <button class="btn btn-dark" type="submit">Save</button>
            <button class="btn btn-dark" type="reset">Cancel</button>
          <? }}} ?>
   
 </form>
</body>
 <div>