<html>
<header>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">

</header>
<body> 
<?php include 'menu.php';  ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\wiltonre.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images\shutterstock_746652745.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images\full.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images\tt.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images\full.jpg" class="img-fluid abuotimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4" >Simple Project</h2>
        <p class="py-3">this simple project was designed as a homework for mr.Bryar Rahman By Muhammad Mahmood</p>
        <a href="about.php" class="btn btn-success"> See More</a>
        </div>
</div>

</div>

</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Products</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <a href="images\full.jpg">
                <img class="card-img-top" src="images\full.jpg" alt="Card image">
                </a>
                <div class="card-body">
                    <h4 class="card-title">Simple picture</h4>
                    <p class="card-text">Something describing the picture</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <a href="images\full.jpg">
                <img class="card-img-top" src="images\full.jpg" alt="Card image">
                </a>
                <div class="card-body">
                    <h4 class="card-title">Simple picture</h4>
                    <p class="card-text">Something describing the picture</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <a href="images\full.jpg">
                <img class="card-img-top" src="images\full.jpg" alt="Card image">
                </a>
                <div class="card-body">
                    <h4 class="card-title">Simple picture</h4>
                    <p class="card-text">Something describing the picture</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">our gallary</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\xx.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\NrIvzZ.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\cc.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\ta.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\f530101ba8bf8e4c33d8e2744350a3b4.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\tt.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\tt.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\tt.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images\tt.jpg" class="img-fluid pb-4">
            </div>

        </div>

    </div>


</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for="">username</label>
                <input type="text" name="user" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" name="email" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">mobile</label>
                <input type="phone" name="mobile" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">commemts</label>
                <textarea name="comments" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</section>


<footer>
    <p class="p-3 bg-dark text-white text-center">Create by: Muhammed Mahmood , Aland Azad  </p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>