<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register form</h2>
  <form class="form-horizontal" method="POST" action="./Actions/LoginAction.php">

    <div class="form-group">
      <label class="control-label col-sm-2" >Email</label>
      <div class="col-sm-6">          
        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" >Password</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
