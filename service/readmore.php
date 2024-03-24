<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <style>
        .row{
        justify-content: center;
        margin: 20px;
        margin-top: 0px;
    }
    .card{
        margin: 20px;
        padding-top: 10px;
    }
    </style>
    <title>Our cars</title>
</head>
<body>
<div class="container w-80">
    <div class="row">
        <ul class="nav nav-underline justify-content-center col-sm-12 col-md-12 col-lg-12" style="font-size: 22px; padding: 10px;">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color: white; font-style: italic;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="readmore.php" style="color: white; font-style: italic;">About Us</a>
            </li>
            <li class="nav-item">
              <!-- Button trigger modal -->
<button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
  <a class="nav-link" href="#" style="color: white; font-style: italic; font-size: 18px;">Contact Us</a>
</button>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         
    
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-primary">Save changes</button>
          </div>
        </form> 
    </div>
  </div>
</div>      -->
           </li>  
          </ul>
    </div>
    <div class="row">
        <h3 class="header">Take a look at our Vehicles</h3>
        <div class="col-sm-6 col-md-4 col-lg-6 card" style="width: 18rem;">
          <img src="https://images.pexels.com/photos/3752169/pexels-photo-3752169.jpeg?cs=srgb&dl=pexels-jay-pizzle-3752169.jpg&fm=jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">Lamborghini Huracan Performante</h5>
            <p class="card-text" style="font-style: italic;">Lamborghini Huracan Performante...An exotic car which can achive speeds at 220mph in less than 10 sec. </p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Buy/Try Vehichle
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Buy/Try vehicle</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to Buy/Try this vehicle?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-6 card" style="width: 18rem;">
          <img src="https://uniar.de/wp-content/uploads/2022/04/DSC03852-scaled.jpg" class="card-img-top" alt="..." style="height: 180px;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">Ferrari 812 Superfast</h5>
            <p class="card-text" style="font-style: italic;">Ferrari 812 is one of the most elite cars ferrari has ever made with a cost of 350k $.It is also one of the most fast Ferrari cars with a 0-60 within 2.9 sec.</p>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buy/Try Vehicle
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Buy/Try vehicle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to Buy/Try this vehicle?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                      <button type="button" class="btn btn-primary">Yes</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-6 card" style="width: 18rem;">
          <img src="https://www.gtopcars.com/wp-content/uploads/2021/12/2023-Bugatti-Chiron-Pur-Sport.jpg" class="card-img-top" alt="..." style="height: 180px;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">Bugatti Chiron Pure Sport</h5>
            <p class="card-text" style="font-style: italic;">The fastest road car ever with a top speed of 300mph and a 0-60 in just 2.4 seconds but with a expensive price of 3.5 million $.</p>
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buy/Try Vehicle
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Buy/Try vehicle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to Buy/Try this vehicle?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                      <button type="button" class="btn btn-primary">Yes</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

    
</div>   
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="border-radius: 10px; padding-bottom: 40px;" >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.motortrend.com/uploads/2022/02/2022-Mercedes-Benz-G-Class-AMG-G63-22.jpg?fit=around%7C875:492.1875" class="d-block img-fluid" alt="..." style="width: 1150px; height: 550px; border-radius: 10px; margin-left: 75px;">
              </div>
              <div class="carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod/images/flying-spur-s-1-1656086344.jpg?crop=0.736xw:0.829xh;0.0782xw,0.149xh&resize=640:*" class="d-block img-fluid" alt="..." style="width: 1150px; height: 550px; border-radius: 10px; margin-left: 75px;">
              </div>
              <div class="carousel-item">
                <img src="https://www.cnet.com/a/img/resize/040198183e906495c9c7ba21c3279d3f3283b591/hub/2022/08/19/09916618-5ac6-4854-bd65-9fa6fad829a5/porsche-911-gt3-rs-white-green-002.jpg?auto=webp&fit=crop&height=675&width=1200" class="d-block img-fluid" alt="..." style="width: 1150px; height: 550px; border-radius: 10px; margin-left: 75px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
    </div>

    <br>
    <table class="table table-dark table-hover w-80">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created</th>
                <th>Category</th>
            </tr>
        </thead>

        <tbody>
        </tbody>
    </table>
</body>
</html>