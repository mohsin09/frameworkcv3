<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Update Doctors</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<!-- <li class="breadcrumb-item active"><a href="#">Insert</a></li> -->
<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>doctors/index">Doctors</a></li>
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

</div>
<div class="form-group">
<label for="exampleInputEmail1">Image</label>
<input type="text" name="image" class="form-control" id="" placeholder="Enter Pckage Name">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" name="name" class="form-control" id="" placeholder="Enter Pckage Name">
</div>
<div class="form-group">
<label for="exampleInputEmail1">City</label>
<input type="text" name="city_id" class="form-control" id="" placeholder="Enter Pckage Name">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Speciality</label>
<input type="text" name="speciality_id" class="form-control" id="" placeholder="Enter Pckage Name">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Qualification</label>
<input type="text" name="qualification" class="form-control" id="" placeholder="ROI Precentage">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Experience </label>
<input type="text" name="experience" class="form-control" id="" placeholder="Enter Days">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Phone </label>
<input type="text" name="phone" class="form-control" id="" placeholder="Enter Days">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Address </label>
<input type="text" name="address" class="form-control" id="" placeholder="Enter Days">
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