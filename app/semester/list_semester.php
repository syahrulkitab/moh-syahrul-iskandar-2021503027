
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Semester</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css"> 
</head>
<body>
    <br><br>
    <div class="container">
    <div class="card">
<div class="card-header">
    Data Semester
</div>
<div class="card-body">
<a class="btn btn-primary btn-sm" href="app/prodi/form_prodi.php">
    <i class="fa-solid fa-circle-plus"></i>Tambah Data</a>
    <?php

    $query = $db->query("SELECT * FROM prodi");                                                                                
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th> 
                <th>Prodi</th> 
                <th>Kode semester </th>         
                <th>Asrama</th> 
                <th>Act</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($row = $query->fetch_array()){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $row['kd_prodi'];?></td>
                            <td><?php echo $row['nama_prodi'];?></td>
                            <td><?php echo $row['kd_fakultas'];?></td>
                            <td><a class="btn btn-outline-success btn-sm" href="app/prodi/form_prodi.php?act=edit&kd_prodi=<?php echo $row['kd_prodi']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a class="btn btn-outline-danger btn-sm" href="app/prodi/controller_prodi.php?act=hapus&kd_prodi=<?php echo $row['kd_prodi']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
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