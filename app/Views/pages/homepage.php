<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>

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
    <!-- <div class="search-bar">
        <form action="#">
            <button><span class="material-icons">search</span></button>
            <input type="text" name="search">
        </form>
        <a href="#">Advanced</a>
    </div>
    <div class="search-btn">
        <a href=""></a>
    </div> -->
</div>

<?php echo $this->endSection(); ?>