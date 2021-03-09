
 <?php  

    include('../common/db.php');
    include('../common/custom.php');

     
    
    
    
    $errors = array( 
    'title' => '',
      'short_description' => '',
      'details' => '',
    ); 

    $id=$_GET['id']; 

    if(empty($id)){
     header('Location: index.php');
    }
    

    if(isset($_POST['save']) || isset($_POST['title']) || isset($_POST['short_description']) || isset($_POST['details'])) {
    
          $id=$_GET['id'];                 
            $title= $_POST['title'];
            $short_description= $_POST['short_description'];
            $detail= $_POST['details'];
if(empty($_POST['title'])){
            $errors['title'] = 'Tittle  is required';
}
if(!empty($_POST['short_description']) && ( strlen($_POST['short_description']) < 5 || strlen($_POST['short_description']) > 20)) 
{
             $errors['short_description'] = 'Short_Description should be 5 to 20 characters.';
} else{
if(empty($_POST['short_description'])){
              $errors['short_description'] = 'Short description  is required';
         }
   }
             
if(!empty($_POST['details']) && ( strlen($_POST['details']) < 10 || strlen($_POST['details']) > 50)) {
$errors['details'] = 'Details should be 10 to 50 characters.';
}                 
else{   if(empty($_POST['details'])){
              $errors['details'] = 'Detail is required';
            }                
     if(!empty($title) && !empty($short_description) && !empty($detail)) {
        $sql="UPDATE post SET title='".$title."', short_description='".$short_description."', details='".$detail."' WHERE id =$id";
             $stmt = $conn->prepare($sql);
             $stmt->execute();
            header ("location:index.php");
      }     
    }
  }

  
    $sql="SELECT * FROM post WHERE id = $id ";
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
 <label>Tittle</label>
 <input type ="text" name = "title" value="<?php echo $record['title']; ?>" ><br>
 <?php if(!empty($errors['title'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['title']; ?></p> 
                    <?php } ?>
 <label>Short_Description</label>
 <input type ="text" name = "short_description" value="<?php echo $record['short_description']; ?>" class ="form-control"><br>
 <?php if(!empty($errors['short_description'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['short_description']; ?></p> 
                    <?php } ?>
 <label>Detail</label>
 <input type ="text" name = "details" class ="form-control" value="<?php echo $record['details'];?>" > <br>
 <?php if(!empty($errors['details'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['details'];?></p> 
                    <?php } ?>
<input type="submit" name ="save" class =" btn btn-success" >
 </div> 
 </section>
</form>
<div class="card-footer clearfix">
              <a input type="submit" name= "submit" value="logout" class="btn btn-primary" style="float:right" href="../logout.php">Logout</a>
               
              </div>
  
 <?php include('../common/footer.php'); ?>