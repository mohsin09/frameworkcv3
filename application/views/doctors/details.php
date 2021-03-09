<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
</div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="container-fluid">
<div class="row justify-content-md-center">
<div class="col-md-4">
<div class="card card-primary">
<?php foreach($doctors as $doctor) { ?>
<?php } ?>

<div class="card-body box-profile">
<div class="text-center">
<td><img src="<?php echo base_url().$upload_path.$doctor->image; ?>"class="profile-user-img img-fluid img-circle" alt="User profile picture" width="100" height="100"></td>
</div>
<!-- <ul class="list-group list-group-unbordered mb-3"> -->

<li class="list-group-item">
<b><label>id:</label></br></b>

<?php echo $doctor->id?>
</li>
<li class="list-group-item">
<b><label>Name:</label></br></b>
<?php echo $doctor->name; ?>
</li>
<li class="list-group-item">
<b><label>City:</label></br></b>
<?php echo $doctor->city_id; ?>
</li>
<li class="list-group-item">
<b><label>Speciality:</label></br></b>
<?php echo $doctor->speciality_id; ?>
</li>
<li class="list-group-item">
<b><labal>qualification:</label></br></b>
<?php echo $doctor->qualification; ?>
</li>
<li class="list-group-item">
<b><labal>experience:</label></br></b>
<?php echo $doctor->experience; ?>
</li>
<li class="list-group-item">
<b><labal>phone:</label></br></b>
<?php echo $doctor->phone; ?>
</li>
<li class="list-group-item">
<b><labal>address:</label></br></b>
<?php echo $doctor->address; ?>
</li>
<li class="list-group-item">
<b><labal>schedule:</label></br></b>
<?php echo $doctor->schedule; ?>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>