<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>E-Commerce Website using Php and Mysql.</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
  </head>
  <body>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
   <img src=".\pngwing.com (1).png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-brands fa-opencart"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:10899/-</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->
<nav class ="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
</nav>

<!-- third child -->
<div class="bg-light">
  <h3 class="text-center">PhoneMart</h3>
  <p class="text-center">“Transparency is Our Promise.”</p>
</div>


<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
  <!-- products -->
  <div class="row">
    <div class="col-md-4 mb-2">
      <div class="card">
      <img src="./vivo T2 Pro 5G.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">vivo T2 Pro 5G (Dune Gold, 128 GB)(8 GB RAM)</h5>
    <p class="card-text">Condition-Good</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./a9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">OPPO A9 2020 (Marine Green, 128 GB)(8 GB RAM)</h5>
    <p class="card-text"> condition-Fair</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
    </div>
   <div <div class="col-md-4 mb-2">
    <div class="card">
  <img src="./realme8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">realme 8 (Cyber Silver, 128 GB)(6 GB RAM)</h5>
    <p class="card-text"> condition-Superb</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card">
  <img src="./a15.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SAMSUNG Galaxy A15 5G (Light Blue, 128 GB)(8 GB RAM)</h5>
    <p class="card-text">condition-Fair </p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src=".\12.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Apple iPhone 12 (Blue, 128 GB)</h5>
    <p class="card-text">Condition-Good</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card">
  <img src=".\10s.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">REDMI Note 10S (Frost White, 128 GB)(8 GB RAM)</h5>
    <p class="card-text">condition-Superb</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
  </div>
  </div>
</div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
     <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h3>All Brands</h3></a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">SAMSUNG</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">VIVO</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">IPHONE</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">OPPO</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">REALME</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">REDMI</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">ONEPLUS</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">POCO</a>
     </li>
     <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h5>Conditions</h5></a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">Superb</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">Good</a>
     </li>
     <li class="nav-item bg">
      <a href="#" class="nav-link text-light">Fair</a>
     </li>
    </ul>
  </div>
</div>
<div class="col-md-2 bg-secondary p-0">
  <!-- brands to be display -->

<!-- catagories to display -->
<ul class="navbar-nav me-auto text-center">

</ul>
<!-- categoris to be displayed -->


</div>
    </div>

<!-- last child -->
<div class="bg-info p-3 text-centre">
<p>All rights reserved ©- Designed by Sakil-2024</p>
</div>
    </div>
    




<!-- bootstrap js link -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>