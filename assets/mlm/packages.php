
<?php 

include('common/header.php'); 
include('common/connection.php'); 
include('login-check.php'); 
include('common/sidebar.php');             

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header"> 
      <div class="container-fluid">
     <body> <table class=" col-lg-6 m-auto table table-bordered">
   
  <h1 class="text-brand text-center"> Packages </h1>
  
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Amount</th>
  <th>Roi_percentage</th>
  <th>Binary_Percentage</th>
  <th>Day</th>  
  <th>Delete</th> 
  <th>Update</th> 
  <th>Insert</th> 
  </tr> 
  <?php  
// include "pkgdb.php";
$result_per_page=4;
if(!isset($_GET['page'])){
  $page=1;
}else{
  $page=$_GET['page'];
}
$this_page_first_result =($page-1)* $result_per_page;     
//         $sql="SELECT * FROM packages LIMIT  {$this_page_first_result} , {$result_per_page};";
//         $query=mysqli_query($con , $sql);
        
//         while($res=mysqli_fetch_array($query)){
  $sql="SELECT * FROM packages LIMIT  {$this_page_first_result} , {$result_per_page};";
$records = $connection->getRows($sql);
      
?> 
<?php foreach($records as $res){ ?>
<tr>

<td> <?php echo $res['id']?></td>
<td><?php echo $res['name']?></td>
<td> <?php echo $res['amount']?></td>
<td ><?php echo $res['roi_percentage']?></td>
<td ><?php echo $res['binary_percentage']?></td>
<td ><?php echo $res['days']?></td>
<td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white"> Delete:</a> </button></td>
<td> <button class="btn-success btn"> <a href="update.php?id=<?php echo $res['id'];?>" class="text-white">update:</a></button></td>
<td> <button class="btn-success btn"> <a href="insert.php " class="text-white">Insert:</a></button></td>
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
 </div>
  </div>
  </div>
 <?php include('common/footer.php'); ?>
