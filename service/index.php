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
    <!-- <div class="main">
        <div class="logo">
            <h3>Auto Speedsteer</h3>
        </div>
        <div class="nav-links">
            <a href="#">Our Cars</a>
            <div>
                <a href="#">Our Services</a>
                <a type="btn" class="btn btn-primary" href="#">About</a>
            </div>
        </div>

  -->
<div class="row">
    <ul class="nav text-light nav-underline justify-content-center col-sm-12 col-md-12 col-lg-12" style="font-size: 22px; padding: 10px; ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#" style="color: white; font-style: italic;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="readmore.php" style="color: white; font-style: italic;">About Us</a>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;">Get In Touch</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" style="color: #383838; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 18px;">Remember me</label>
          </div>
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->     
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-primary">Save changes</button>
      </div>
    </form> 
    </div>
  </div>
</div>
        </li>
        <!-- Button trigger modal -->

      </ul>
</div>
       <div class="content col-sm-12 col-md-12 col-lg-12">
        <h5 class="header">Auto detailing and Auto Buy</h5>
        <h1 class="header1">CAR DEALING COMPANY</h1>
       </div> 
       <a href="readmore.php">
       <button class="btn btn-secondary buton" style="margin-left: 45%;">Read More</button>
       </a>
</div>
</body>
</html>