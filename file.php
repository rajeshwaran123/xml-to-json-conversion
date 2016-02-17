<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> xml to json converter</title>
 
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    
  </head>
 <?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("xml");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a xml file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
  <body>
 
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">xml to json</a>
        </div>
      </div>
    </div>
 
 
    <div class="container">
 
          <div class="row">
            <div class="col-lg-12">
               <form class="well" action="file.php" method="post" enctype="multipart/form-data">
                   
				  <div class="form-group">
                    <label for="file">Select a file to upload</label>
                    <input type="file" name="image" />
                    <p class="help-block"></p>
                  </div>
                  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
                </form>
				<form class="well" action="one.php" method="post" enctype="multipart/form-data">
                   
				  
                  <input type="submit" class="btn btn-lg btn-primary" value="view">
                </form>
            </div>
          </div>
    </div> <!-- /container -->
 
  </body>
</html>
