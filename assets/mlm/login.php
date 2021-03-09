<?php 
session_start();

// if(isset($_SESSION['user_id'])){
//   header('Location: posts/index.php');
// }

include "common/db.php";
include "common/custom.php";


$errors = array(
   'email' => '',
  'password' => '',
);



if(isset($_POST['submit']) || isset($_POST['email']) || isset($_POST['password']))
{

            $email=$_POST['email'];
            $password=$_POST['password'];
  
  
  if(empty($_POST['password']))
  {
    $errors['password'] = 'password is required';
    
  }
    
  if(empty($_POST['email'])){
    $errors['email'] = 'Email is required';
  } 
   

  if(!empty($email) && !empty($password)){

    $sql = " SELECT * FROM user WHERE email = '".$email ."' AND password='".$password ."'";
    
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $num = $stmt->rowCount();

    if($num == 0){
        $errors['email'] = "In Valid Email or Password";
    }else {
      $record= $stmt->fetch();

      // echo "<pre>";
      // print_r($record);
      // exit;
      
      $_SESSION['dipalay_name']= $record['firstname'];
      $_SESSION['user_id']= $record['id'];

      header('Location: posts/index.php');
      // $row = $stmt->fetch();
      // $_SESSION['user_id'] = $row['id'];

    }
    

  }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MLM|Login Form</title>

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
  <div class="container" style='margin-top: 50px'>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action = <?php echo htmlentities($_SERVER["PHP_SELF"])?> method = "POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
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
                <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-success" style="float:right;" href="register.php">Register</a>
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
