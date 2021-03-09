<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "mlm";
 
try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $emailaddress= $password= $emailaddressErr= $passwordErr= $error ="";
    
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      
      if(empty(test_input($_POST["email"]))){
          $emailaddressErr = "email is required";
          echo $emailaddressErr;
          echo "<br>";
      }else{
          $emailaddress= test_input($_POST["email"]);
      }


      if(empty(test_input($_POST["password"]))){
          $passwordErr="Password is required";
       echo $passwordErr;
         
      }else{
          $password=(test_input($_POST["password"]));
      }
      $passwordmd5=md5("password");
  $stmt=$conn->query("INSERT INTO `admin` (  `email`, `password`) VALUES ('$emailaddress','$passwordmd5')");
 if($stmt->execute()){
    if($stmt->rowcount()==1){
        session_start();
        if(isset($_SESSION["submit"])){
        }
        header("Location: index.php ");
    } 
    }else{
        $error = "Password or user name is not correct";
}
}

}catch(PDOException $e) {
echo "Error:".$e->getmessage();
}



function test_input($data)
{
$data=trim($data);
$data=stripcslashes($data);
$data=htmlspecialchars($data);
return $data;
}
/*$email= test_input($_POST['email']);
$password= test_input($_post['password']);
if(empty($emai)){
    header("Location: index.php ?error= email is required");
    
exit();
} else if(empty($password)){
    header("Location: index.php ?error= Password is required");
exit();
} else{
    echo "valid input";

}*/


?>