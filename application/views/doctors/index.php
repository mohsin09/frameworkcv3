  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
                <a href="<?php echo base_url()."doctors/create"; ?>" class="btn btn-primary" style="float:right;">Create Doctor</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>City</th>
                      <th>Speciality</th>
                      <th>Qualification</th>
                      <th>Experience</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Schedule</th>
                      <th>Update</th>
                      <th>Delete</th>
                      <th>Details</th>
                      
                      <!-- <th style="width: 40px">Roi Percentage</th>
                      <th style="width: 40px">Binary Percentage</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($doctors as $doctor) { ?>
                    <tr>
                      <td><?php echo $doctor->id; ?></td>
                      <td><img src="<?php echo base_url().$upload_path.$doctor->image; ?>" alt="" width="50" height="60"></td>
                      <td><?php echo $doctor->name; ?></td>
                      <td><?php echo $doctor->city_id; ?></td>
                      <td><?php echo $doctor->speciality_id; ?></td>
                      <td><?php echo $doctor->qualification; ?></td>
                      <td><?php echo $doctor->experience; ?></td>
                      <td><?php echo $doctor->phone; ?></td>
                      <td><?php echo $doctor->address; ?></td>
                      <td><?php echo $doctor->schedule; ?></td>
                      <td><a href="<?php echo base_url();?>doctors/update/<?php echo $doctor->id; ?>" class="btn btn-success" style="float:right;">Update</a></td>
                      <td><a href="<?php echo base_url();?>doctors/delete/<?php echo $doctor->id; ?>" class="btn btn-danger" style="float:right;">Delete</a></td>
                      <td><a href="<?php echo base_url();?>doctors/details/<?php echo $doctor->id; ?>" class="btn btn-danger" style="float:right;">Info</a></td>
                      
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>