
<?php include('..\pkgdb.php'); ?>


<?php
$id=$_GET['id'];
$sql="DELETE FROM `post` WHERE id=$id";
mysqli_query($con, $sql);
header("location:index.php");
?>    
<?php include('../common/footer.php'); ?>