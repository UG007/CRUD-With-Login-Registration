<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple CRUD operation</title>
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
<?php
    $mysqli = new mysqli('localhost','root','','crud02') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * from data02") or die($mysqli->error);
?>
<div class="container">
<h1>Records</h1>
<div class="col-full-10"></div>
<div class="justify-content-center">
<table class="table">
   <thead>
       <tr>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Email</th>
           <th>Age</th>
           <th>Location</th>
           <th>date</th>
           <th><colspan="2">Action</th>
       </tr>
    </thead>
    <?php
     while($row = $result->fetch_assoc()):?>
    <tr>
        <td><?php echo $row['fname']?></td>
        <td><?php echo $row['lname']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['location']?></td>
        <td><?php echo $row['date']?></td>
        <td>
            <a href="index.php?edit=<?php echo $row['id'];?>"
               class="btn btn-info">Edit</a>
            <a href="process01.php?delete=<?php echo $row['id'];?>"
               class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endwhile;?>
</table>    
</div>
<?php
    function pre_r($array){
        echo'<pre>';
        print_r($array);
        echo'<pre>';
    }
?>

<div class="form-group">
        <a href="http://localhost/series/crud01/index.php" class="btn btn-info" role="button">Back To Home</a>
      </div>
</div>    
</body>
</html>