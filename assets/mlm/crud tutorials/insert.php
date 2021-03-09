
<?php  
         include("../posts/db.php");
    if(isset($_POST['save'])) {
                        $title= $_POST['title'];
                        $short_description= $_POST['short_description'];
                        $detail= $_POST['details'];
            $sql="INSERT INTO `post`( `title`, `short_description`, 'details') VALUES ('$short_description','$detail' )";
            $query=mysqli_query($con , $sql);
            header("location: ../posts/list.php");
      }
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <body>
 <form>
 <ul class="nav justify-content-center" 
      <section class="content container-fluid">
      <div class = "col-sm-6 ">
      <form method= "post">
       <div class = "card ">
      <div class = "card-header bg-dark">
      <h1 class ="text-white text-center"> Insert Operation</h1>
      </div> 
 <label>Tittle</label>
 <input type ="text" name= "title" class ="form-control"><br>
 <?php if(!empty($errors['title'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['title']; ?></p> 
                    <?php } ?>
 <label>Short_Description</label>
 <input type ="text" name= "short_description" class ="form-control"><br>
 <?php if(!empty($errors['short_description'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['short_description']; ?></p> 
                    <?php } ?>
 <label>Detail</label>
 <input type ="text" name= "details" class ="form-control"><br>
 <?php if(!empty($errors['details'])){ ?>
                      <p class="alert alert-danger" style="margin-top:5px;"><?php echo $errors['details']; ?></p> 
                    <?php } ?>
<input type="submit" name= "save" class =" btn btn-success">
 </div> 
 </ul>
 
 </form>
 <div class="card-footer clearfix">
              <a input type="submit" name= "submit" value="logout" class="btn btn-primary" style="float:right" href="logout.php">Logout</a>
               
              </div>
 </div>
 </div>
</body>
 </html>