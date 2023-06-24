<?php
if(!isset($_GET['page'])){
    ?>
    <div class="card">
            <div class="card-header">
                Beranda
            </div>
        <div class="card-body">
            <h5 class="card-title">Selamat Datang di My Web</h5>
            <p class="card-text">Silahkan klik menu di atas, untuk mengelola konten.</p>
        </div>
    </div>
    <?php
} 
else {
    $page = $_GET['page'];
    
     
        include "app/prodi/$page.php";
}
