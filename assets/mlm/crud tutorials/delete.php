<?php
include "postdb.php";
$id=$_GET['id'];
$sql="DELETE FROM `info` WHERE id= $id ";
mysqli_query($con, $sql);
header("location: showlist.php");
?>  