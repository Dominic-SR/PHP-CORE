<?php
session_start();

include("../connection/dbconnection.php");

if(!isset($_SESSION['email']))
{
	header("location:Authentication/Login.php");
}
?>
<html lang="en">
<?php include('./Header.php') ?>
<body>
    <h1>Welcome <?php echo ($_SESSION['email']); ?></h1>
    <a href="../Authentication/Logout.php">Logout</a>

    <div class="container">
  <h2>CRUD</h2>
  <form class="form-horizontal" method="POST" action="./Action/actinsert.php" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-2" >Name</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Count</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Enter Count" name="count" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" >image</label>
      <div class="col-sm-6">
        <input type="file" class="form-control" name="image">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Insert</button>
      </div>
    </div>
  </form>
</div>

<div class="container">
  <h2>CRUD Table</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Count</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $c=1;
        $sql="select * from crud order by id";
        $result = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
            ?>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['count']; ?></td>
        <td><img src="../upload/<?php echo $row['img']; ?>" height="200px" width="200px" ></td>
      </tr>
      <?php }
      $c++;
      ?>
     </tbody>
  </table>
</div>

    
</body>
</html>