  <?php 
  
  // echo "Herere"; exit;

  
  include('login-check.php');
  include('../common/header.php'); 
  
  include('../common/sidebar.php'); ?>
 

  <!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
             
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        
                   <!-- TO DO List -->

              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <?php include('list.php'); ?>
              <a input type="submit" name= "submit" value="logout" class="btn btn-primary" style="float:right" href="../logout.php">Logout</a>

              </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
  </div>
<?php include('../common/footer.php'); ?>