<?php
include "../../config/config_global.php";
$db = koneksi(hostname, username, password, database);

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['kd_prodi']) ? $_GET['kd_prodi'] : false;

if($act == 'edit'){
    $url = "controller_prodi.php?act=edit";
    if($kode){
        $query = $db->query("SELECT * FROM prodi WHERE kd_prodi ='$kode'");
        $row = $query->fetch_array(); 
    }
    else{
        echo "<script>
        alert('parameter kode prodi tidak valid');
        window.location.href='list_prodi.php';
    </script>";
    }
}
else{
    $url = "controller_prodi.php?act=input";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css"> 
</head>
<body>
<div class="container">
    <!-- NAVBAR -->
    <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
    <!-- Navbar content -->
    <div class="container-fluid">
    <a class="navbar-brand" href="#">DataBase</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../../?page=list_prodi">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../?page=form_prodi">Data Santri</a>
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
    <div class="container">
        <div class="card">
            <div class="card-header">
                Input Data Santri
            </div>
            <div class="card-body">
            <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="kd_prodi_old" id="kd_prodi_old" value="<?php echo isset($row) ? $row['kd_prodi'] : ''; ?>">
        <div class="mb-3">
            <label for="kd_prodi">No Induk</label>
            <input type="text" class="form-control" name="kd_prodi" id="kd_prodi" value="<?php echo isset($row) ? $row['kd_prodi'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="nama_prodi">Nama Santri</label>
            <input type="text" class="form-control" name="nama_prodi" id="nama_prodi" value="<?php echo isset($row) ? $row['nama_prodi'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="kd_fakultas">Asrama</label>
            <input class="form-control" type="text" class="form-control" name="kd_fakultas" id="kd_fakultas" value="<?php echo isset($row) ? $row['kd_fakultas'] : '';  ?>">
        </div>
        <div class="mb-3">
            <label for="password">Password</label> 
            <input type="password" name="password" id="password">
        </div>
        <div class="mb-3"> 
            <button class="btn btn-danger btn-sm float-start" onclick="history.back()">
            <i class="fa-solid fa-chevron-left"></i>
                Kembali
            </button>
            <button class= "btn btn-primary btn-sm float-end" type="submit">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan Data
            </button>   
        </div>
    </form>
</div>
</div>
</div>
    
</div>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="../../assets/fontawesome/js/all.min.js"></script>
</body>
</html>