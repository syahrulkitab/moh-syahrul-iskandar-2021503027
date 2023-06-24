<?php
require "config/config_global.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css"> 
</head>
<body>
    <div class="container">
    <!-- NAVBAR -->
    <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
    <!-- Navbar content -->
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">DataBase</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="?page=kosong">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="?page=list_prodi">Data Santri</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url() . "index.php?page=santri"; ?>">Santri</a>
        </li>
        </ul>
    </div>
    </div>
    <!-- end Navbar content -->
</nav>
    <!-- end Navbar -->

    <!-- Content -->
    <?php include "content.php"; ?>
    <!-- end content -->
</div>




    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
    <!-- fontawesome -->
    <script src="assets/fontawesome/js/all.min.js"></script>
</body> 
</html> 