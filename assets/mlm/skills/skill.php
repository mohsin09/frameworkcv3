<?php include('../login-check.php'); ?>
<?php include('../common/header.php'); ?>
<?php include('../common/sidebar.php'); ?>             

<body>

      <table class=" col-lg-6 m-auto table table-bordered">
   
  <h1 class="text-brand text-center"> List </h1>
  
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Level</th>
  <th>Last_Used</th>
  <th>Delete</th>
  <th>Update</th>  
  <th>Insert</th> 
  </tr> 
  <?php  
include "../posts/listdb.php";
$result_per_page=4;
if(!isset($_GET['page'])){
  $page=1;
}else{
  $page=$_GET['page'];
}
$this_page_first_result =($page-1)* $result_per_page;     
        $sql="SELECT * FROM skills LIMIT  {$this_page_first_result} , {$result_per_page};";
        $query=mysqli_query($con , $sql);
        
        while($res=mysqli_fetch_array($query)){
      
?> 

<tr>

<td> <?php echo $res['id']?></td>
<td><?php echo $res['name']?></td>
<td> <?php echo $res['level']?></td>
<td ><?php echo $res['last_used']?></td>
<td> <button class="btn-danger btn"><a href="dlt.php?id=<?php echo $res['id'];?>"class="text-white"> Delete:</a> </button></td>
<td> <button class="btn-success btn"> <a href="upd.php?id=<?php echo $res['id'];?>" class="text-white">update:</a></button></td>
<td> <button class="btn-success btn"> <a href="crt.php " class="text-white">Insert:</a></button></td>
</tr>
<?php
//  while($rows=mysqli_fetch_array($query)) {
//     echo $rows['id'] .'  '. $rows['title'] .' '.$rows['short_description'] . ' ' .$rows['details'] . "<br>";
// } ?>
<?php } ?>
<div class="card-footer clearfix">
<div class="container" style="float:right">
<?php
include("pag.php");
?>
  </div>
  </div>
  </div>
  </table>
  </div>
  <div class="card-footer clearfix">
              <a input type="submit" name= "submit" value="logout" class="btn btn-primary" style="float:right" href="../logout.php">Logout</a>
      </div>
 <?php include('../common/footer.php'); ?>
