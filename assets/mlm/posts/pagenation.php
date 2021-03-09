<html>
<head>
<meta charset="UTF-8">
<title>Pagination</title>
</head>
<body>
</body>
</html>
<?php
include("../pkgdb.php");
$result_per_page=4;
$sql="SELECT * FROM post";
$query=mysqli_query($con , $sql);
 $number_of_result= mysqli_num_rows($query);
// // while($rows=mysqli_fetch_array($query)){
// //     echo $rows['id'].'   '.$rows['title']. "<br>";
// }
$number_of_page= ceil($number_of_result/$result_per_page) ;
if(!isset($_GET['page'])){
    $page=1;
}else{
    $page=$_GET['page'];
}
$this_page_first_result =($page-1)* $result_per_page;
$sql="SELECT * FROM post LIMIT " . $this_page_first_result . ',' . $result_per_page;
$query=mysqli_query($con , $sql);
 
if ($page>1) {
    echo '<a href="index.php?page='.($page-1).'">prev</a>';
}
for($i=1;$i<=$number_of_page;$i++) {
    echo '<a href="index.php?page=' . $i . '">' . $i. '</a>';  

}if ($number_of_page > $page) {
    echo '<a href="index.php?page='.($page+1).'">next</a>';
}

?>
 <!-- echo "<ul class='pagination admin-pagination'>";
        if ($page>1) {
            echo '<li><a href="pagination.php?page='.($page-1).'">prev</a></li>';
        }
       
        for ($i=1; $i <=$total_page; $i++) { 
            if ($i==$page) {
                $active="active";
            }
            else {
                $active="";
            }
           echo '<li class ="'.$active.'"><a href="pagination.php?page='.$i.'">'.$i.'</a></li>';
        }
        if ($total_page > $page) {
            echo '<li><a href="pagination.php?page='.($page+1).'">next</a></li>';
        }
       
        echo'</ul>'; -->
