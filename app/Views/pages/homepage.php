<?php
$session = session();
echo $this->extend('templatehome');
echo $this->section('content');
?>

<center>
    <div class="rektorat-back">
        <div class="content-homepage">
            <div class="welcome-sign">
                <h1 class="display-5">Selamat Datang<br>di e-Skripsi<br>Universitas Andalas</h1>
            </div>
            <div class="search-content">
                <form action="/dokumen/search" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control searchbar" placeholder="Search..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btnadvanced" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                        </div>
                    </div>
                    <button class="btn btncari" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </div>
</center>

<?php echo $this->endSection(); ?>

<?php echo $this->section('contentuser'); ?>
<center>
    <div class="rektorat-back">
        <div class="content-homepage">
            <div class="welcome-sign">
                <h1 class="display-5">Selamat Datang <?php echo $session->get('jenjang'); ?>- <?php echo $session->get('jurusan'); ?><br>di e-Skripsi<br>Universitas Andalas</h1>
            </div>
            <div><a href="/dokumen/add" class="uploadbtn" style="color: white;">Upload Dokumen</a></div>
            <div class="search-content">
                <form action="/dokumen/search" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control searchbar" placeholder="Search..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btnadvanced" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                        </div>
                    </div>
                    <button class="btn btncari" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </div>
</center>


<?php echo $this->endSection(); ?>