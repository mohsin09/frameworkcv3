<?php
 
include("postdb.php");
     if(isset($_POST['save'])) {
        $id=$_GET['id'];
       $name= $_POST['name'];
       $password= $_POST['password'];
       $sql= "UPDATE `info` SET `id`=$id,`name`=$name,`password`=$password WHERE id=$id ";
       $query=mysqli_query($con , $sql);
       header("location: showlist.php");
     }

?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <body>
           <div class = "col-lg-6 m-auto">
          <form method= "post">
 <div class = "card">
 <div class = "card-header bg-dark">
 <h1 class ="text white"> Update Operation</h1>
 </div>
 <label>Name</label>
 <input type ="text" name = "name" class ="form-control"><br>
 <label>Password</label>
 <input type ="password" name = "password" class ="form-control"><br>
<input type="submit" name ="save" class =" btn btn-success"> 
 </div>
 
 </form>
 </div>
</body>
 </html>