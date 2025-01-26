

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retail - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">Retail Application</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?modul=home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Barang
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?modul=barang">Data Barang </a></li>
            <li><a class="dropdown-item" href="?modul=persediaan">Persediaan Barang</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?modul=penjualan">Penjualan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?modul=pengguna">Pengguna</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i>
          Administrator Web
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?modul=profile">Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container-fluid py-3 bg-white shadow-sm">
    <div class="container">
    <!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .carousel-item {
            text-align: center;
            background-color: #fce4ec;
            padding: 50px 20px;
        }
        .carousel-item img {
            max-width: 300px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .carousel-item h2 {
            color: #ff6b81;
            font-size: 2rem;
        }
        .carousel-item p {
            font-size: 1.1rem;
            color: #555;
        }
        .btn-shop {
            background-color: #ff6b81;
            color: white;
            border-radius: 25px;
            padding: 10px 20px;
            text-transform: uppercase;
        }
        .btn-shop:hover {
            background-color: #e55b70;
        }
    </style>
</head>
<b>
    <!-- Carousel Section -->
    <div id="skincareCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="micelar water.jpg" alt="Product 1">
                <h5>Big Size Micellar Water</h5>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="cushion.webp" alt="Product 2">
                <h5>Cushion</h5>
            </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
                <img src="bundle.webp" alt="Product 3">
                <h5>Bundle 4 in 1</h5>
        </div>
          <!-- Slide 5 -->
          <div class="carousel-item">
                <img src="eye serum.webp" alt="Product 3">
                <h5>Eye Serum</h5>
        </div>
        <div class="carousel-item">
                <img src="bundle 2.webp" alt="Product 3">
                <h5>Satu set Bundle</h5>
        </div>
        

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#skincareCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#skincareCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Skincare Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-light py-4 text-center">
        <h1 class="display-5">The Originote</h1>
        <p class="lead">Combining natural and lab ingredients into one, we aim to bring you high-quality skincare.</p>
    </header>

    <!-- Product Section -->
    <section class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="cushion.webp" class="card-img-top" alt="Product 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">The Originote Hyalucera Moisturizer Gel 50ml</h5>
                        <p class="card-text">A hydrating moisturizer to keep your skin soft and glowing.</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="bundle 2.webp" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bundle Acne Treatment</h5>
                        <p class="card-text">Includes Cica Toner, Clay Stick, and Moisturizer for acne-prone skin.</p>
                    </div>
                </div>
            </div>
        <!-- Product 3 -->
        <div class="col">
                <div class="card h-100">
                    <img src="eye serum.webp" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bundle Acne Treatment</h5>
                        <p class="card-text">Includes Cica Toner, Clay Stick, and Moisturizer for acne-prone skin.</p>
                    </div>
                </div>
            </div>
               <!-- Product 4 -->
        <div class="col">
                <div class="card h-100">
                    <img src="micelar water.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bundle Acne Treatment</h5>
                        <p class="card-text">Includes Cica Toner, Clay Stick, and Moisturizer for acne-prone skin.</p>
                    </div>
                </div>
            </div>
               <!-- Product 5 -->
        <div class="col">
                <div class="card h-100">
                    <img src="bundle.webp" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bundle Acne Treatment</h5>
                        <p class="card-text">Includes Cica Toner, Clay Stick, and Moisturizer for acne-prone skin.</p>
                    </div>
                </div>
            </div>
               <!-- Product 6 -->
        <div class="col">
                <div class="card h-100">
                    <img src="cushion.webp" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bundle Acne Treatment</h5>
                        <p class="card-text">Includes Cica Toner, Clay Stick, and Moisturizer for acne-prone skin.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="cushion.webp" class="card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bundle Acne Treatment</h5>
                        <p class="card-text">Includes Cica Toner, Clay Stick, and Moisturizer for acne-prone skin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    if(isset($_GET['modul'])){
        if($_GET['modul']=="home"){
            echo "Ini adalah konten home";
        }elseif($_GET['modul']=="barang"){
            echo "Ini adalah konten barang";
        }elseif($_GET['modul']=="persediaan"){
            echo "Ini adalah konten persediaan";
        }elseif($_GET['modul']=="penjualan"){
            echo "Ini adalah konten penjualan";
        }elseif($_GET['modul']=="pengguna"){
            echo "Ini adalah konten pengguna";
        }elseif($_GET['modul']=="profile"){
            echo "Ini adalah konten profile";
        }else{
            echo "Ini adalah konten home";
        }
    }else{
        echo "Ini adalah konten home";
       }
    ?>
</div>
</div>
</div>
    <div class="text-center py-3">
    <span>Copyright &copy; 2024 | DAISA BEUATY</span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
</html>
    </body>
    </body>
</html>
<?php
?>