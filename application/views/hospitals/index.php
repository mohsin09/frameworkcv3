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
                <a href="<?php echo base_url()."hospitals/create"; ?>" class="btn btn-success" style="float:right;">Create Hospital</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#Id</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Departments</th>
                      <th>Labs</th>
                      <th>Doctors</th>
                      <th>Ambulance</th>
                      <th>Schedule</th>
                      
                      <!-- <th style="width: 40px">Roi Percentage</th>
                      <th style="width: 40px">Binary Percentage</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                     foreach($hospitals as $hospital) { 
                      ?>
                      
                    <tr>
                      <td><?php echo $hospital->id; ?></td>
                      <td><?php echo $hospital->name; ?></td>
                      <td><?php echo $hospital->address; ?></td>
                      <td><?php echo $hospital->departments; ?></td>
                      <td><?php echo $hospital->labs; ?></td>
                      <td><?php echo $hospital->doctors; ?></td>
                      <td><?php echo $hospital->ambulance; ?></td>
                      <td><?php echo $hospital->schedule; ?></td>
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