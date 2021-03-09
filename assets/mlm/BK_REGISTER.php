
<?php  

session_start();

include "common/db.php";
include "common/custom.php";

$errors = array(
  'firstname' => '',
  'lastname' => '',
  'email' => '',
  'password' => '',
);



if(isset($_POST['submit']) || isset($_POST['firstname'])  ){
  
  //epre($_POST);

  $email=$_POST['email'];

  // $email_search="SELECT * FROM 'user' WHERE 'email'='$email'";
  // $query=mysqli_query($conn,$email_search);
  // $email_count=mysqli_num_rows($query);
  

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

  if(empty($_POST['email'])){
    $errors['email'] = 'Email is required';
  }


  

  if(empty($_POST['password'])){
    $errors['password'] = 'Password is required';
  }


  if(empty($errors['firstname']) && empty($errors['lastname']) && empty($errors['email']) && empty($errors['password'])){

    $sql = "INSERT INTO USER SET 
        firstname = '".$_POST['firstname']."',
        lastname = '".$_POST['lastname']."',
        email = '".$_POST['email']."',
        password = '". $_POST['password']."'";

    $row = $conn->exec($sql);

    if($row == 0){
      echo "There was some error , check you db setting, etc.";
    }else{
      echo "User inserted";
    }





  }


 

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Register</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action = <?php echo htmlentities($_SERVER["PHP_SELF"])?> method = "POST">
                <div class="card-body">

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

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="submit" value="Save" class="btn btn-primary" >
                  <a class="btn btn-success" style="float:right;" href="login.php">Login</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="admin-lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin-lte/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
