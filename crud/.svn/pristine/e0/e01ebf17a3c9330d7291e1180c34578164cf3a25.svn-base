<?php include ("inc/header.php"); ?>
<?php 
  $db=new dbl();
  // Read Query
  $data_query="SELECT * FROM users";
  $read=$db->read($data_query);

?>
<?php   
// delete data
  $id=$_GET["id"];
  $delete_query="Delete FROM users where id=$id";
  $delete_data=$db->delete_row($delete_query);

?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center">All Users List</h4>
        <div class="table-responsive">   
        	<form action="delete.php?id="<?php echo $id;?>" method="POST">
         <table id="mytable" class="table table-bordred table-striped">     
           <thead>
              <th><input type="checkbox" id="checkall" /></th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Contact</th>
              <th>Address</th>
              <th>Edit</th>
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

                <td>

                <p data-placement="top" data-toggle="tooltip" title="Edit">
                  <a href="update.php?id=<?php echo urlencode($user["id"]);?>" class="btn btn-primary btn-xs" data-title="Edit" ><span class="glyphicon glyphicon-pencil"></span></a>
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
     </form>
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