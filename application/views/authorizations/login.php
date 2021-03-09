<html>
<head>
<title>Login Page</title>
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
        <div class="row justify-content-md-center">
                <div class="col-md-6">           
                    <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Sign In</h3>
                    </div>
                    <?php if (!empty($login_error)) { ?>
                        <div class="alert alert-danger"><?php echo $login_error; ?></div>
                    <?php } ?>
                    <?php echo validation_errors(' <div class="alert alert-danger">','</div>'); ?>
                    <form method="POST">
                    <div class="card-body">   

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
                          
                        </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                        
                      </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="login" value="Log In" class="btn btn-primary" > 
                  <!-- <button type="submit" name="register" value="Register" class="btn btn-primary" >  -->
                   <a href= "registration" name="register"  class="btn btn-primary " >Register</a></button>

                </div>
                
    </form>
    </div>
</body>
</html>
