<?php
$session = session();
echo $this->extend('template');
echo $this->section('content');
?>

<center>
    <div class="content" style="background-color: white;">
        <div class="welcome-sign">
            <h1 class="display-4">Selamat Datang<br>di e-Skripsi<br>Universitas Andalas</h1>
        </div>
        <div class="search-content" style="height: 360px;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                </div>
            </div>
            <button class="btn btn-outline-secondary" type="button">Cari</button>
        </div>
    </div>
</center>

<?php echo $this->endSection(); ?>

<?php echo $this->section('contentuser'); ?>
<center>
    <div class="content" style="background-color: white;">
        <div class="welcome-sign">
            <h1 class="display-4">Selamat Datang <?php echo $session->get('jenjang'); ?>- <?php echo $session->get('jurusan'); ?><br>di e-Skripsi<br>Universitas Andalas</h1>
        </div>
        <div><a href="/dokumen/add" class="btn btn-primary">Upload Dokumen</a></div>
        <div class="search-content" style="height: 360px;">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                </div>
            </div>
            <button class="btn btn-outline-secondary" type="button">Cari</button>
        </div>
    </div>
</center>
<?php echo $this->endSection(); ?>