<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple CRUD operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    require_once'process01.php';
?>
<?php
    if(isset($_SESSION['message'])):?>
    
<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>
<div class="container">
    <a class="pull-right btn btn-primary logout-box" href="http://localhost/series/crud01/login.php" role="button">Logout</a>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
  <form action="process01.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id;  ?>">
      <div class="form-group">
       <label>First Name</label>
      <input type="text" name="fname" class="form-control"
             value="<?php echo $fname; ?>"placeholder="Enter your first name">
      </div>
       <div class="form-group">
       <label>Last Name</label>
      <input type="text" name="lname" class="form-control" 
             value="<?php echo $lname; ?>"placeholder="Enter your last name">
      </div>
       <div class="form-group">
       <label>Email</label>
      <input type="text" name="email" class="form-control" 
             value="<?php echo $email; ?>"placeholder="Enter your email">
      </div>
       <div class="form-group">
       <label>Age</label>
      <input type="text" name="age" class="form-control" 
             value="<?php echo $age; ?>"placeholder="Enter your age">
      </div>
      <div class="form-group">
      <label>Location</label>
      <input type="text" name="location" class="form-control"
             value="<?php echo $location; ?>"placeholder="Enter your location">
      </div>
      <div class="form-group">
        <?php
          if($update == true):
          ?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php else: ?>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        <?php endif; ?>  
        <a href="http://localhost/series/crud01/view.php" class="btn btn-info" role="button">View Records</a>
      </div>
    </form>
</div>      
    </body>
</html>