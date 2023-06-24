<?php
include "../../config/config_global.php";
$db = koneksi(hostname, username, password, database);

$act = $_GET['act'];

if($act == 'input'){
    $kd_prodi = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $kd_fakultas = $_POST['kd_fakultas'];
    $password = sha1($_POST['password']);
    
    $query = $db->query("INSERT INTO prodi (kd_prodi, nama_prodi, kd_fakultas, password)
                    VALUES ('$kd_prodi','$nama_prodi','$kd_fakultas','$password')");
    if($query){
        echo "<script>
            alert('data suksess disimpan');
            window.location.href='../../index.php?page=list_prodi';
        </script>";
    }
    else{
        echo "<script>
            alert('data gagal disimpan');
            window.location.href='../../index.php?page=list_prodi';
        </script>";
    }
}
else if($act == 'edit'){
    $kd_prodi_old = $_POST['kd_prodi_old'];
    $kd_prodi = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $kd_fakultas = $_POST['kd_fakultas'];
    $password = $_POST['password'];

    if(!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE prodi SET kd_prodi = '$kd_prodi',
                                            nama_prodi = '$nama_prodi',
                                            kd_fakultas = '$kd_fakultas',
                                            password = '$password_fix'
                                    WHERE kd_prodi='$kd_prodi_old'");
    }
    else{
        $query = $db->query("UPDATE prodi SET kd_prodi = '$kd_prodi',
                                            nama_prodi = '$nama_prodi',
                                            kd_fakultas = '$kd_fakultas'
                                    WHERE kd_prodi ='$kd_prodi_old'");
    }

    if($query){
        echo "<script>
            alert('data suksess diubah');
            window.location.href='../../index.php?page=list_prodi';
        </script>";
    }
    else{
        echo "<script>
            alert('data gagal diubah');
            window.location.href=../../index.php?page=list_prodi';
        </script>";
    }
}
else if($act == 'hapus'){ 
    $kd_prodi = $_GET['kd_prodi'];
    $query = $db->query("DELETE FROM prodi WHERE kd_prodi = '$kd_prodi'");   
    if($query){
        echo "<script>
            alert('data suksess dihapus');
            window.location.href='../../index.php?page=list_prodi';
        </script>";
    }
    else{
        echo "<script>
            alert('data gagal dihapus');
            window.location.href='../../index.php?page=list_prodi';
        </script>";
    }
}
else{
    echo "<script>
        alert('maaf, parameter Anda tidak valid');
        window.location.href='list_prodi.php';
    </script>";
}


?>