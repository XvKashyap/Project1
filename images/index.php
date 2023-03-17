<!DOCTYPE html>
<html lang="en">
<head>
  <title>College Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="carousel.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="image.css">
 
 
    
 
</head>
<body>
  <style>
            html::-webkit-scrollbar{
            width: 10px;

        }
        html::-webkit-scrollbar-track{
            background:white;
        }
        html::-webkit-scrollbar-thumb{
            background: rgb(245, 83, 9);
        }
  </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">NORTHEAST COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="course.php">COURSE</a>
      </li>
      
     
      <li class="nav-item">
        <a class="nav-link" href="form.php">REGISTRATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">ADMIN LOGIN</a>
      </li>
      
      
      
    </ul>
    
  </div>
</nav>

<!----CAROUSEL------>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./college4.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>CAMPUS</h3>
        <p>NorthEastians!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./photo3.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./photo1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Happiness</h3>
        <p>Graduate!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!----CAROUSEL------>

<section class="my-5">
  <div class="py-5">

      <h1><center>ABOUT US</center></h1>

  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-ml-6 col-12">
      <img src="./college.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-ml-6 col-12">
      <h4>ABOUT NORTHEAST COLLEGE</h4>
      <p class="py-3">NORTHEAST COLLEGE is a group of Colleges established in the year 2022
        by NORTHEAST Educational Society with a view to promote specialized professional education in the North Eastern Region of the Country
        These Institutions are affiliated to Dibrugarh University, ASTU and Gauhati University for their various courses. 
        The Department of Technical Education, Government of Assam initially extended its active support for the 
        establishment of this Institution with a viewto promote skill based professional education in this part of the country.
</p>
<a href="about.php" class="btn btn-success">Know More</a>
</div>
</div>

</div>
</section>

<section class="my-5">
  <div class="py-5">

      <h1><center>OUR COURSES</center></h1>

  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="./college1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">BCA</h4>
    <p class="card-text">BACHELOR IN COMPUTER APPLICATION.</p>
    <a href="#" class="btn btn-primary">KNOW MORE</a>
  </div>
</div>

    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="./college1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">MCA</h4>
    <p class="card-text">MASTER IN COMPUTER APPLICATION.</p>
    <a href="#" class="btn btn-primary">KNOW MORE</a>
  </div>
</div>

    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
  <img class="card-img-top" src="./college1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">BBA</h4>
    <p class="card-text">BACHELOR IN BUSINESS ADMINISTRATION.</p>
    <a href="#" class="btn btn-primary">KNOW MORE</a>
  </div>
</div>

    </div>

  </div>
</div>
</section>

<section class="my-5">
  <div class="py-5">

      <h1><center>OUR GALLERY</center></h1>

  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="./photo2.jpg" class="img-fluid courseimg">

      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="./photo3.jpg" class="img-fluid courseimg">

      </div>
      
      <div class="col-lg-4 col-md-4 col-12">
        <img src="./photo2.jpg" class="img-fluid courseimg">

      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="./photo.jpg.jpg" class="img-fluid courseimg">

      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="./college1.jpg" class="img-fluid courseimg">

      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="./college.jpg" class="img-fluid courseimg">

      </div>
      
      

    </div>

  </div>
  

</section>

<section class="my-5">
  <div class="py-5">

      <h1><center>CONTACT US</center></h1>

  </div>

<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" autocomplete="off" class="form-control">

  </div>

  <div class="form-group">
    <label>Email Id</label>
    <input type="text" name="email" autocomplete="off" class="form-control">

  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" autocomplete="off" class="form-control">

  </div>
  <div class="form-group">
    <label>Comment</label>
   <textarea class="form-control" name="comment"></textarea>

  </div>
  <button type="submit" class="btn btn-success">Submit</button>


</form>
</div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@NorthEast | 2022 | All Right Reserved</p>
</footer>


              
              
  





  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>