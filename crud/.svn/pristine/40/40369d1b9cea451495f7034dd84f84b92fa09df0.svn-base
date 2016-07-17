<?php include ("inc/header.php"); ?>
<?php 
  $db=new dbl();
  // Read Query
  $uid=$_GET['id'];
  $uquery="SELECT * FROM users WHERE id=$uid";
  $getdata=$db->read($uquery)->fetch_assoc();


  // formatting update data
  $error;
 
  if (isset($_POST['update'])) {
    $fname     =mysqli_real_escape_string($db->conn,$_POST['firstname']);
    $lname     =mysqli_real_escape_string($db->conn,$_POST['lastname']);
    $email     =mysqli_real_escape_string($db->conn,$_POST['email']);
    $pass      =md5(mysqli_real_escape_string($db->conn,$_POST['password']));
    $mobile    =mysqli_real_escape_string($db->conn,$_POST['mobile']);
    $address   =mysqli_real_escape_string($db->conn,$_POST['address']);

    if($fname==''||$lname==''||$email==''||$pass==''||$mobile==''||$address==''){
            $error="Error! Please Check All Inputs";
           echo ' <div class="alert alert-danger text-center input-error-msg">
                    <span class="glyphicon glyphicon-remove input-error"></span><strong>'.$error.'</strong>
                </div>';
          
            

    }
    else{
        $data_query="UPDATE users
          SET first_name='$fname',
           last_name='$lname',
           email='$email',
           password='$pass',
           mobile='$mobile',
           address='$address'

           WHERE id=$uid";


        $update=$db->update($data_query);
       
    }
      
  }

 
?>
<div class="container">
  <div class="row">
      <?php if(isset($_GET['msg'])){
          ?>
        <div class="well well-md text-info success-msg"><p class="text-center"><?php echo $_GET['msg']; ?></p></div>

        <?php
         } ?> 
    <div class="col-lg-push-3 col-lg-6">
       <h4 class="well well-md text-center text-info">Update Data</h4>
        <form action="update.php?id=<?php echo $uid;  ?>" name="update-form" method="POST" class="upadate-form">
          <div class="form-group">
            <input class="form-control " type="text" value="<?php echo $getdata['first_name']; ?>" name="firstname">
          </div>            
          <div class="form-group">
            <input class="form-control " type="text" value="<?php echo $getdata['last_name']; ?>" name="lastname">
          </div>           
           <div class="form-group">
          <input class="form-control " type="email" value="<?php echo $getdata['email']; ?>" name="email">
          </div>            
          <div class="form-group">
            <input class="form-control " type="pass" value="<?php echo $getdata['password']; ?>]" name="password">
          </div>            
          <div class="form-group">
            <input class="form-control " type="text" value="<?php echo $getdata['mobile']; ?>" name="mobile">
          </div>            
          <div class="form-group">
            <input class="form-control " type="text" value="<?php echo $getdata['address']; ?>" name="address">
          </div>
          <div class="modal-footer ">
             <input type="reset" class="btn btn-warning btn-md" value="cancel">
              <input type="submit" class="btn btn-warning btn-md" name="update" value="Update">
          </div>
      </form>
    </div>
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