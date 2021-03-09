<?php 
   include('pkgdb.php');   
         $errors = array(
          'name' => '',
         'amount' => '',
         'roi_percentage' => '', 
         'binary_percentage' => '', 
         'roi_percentage' => '', 
       );
    if(isset($_POST['save']) || isset($_POST['name']) || isset($_POST['amount']) || isset($_POST['roi_percentage']) || isset($_POST['binary_percentage']) || isset($_POST['days'])) {
                        $name= $_POST['name'];
                        $amount= $_POST['amount'];
                        $roi_percentage= $_POST['roi_percentage'];
                        $binary_percentage= $_POST['binary_percentage'];
                        $days= $_POST['days'];
     if(empty($_POST['name'])){
                         $errors['name'] = 'Name  is required';
                       }
   
    if(empty($_POST['amount'])){
                  $errors['amount'] = 'amount  is required';
                }
              
      if(empty($_POST['roi_percentage'])){
                         $errors['roi_percentage'] = 'roi_percentage is required';
                       }
      if(empty($_POST['binary_percentage'])){
                         $errors['binary_percentage'] = 'Binary_percentage is required';
                       }
      if(empty($_POST['days'])){
                         $errors['days'] = 'Days is required';
                       }
      if(!empty($name) && !empty($amount) && !empty($roi_percentage) && !empty($binary_percentage) && !empty($days)){
            $sql="INSERT INTO `packages` (`name`, `amount`, `roi_percentage`, `binary_percentage`, `days`) VALUES ( '$name', '$amount', '$roi_percentage', '$binary_percentage', '$days')";
            $query=mysqli_query($con , $sql);          
            header("location:packages.php");
            
      }
     } 
    
    
?>
<?php include('common/header.php'); ?>
<?php include('common/sidebar.php');?>

 <!-- <div class=" pull-right"> -->
 <form method="POST">
 <ul class="nav justify-content-center"
      <section class="content container-fluid">
      <div class = "col-sm-6 ">
      <form method= "post">
       <div class = "card ">
      <div class = "card-header bg-dark">
      <h1 class ="text-white text-center"> Insert Operation</h1>
      </div> 
 <label>Name</label>
 <input type ="text" name= "name" class ="form-control"><br>
 <?php if(!empty($errors['name'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['name']; ?></p> 
                    <?php } ?>
                    
                    <label>Amount</label>
 <input type ="text" name= "amount" class ="form-control"><br>
 <?php if(!empty($errors['amount'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['amount']; ?></p> 
                    <?php } ?>
                    <label>Roi_Percentage</label>
 <input type ="text" name= "roi_percentage" class ="form-control"><br>
 <?php if(!empty($errors['roi_percentage'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['roi_percentage']; ?></p> 
                    <?php } ?>
                    <label>Binary_Percentage</label>
 <input type ="text" name= "binary_percentage" class ="form-control"><br>
 <?php if(!empty($errors['binary_percentage'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['binary_percentage']; ?></p> 
                    <?php } ?>
                    <label>Days</label>
 <input type ="text" name= "days" class ="form-control"><br>
 <?php if(!empty($errors['days'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['days']; ?></p> 
                    <?php } ?>



<input type="submit" name= "save" value="submit" class = "btn btn-success " >
 </ul>
 
 </form>
 
 </div>
 </div>

 <?php include('common/footer.php'); ?>