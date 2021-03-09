
<?php include('pkgdb.php'); ?>


<?php
$id=$_GET['id'];
$sql="DELETE FROM `packages` WHERE id=$id";
mysqli_query($con, $sql);
header("location:packages.php");
?>    
<?php include('common/footer.php'); ?>