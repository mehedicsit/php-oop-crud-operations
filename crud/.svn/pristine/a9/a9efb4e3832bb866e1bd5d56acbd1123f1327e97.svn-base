<?php include ("inc/header.php"); ?>
<?php 
  $db=new dbl();
  $error;
  // formatting isput data with post format
  if (isset($_POST['submit'])) {
    $fname     =mysqli_real_escape_string($db->conn,$_POST['firstname']);
    $lname     =mysqli_real_escape_string($db->conn,$_POST['lastname']);
    $email     =mysqli_real_escape_string($db->conn,$_POST['email']);
    $pass      =md5(mysqli_real_escape_string($db->conn,$_POST['password']));
    $mobile    =mysqli_real_escape_string($db->conn,$_POST['mobile']);
    $address   =mysqli_real_escape_string($db->conn,$_POST['address']);

    // this is part of image processing
    $permitted=array('jpg','jpeg','png','gif');
    $file_name  =$_FILES['media']['name'];
    $file_size  =$_FILES['media']['size'];
    $file_temp  =$_FILES['media']['tmp_name'];
    $extract_file=explode('.',  $file_name);
    $file_ext=strtolower(end($extract_file)); ;
    $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
    $uploaded_file="uploads/".$unique_image;
    if (empty($file_name)) {
        echo "<p class='text-danger'>Please upload image.You can't upload a empty image</p>";
    }
    if ($file_size>1000000) {
        echo "<p class='text-danger'>Image Size Should Be less than 1Mb</p>";
    }elseif (in_array($file_ext,$permitted)===false) {
        echo "<p class='text-danger'>You can upload only:-".implode(',',$permitted)."</p>";
    }
    else{
    move_uploaded_file($file_temp, $uploaded_file);




    if($fname==''||$lname==''||$email==''||$pass==''||$mobile==''||$address==''){
            $error="Error! Please Check All Inputs";
           echo ' <div class="alert alert-danger text-center input-error-msg">
                    <span class="glyphicon glyphicon-remove input-error"></span><strong>'.$error.'</strong>
                </div>';
    }
    else{
        $data_query="INSERT INTO users(first_name,last_name,email,password,mobile,address,image) VALUES('$fname','$lname','$email','$pass','$mobile','$address','$uploaded_file')";
        $insert=$db->insert($data_query);
       
      }
    }
      
  }

 
?>
	<div class="container create-container">
    <div class="row">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            <div class="col-lg-push-3 col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
               <?php if(isset($_GET['msg'])){
                  ?>
                <div class="well well-md text-info success-msg"><p class="text-center"><?php echo $_GET['msg']; ?></p></div>

                <?php
                 } ?>  
                <div class="form-group">
                    <label for="InputName">First Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="firstname" id="InputName" placeholder="Fitst Name" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter Email" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="password" id="pass" placeholder="Password" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile">mobile</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="address" id="address" placeholder="address" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="media">Image</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="media" id="media" placeholder="address" >
                       
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn insert-submit btn-info ">
                <input type="reset" value="Cancel" class="btn btn-warning insert-cancel pull-right">
            </div>
        </form>
    </div>
</div>

<?php include ("inc/footer.php"); ?>
 <script>
 jQuery(document).ready(function($){
    jQuery(".input-error").click(function($) {
        jQuery('.input-error-msg').slideUp(500);
       
    });

 });


 </script> 
  <script>
 jQuery(document).ready(function($){

        jQuery(".success-msg").slideUp(1000);


 });


 </script> 