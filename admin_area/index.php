<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <style>
        .footer{
            position: absolute;
            bottom: 0;
        }
    </style>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
               <img src="" alt="" class="logo"> 
               <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
         </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- Third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
               <div class="p-3">
                <a href="#"><img src="../t3.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
               </div> 
               <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
               <div class="button text-center">
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">Insert Products</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                <button><a href="index.php?insert_conditions" class="nav-link text-light bg-info my-1">Insert conditions</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View conditions</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1"></a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
               </div>
            </div>
        </div>


        <!-- fourth child -->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');

            }
            if(isset($_GET['insert_conditions'])){
                include('insert_conditions.php');
            }
            ?>


        </div>

        <!-- last child -->
        <div class="bg-info p-3 text-centre footer">
<p>All rights reserved ©- Designed by Sakil-2024</p>
</div>

    </div>

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
    
</body>
</html>