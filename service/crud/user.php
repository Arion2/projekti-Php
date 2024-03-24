<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "insert into `crudi` (email, password) 
    values('$email' , '$password')";
    $result= mysqli_query($con, $sql);
    if($result){
        echo "data inserted successfully";
        // header('location:display.php');
    } 
    else{
        die(mysqli_error($con));
    }
}
?>       
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    
    <title>Auto Spedsteer</title>
</head>

<body>
    
   <div class="container w-80">
<div class="row">
    <ul class="nav text-light nav-underline justify-content-center col-sm-12 col-md-12 col-lg-12" style="font-size: 22px; padding: 10px; ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#" style="color: white; font-style: italic;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php" style="color: white; font-style: italic;">About Us</a>
        </li>
        <li class="nav-item">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <a class="nav-link" id="contact" href="#" style="color: white; font-style: italic; font-size: 18px;">Contact Us</a> 
        </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;">Get In Touch</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      -->    
          <form method="post">
       <div class="form-group"> 
        <div class="modal-body">   
            <div class="mb-3">
                <label style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;" >Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div> 
        
        <div class="form-group">    
            <div class="mb-3">
                <label style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px; width: 400px">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>   
        </div>
      
        </div>
        <button type="submit" class="btn btn-primary" name="submit" style=" margin-left: 15px;">Submit</button>
      
  </div>
    </form>
 
</div>
      <div class="modal-footer">
        
      </div>
    </form> 
    </div>
  </div>
</div>
        </li>
      </ul>
</div>
       <div class="content col-sm-12 col-md-12 col-lg-12">
        <h5 class="header">Auto detailing and Auto Buy</h5>
        <h1 class="header1">CAR DEALING COMPANY</h1>
       </div> 
       <a href="display.php">
       <button class="btn btn-secondary buton" style="margin-left: 45%;">Read More</button>
       </a>
</div>
</body>
</html>
