<?php  
 

include('common/db.php');
include('common/custom.php');

 



$errors = array( 
'name' => '',
  'amount' => '',
  'roi_percentage' => '',
  'binary_percentage' => '',
  'days' => '',
); 

$id=$_GET['id']; 

if(empty($id)){
 header('Location: packages.php');
}


if(isset($_POST['save']) || isset($_POST['name']) || isset($_POST['amount']) || isset($_POST['roi_percentage'])|| isset($_POST['binary_percentage'])
|| isset($_POST['days'])) {

      $id=$_GET['id'];                 
        $name= $_POST['name'];
        $amount= $_POST['amount'];
        $roi_percentage= $_POST['roi_percentage'];
        $binary_percentage= $_POST['binary_percentage'];
        $days= $_POST['days'];
if(empty($_POST['name'])){
        $errors['name'] = 'Name  is required';
}
if(empty($_POST['amount'])){
          $errors['amount'] = 'Amount  is required';
     }
  if(empty($_POST['roi_percentage'])){
          $errors['roi_percentage'] = 'Roi_percentage is required';
        }  
  if(empty($_POST['binary_percentage'])){
          $errors['binary_percentage'] = 'Binary_Percentage is required';
        }  
  if(empty($_POST['days'])){
          $errors['days'] = 'Days is required';
        }  

 if(!empty($name) && !empty($amount) && !empty($roi_percentage) && !empty($binary_percentage) && !empty($days)) {
    $sql="UPDATE packages SET name='".$name."', amount='".$amount."', roi_percentage='".$roi_percentage."', binary_percentage='".$binary_percentage."', days ='".$days."' WHERE id =$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header ("location:packages.php");
    
  }     
}



$sql="SELECT * FROM packages WHERE id = $id ";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $num = $stmt->rowCount();

if($num>0)
{
      $record= $stmt->fetch();
}

  

?>
<?php include('common/header.php');?>
<?php include('common/sidebar.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header"> 
      <div class="container-fluid">
      <body>
<form method="POST"> 
<ul class="nav justify-content-center" 
  <section class="content container-fluid" >
  <div class = "col-lg-6 m-auto">
  <form method= "post"> 
   <div class = "card">
  <div class = "card-header bg-dark">
  <h1 class ="text-white text-center"> Update Operation</h1>
  </div>
<label>Name</label>
<input type ="text" name = "name" value="<?php echo $record['name']; ?>" ><br>
<?php if(!empty($errors['name'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['name']; ?></p> 
                <?php } ?>
                <label>Amount</label>
<input type ="text" name = "amount" value="<?php echo $record['amount']; ?>" ><br>
<?php if(!empty($errors['amount'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['amount']; ?></p> 
                <?php } ?>
                <label>Roi_Percentage</label>
<input type ="text" name = "roi_percentage" value="<?php echo $record['roi_percentage']; ?>" ><br>
<?php if(!empty($errors['roi_percentage'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['roi_percentage']; ?></p> 
                <?php } ?>
                <label>Binary_Percentage</label>
<input type ="text" name = "binary_percentage" value="<?php echo $record['binary_percentage']; ?>" ><br>
<?php if(!empty($errors['binary_percentage'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['binary_percentage']; ?></p> 
                <?php } ?>
                <label>Days</label>
<input type ="text" name = "days" value="<?php echo $record['days']; ?>" ><br>
<?php if(!empty($errors['days'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['days']; ?></p> 
                <?php } ?>     
                


<input type="submit" name ="save" class =" btn btn-success" >
</div> 
</section>
</form>

</div>
</div>
</div>
<?php include('common/footer.php'); ?> 