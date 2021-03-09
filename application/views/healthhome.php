<!DOCTYPE html>
<html lang="en">

<head>
  <title>50 %Discount</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script src="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css"></script>


</head>

<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">.col-sm-4</div>
                <div class="col-sm-8">.col-sm-8</div>
            </div>


    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">HealthCare</a>
          </div>
            <ul class="nav navbar-nav col-sm-8">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown ">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pateint
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
                </ul>
                </li>
                <li><a href="#">Doctor</a></li>

            </ul>
        <form class="form-inline ml-3 ">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </nav>
    <div class="jumbotron">
        <h1 class="text-center">Find and book the best doctors near you</h1>
      <div class="row ">
         <div class="form-group col-sm-6">
            <select name="city" id="city" class = "form-control input-lg">
            <option value="">Select City</option>
            <?php foreach($city  as $row){  ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->name;?></option>
                                    
            <?php } ?>
            </select>
   </div>
   <div >
   <div class="form-group col-sm-6">
      <select name="speciality" id="speciality" class = "form-control input-lg">
      <option value="">Speciality</option>

      </select>
      </div>
      <a href="<?php echo base_url(); ?>healthcare" class="btn btn-primary" style="float:right;">Search Doctor</a>
      <div class="card-body">
      <table id="doctor" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                      <th>Id</th>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
     
      
        </tbody>
        <tfoot>
            <tr>
            <th>Id</th>
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
            </tr>
        </tfoot>
    </table>
              </div>
     

</div>


      </div>

</body>


</html>

<script>
$(document).ready(function(){
 $('#city').change(function(){
  var city_id = $('#city').val();
  if(city_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>healthcare/fetch_speciality",
    method:"POST",
    data:{city_id:city_id},
    success:function(data)
    {
     $('#speciality').html(data);
     
    }
   });
  }
  else
  {
   $('#speciality').html('<option value="">Select State</option>');
   
  }
 });

 function fill_datatable(filter_speciality = '',filter_city = '')
 {
    var dataTable = $(#city).DataTable({
      "processing" : true,
      "serverSide" : true,
      "order" : [],
      "searching" : false,
      "ajax" : {
        url : "<?php echo base_url(); ?>healthcare/fetch_doctorlist",
        type : "POST",
        data : {
              filter_speciality:filter_speciality,filter_city:filter_city
        }

      }

    });

 }

 
 
});
</script>
