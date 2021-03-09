
<?php include('../posts/listdb.php');   ?>


<?php
$id=$_GET['id'];
$sql="DELETE FROM `skills` WHERE id=$id";
mysqli_query($con, $sql);
header("location:skill.php");
?>    
<?php include('../common/footer.php'); ?>