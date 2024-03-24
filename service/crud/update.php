<?php
include 'connect.php';
$id= $_GET['updateid'];
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "update `crudi` set id='$id', email='$email', password='$password' where id=$id";
    $result= mysqli_query($con, $sql);
    if($result){
        // echo "data inserted successfully";
        header('location:display.php');
    } 
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
  <style>
    body{
    background: rgba(0, 0, 0, 0.5) url('https://www.gifcen.com/wp-content/uploads/2022/11/lamborghini-gif-5.gif') center center fixed;
    background-blend-mode: darken;
    background-size: cover;
    background-position: center;
    width: auto;
    /* font-family: 'Black Ops One', cursive;
    font-family: 'Sedgwick Ave Display', cursive; */
    }
  </style>
  <body>
    
<div class="container my-5" style="width: 800px;">
    <form method="post">
       <div class="form-group">    
            <div class="mb-3">
                <label style="color: whitesmoke;">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div> 
        </div>
        <div class="form-group">    
            <div class="mb-3">
                <label style="color: whitesmoke;">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>   
        </div>    
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>
  </body>
</html>