<?php 

function sum($math,$urdu,$eng,$scn,$bio,$chem){
    $s=$math+$urdu+$eng+$scn+$bio+$chem ;
    return $s;
}
function percentage($total){
    $st=$total/6;
    echo $st ."%";
}
$total=sum(45,56,56,56,76,89,98);
percentage($total);


// $a=5;
// echo "<ul>";
// while($a<=10){
//     echo"Welcome";
//     echo "<li>".$a. ")Hello word </li>  ";
//     $a=$a+1;
//     echo "</ul>";
// }
// for($a=1;$a<=100;$a=$a+10){
//     for($b=$a;$b<$a+10;$b++){
//     echo $b." " ;
//     }
//     echo"<br>";
// }

?>