<?php include ("inc/header.php"); ?>
<?php 
  $db=new dbl();
  // Read Query
  $data_query="SELECT * FROM users";
  $read=$db->read($data_query);

?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center">All Users List</h4>
        <div class="table-responsive">   
         <table id="mytable" class="table table-bordred table-striped">    
         <?php if(isset($_GET['msg'])){
          ?>
        <div class="well well-md text-info success-msg"><p class="text-center"><?php echo $_GET['msg']; ?></p></div>

        <?php
         } ?> 
           <thead>
              <th><input type="checkbox" id="checkall" /></th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Contact</th>
              <th>Address</th>
              <th>Pro Pic</th>
              <th>Edit</th>
              <th>Delete</th>
           </thead>
          <tbody>
            <?php if($read): ?>
            <?php while($user=$read->fetch_assoc()): ?>
              <tr>

                <td><input type="checkbox" class="checkthis" /></td>
                <td><?php echo $user["first_name"];?></td>
                <td><?php echo $user["last_name"];?></td>
                <td><?php echo $user["email"];?></td>
                <td><?php echo $user["password"];?></td>
                <td><?php echo $user["mobile"];?></td>
                <td><?php echo $user["address"];?></td>
                <td><img src="<?php echo $user["image"];?>" width="100px" height="80px"></td>


                <td>

                <p data-placement="top" data-toggle="tooltip" title="Edit">
                  <a href="update.php?id=<?php echo urlencode($user["id"]);?>" class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a>
                </p>
              </td>

                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Delete">
                  <a href="delete.php?id=<?php echo urlencode($user["id"]);?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a href="#">
                </p>
              </td>

              </tr>
              <?php endwhile; ?>
                <?php else:
                  echo "NO Data Available!!"
                 ?>
              <?php endif; ?>
            
          </tbody>
        
      </table>
<a href="create.php">Insert Data</a>
      <div class="clearfix"></div>
      <ul class="pagination pull-right">
        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
      </ul>
        
    </div>
    
  </div>
 </div>
</div>
</div> <!-- /container -->        
<?php include ("inc/footer.php"); ?>
 <script>
 jQuery(document).ready(function($){

        jQuery(".success-msg").slideUp(1000);


 });


 </script> 