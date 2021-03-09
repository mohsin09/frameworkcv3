
<html>
<head>
<tittle></tittle>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
  <div class="col-lg-10">
  <table class=" table table-striped table-hover table table-border">
  <h1 class="text-warning text-center"> Display Table </h1>
  <tr>
  <th>id</th>
  <th>Name</th>
  <th>Password</th>
  <th>Delete</th>
  <th>Update</th>
</tr>

<?php  
include "postdb.php";     
        $sql="SELECT * FROM info";
        $query=mysqli_query($con , $sql);
        while($res=mysqli_fetch_array($query)){
      
?> 

<tr>
  <td><?php echo $res['id']?></td>
  <td><?php echo $res['name'];?></td>
  <td><?php echo $res['password'];?></td>
  <td> <button class="btn-danger-btn"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"> Delete:</a> </button></td>
  <td> <button class="btn-danger-btn"><a href="update.php? id=<?php echo $res['id'];?>"class="text-white">Update:</a> </button></td>
</tr>
<?php } ?>


  </table>
  </div>
  </div>