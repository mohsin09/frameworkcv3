
 <body> <table  class=" col-lg-6 m-auto table table-bordered">
   
  <h1 class="text-brand text-center"> List </h1>
  <tr>
  <th>id</th>
  <th>Tittle</th>
  <th>Short-Description</th>
  <th>Details</th>
  <th>Delete</th>
  <th>Update</th>  
  <th>Insert</th> 
  </tr>  
<?php  
include "../pkgdb.php";
$result_per_page=4;
if(!isset($_GET['page'])){
  $page=1;
}else{
  $page=$_GET['page'];
}
$this_page_first_result =($page-1)* $result_per_page;     
        $sql="SELECT * FROM post LIMIT  {$this_page_first_result} , {$result_per_page};";
        $query=mysqli_query($con , $sql);
        while($res=mysqli_fetch_array($query)){
      
?> 







<tr>

  <td><?php echo $res['id']?></td>
  <td><?php echo $res['title'];?></td>
  <td><?php echo $res['short_description'];?></td>
  <td><?php echo $res['details'];?></td>
  <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"> Delete:</a> </button></td>
  <td> <button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update:</a> </button></td>
  <td> <button class="btn-success btn">  <a href="create.php" class="text-white">Insert:</a></button>
</tr>
<?php
//  while($rows=mysqli_fetch_array($query)) {
//     echo $rows['id'] .'  '. $rows['title'] .' '.$rows['short_description'] . ' ' .$rows['details'] . "<br>";
// } ?>
<?php } ?>


</table>
<?php include("pagenation.php"); ?>
 
 

