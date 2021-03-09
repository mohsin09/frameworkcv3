<?php  
 

include('../common/db.php');
include('../common/custom.php');

 



$errors = array( 
'name' => '',
  'level' => '',
  'last_used' => '',
); 

$id=$_GET['id']; 

if(empty($id)){
 header('Location: skill.php');
}


if(isset($_POST['save']) || isset($_POST['name']) || isset($_POST['level']) || isset($_POST['last_used'])) {

      $id=$_GET['id'];                 
        $name= $_POST['name'];
        $level= $_POST['level'];
        $last_used= $_POST['last_used'];
if(empty($_POST['name'])){
        $errors['name'] = 'Name  is required';
}
if(empty($_POST['level'])){
          $errors['level'] = 'Level  is required';
     }
  if(empty($_POST['last_used'])){
          $errors['last_used'] = 'last_used is required';
        }                
 if(!empty($name) && !empty($level) && !empty($last_used)) {
    $sql="UPDATE skills SET name='".$name."', level='".$level."', last_used='".$last_used."' WHERE id =$id";
         $stmt = $conn->prepare($sql);
         $stmt->execute();
        header ("location:skill.php");
  }     
}



$sql="SELECT * FROM skills WHERE id = $id ";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $num = $stmt->rowCount();

if($num>0)
{
      $record= $stmt->fetch();
}

  

?>
<?php include('../common/header.php');?>
<?php include('../common/sidebar.php');?>

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
                <label for="level">Level:</label>
<select name="level" id="level">
  <option value="start">Start</option>
  <option value="mid">Mid</option>
  <option value="seniors">Seniors</option>
  <option value="expert">Expert</option>
</select>
<?php if(!empty($errors['level'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['level']; ?></p> 
                <?php } ?>
                <label for="level">Last_Used:</label>
<select name="last_used" id="last_used">
  <option value="3 Month Ago">3 Month Ago</option>
  <option value="6 Month Ago">6 Month Ago</option>
  <option value="9 Month Ago">9 Month Ago</option>
  <option value="1 Year Ago">1 Year Ago</option>
</select><?php if(!empty($errors['last_used'])){ ?>
                  <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['last_used'];?></p> 
                <?php } ?>
<input type="submit" name ="save" class =" btn btn-success" >
</div> 
</section>
</form>
<div class="card-footer clearfix">
          <a input type="submit" name= "submit" value="logout" class="btn btn-primary" style="float:right" href="../logout.php">Logout</a>
           
          </div>

<?php include('../common/footer.php'); ?> -->