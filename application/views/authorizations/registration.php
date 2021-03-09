<html>
<head>
<title>Register Page</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet"  href="<?php echo base_url();  ?>assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/adminlte/plugins/summernote/summernote-bs4.min.css">

</head>
<body>


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">           
                    <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Register Your self</h3>
                    </div>
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success'] ?>
   <?php } ?>
    <?php echo validation_errors(' <div class="alert alert-danger">','</div>'); ?>
    <form action="" method="POST">
    <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name"  placeholder="Enter First Name" >
                   
                </div>

                  <div class="form-group">
                    <label for="email">E Mail</label> 
                    <input name="email" id="email" type="text" class="form-control" placeholder="Enter Last Name" >
                     
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                    
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="registration" value="Register" class="btn btn-primary" > 
                  <a href= "login"  name="login" placeholder="Log In" class="btn btn-primary" >Login</a></button>
                </div>
    </form>
    </div>
    </div>
    </section>
    </div>
</body>
</html>