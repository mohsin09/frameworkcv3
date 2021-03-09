<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "mlm";

try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $firstname= $lastname= $email=$password=$firstnameErr= $lastnameErr= $emailErr= $passwordErr= $error ="";
    
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      
      if(empty(test_input($_POST['firstname']))){
          $firstnameErr="Enter Firstname";
          echo  $firstnameErr;
          echo "<br>";
      }else{
          $firstname= test_input($_POST["firstname"]);
      }


      if(empty(test_input($_POST["lastname"]))){
          $lastnameErr="Enter Password";
          echo $lastnameErr;
          echo "<br>";
      }else{
          $lastname=(test_input($_POST["lastname"]));
      }
      
      if(empty(test_input($_POST["email"]))){
        $emailErr="Enter email";
        echo $emailErr;
        echo "<br>";
    }else{
        $email=(test_input($_POST["email"]));
    }
    
    if(empty(test_input($_POST["password"]))){
        $passwordErr="Enter Password";
        echo "$passwordErr";
    }else{
        $password=(test_input($_POST["password"]));
    }
    $passwordmd5=md5("password");
  $stmt=$conn->query("INSERT INTO `user` ( `firstname`, `lastname`, `email`, `password`) VALUES('$firstname','$lastname','$email','$passwordmd5')");

  if($stmt->execute()){
    if($stmt->rowcount ()==1){
        session_start();
        if(!isset($_SESSION["submit"])){
        }
             header("Location: index.php");
    }else{
        $error = "Password or user name is not correct";
}
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
$data=htmlentities($data);
return $data;
}

?>