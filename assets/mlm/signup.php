
<?php  


// include 'login-check.php'; 
include "common/db.php";
include "common/custom.php";



$errors = array(
  'parent_id' => '',
  'firstname' => '',
  'lastname' => '',
  'email' => '',
  'password' => '',
  'package_id' => '',
  'position' => '',
); 



if(isset($_POST['submit']) || isset($_POST['firstname'])|| isset($_POST['lastname']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['package_id'])  || isset($_POST['position'])){
  
  //epre($_POST);

  $email=$_POST['email'];

 if(empty($_POST['parent_id'])){
      $errors['parent_id'] = 'Parent_Id is required';
      //echo $errors['firstname'];
  }

  if(empty($_POST['firstname'])){
      $errors['firstname'] = 'First name is required';
      //echo $errors['firstname'];
  }

  if(!empty($_POST['firstname']) && ( strlen($_POST['firstname']) < 4 || strlen($_POST['firstname']) > 20)) {
    $errors['firstname'] = 'First name should be 4 to 20 characters.';
    //echo $errors['firstname'];
  }
  

  if(empty($_POST['lastname'])){
    $errors['lastname'] = 'Last name is required';
  } 
  if(empty($_POST['password'])){
    $errors['password'] = 'Password is required';
  }
  if(empty($_POST['package_id'])){
    $errors['package_id'] = 'Package_Id is required';
   
}

  if(empty($_POST['email'])){
    $errors['email'] = 'Email is required';
  }else{


    $sql = " SELECT * FROM users WHERE email = '".$email."'";
    
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $num = $stmt->rowCount();

    if($num > 0){
        $errors['email'] = "Email already exist";

  }



 


  if(empty($errors['firstname']) && empty($errors['lastname']) && empty($errors['email']) && empty($errors['password']) && empty($errors['package_id']) & empty($errors['position'])){

    $sql = "INSERT INTO USERS SET 
     parent_id = '".$_POST['parent_id']."',
        firstname = '".$_POST['firstname']."',
        lastname = '".$_POST['lastname']."',
        email = '".$_POST['email']."',
        password = '". $_POST['password']."',
        package_id = '".$_POST['package_id']."',
        position = '".$_POST['position']."'";

 $row = $conn->exec($sql);
// $row = $conn->exec($sql) or die(mysqli_error($conn));

    if($row == 0){
      echo "There was some error , check you db setting, etc.";
    }else{
      echo "User inserted";
    }



 

  }


 

} }

?>
<?php include "common/header.php";
 include "common/sidebar.php";?>




  <title>Sign Up</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header"> 
      <div class="container-fluid">
  <form method="POST">
 <ul class="nav justify-content-center"
      <section class="content container-fluid">
      <div class = "col-sm-6 ">
       <div class = "card ">
      <div class = "card-header bg-dark">
      <h1 class ="text-white text-center"> Sign Up</h1>
      </div> 
      <div class="form-group">
                    <label for="parent_id">Parent Id</label> 
                    <input name="parent_id" id="parent_id" type="text" class="form-control" placeholder="Enter Parent Id" >
                    <?php if(!empty($errors['parent_id'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['parent_id']; ?></p> 
                    <?php } ?> 
                  </div>


                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input name="firstname" type="text" class="form-control" id="firstname"  placeholder="Enter First Name" >
                    <?php if(!empty($errors['firstname'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['firstname']; ?></p> 
                    <?php } ?> 
                </div>

                  <div class="form-group">
                    <label for="lastname">Last Name</label> 
                    <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Enter Last Name" >
                    <?php if(!empty($errors['lastname'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['lastname']; ?></p> 
                    <?php } ?> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
                    <?php if(!empty($errors['email'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['email']; ?></p> 
                    <?php } ?> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                    <?php if(!empty($errors['password'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['password']; ?></p> 
                    <?php } ?> 
                  </div>
                  <label for="package_id">Package_Id:</label>
<select name="package_id" id="package_id"class="form-control" >
  <option value="silver">Silver</option>
  <option value="gold">Gold</option>
  <option value="diamond">Diamond</option>
  <option value="premium">Premium</option>
</select><br>
                    <?php if(!empty($errors['package_id'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['package_id']; ?></p> 
                    <?php } ?> 
                  </div>
                  <label for="position">Postion:</label>
<select name="position" id="position"class="form-control" >
  <option value="left">Left</option>
  <option value="right">Right</option>
</select><br>
                    <?php if(!empty($errors['position'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['position']; ?></p> 
                    <?php } ?> 
                  </div>
                
               

                <div class="card-footer ">
                  <input type="submit" name="submit" value="Save" class="btn btn-primary center " > 
                  
              </form>

            </div>
</div>
</div>

