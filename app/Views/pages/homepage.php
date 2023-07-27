<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>

<center>
    <div class="welcome-sign">
        <h1 class="display-4">Selamat Datang<br>di e-Skripsi<br>Universitas Andalas</h1>
    </div>
    <div class="search-content">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Advanced</button>
            </div>
        </div>
        <button class="btn btn-outline-secondary" type="button">Cari</button>
    </div>
</center>

<?php echo $this->endSection(); ?>