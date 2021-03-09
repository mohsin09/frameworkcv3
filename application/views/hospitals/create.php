<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Create Hospitals</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>hospitals/index">hospitals</a></li>
<li class="breadcrumb-item active">Create Doctor</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card card-primary">

<div class="card-header">
<h3 class="card-title">Quick Example</h3>
</div>

<?php if(!empty($errors)) { ?>
<div class="alert alert-danger" style="margin-top:30px;"> <?php echo $errors; ?></div>
<?php } ?>
<!-- /.card-header -->
<!-- form start -->
<form method="POST">
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" name="name" class="form-control" id="" placeholder="Enter Pckage Name">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Address</label>
<input type="text" name="address" class="form-control" id="" placeholder="ROI Precentage">
</div>


<div class="form-group">
<label for="exampleInputEmail1">Departments</label>
<input type="text" name="departments" class="form-control" id="" placeholder="Binary Percentage">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Labs </label>
<input type="text" name="labs" class="form-control" id="" placeholder="Enter Days">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Doctors </label>
<input type="text" name="doctors" class="form-control" id="" placeholder="Enter Days">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Ambulance </label>
<input type="text" name="ambulance" class="form-control" id="" placeholder="Enter Days">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Schedule </label>
<input type="text" name="schedule" class="form-control" id="" placeholder="Enter Days">
</div>
</div>
<!-- /.card-body -->

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>