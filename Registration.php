<html>
    <head>
  <title>User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="row">
<div class="col-md-6">
    <h2>Register Here</h2>
    <form action="process01.php" method="post">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
         <button type="submit" class="btn btn-primary" name="register">Register</button>
        <a href="http://localhost/series/crud01/login.php" class="btn btn-info" role="button">Login</a>
    </form>
</div>
</div>    
</div>
</body>
</html>