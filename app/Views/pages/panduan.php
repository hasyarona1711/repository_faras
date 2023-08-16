<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>
<div class="content">
    <center>
        <div class="kotak-search">
            <div class="search-content" style="height: 110px;">
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
        <div class="content-panduan">
            <h4>Panduan Website</h4>
            <div class="isi-content-panduan">
                <p>Repositori institusi Universitas Andalas merupakan media penyimpanan semua karya sivitas akademika berupa laporan penelitian mahasiswa (skripsi, tesis, disertasi), penelitian dosen dan staf. Repositori dilayankan secara open access (ketentuan berlaku), di mana pengguna wajib Login untuk dokumen tertentu. Panduan menggunakan repositori bisa diunduh <a href="#">di sini</a>.</p>
                <p>Panduan mengupload dokumen Skripsi/tesis/disertasi bisa diunduh <a href="#">di sini</a>.</p>
            </div>
        </div>
    </center>
</div>
<?php echo $this->endSection(); ?>
<?php echo $this->section('contentuser'); ?>
<div class="content">
    <center>
        <div class="kotak-search">
            <div class="search-content" style="height: 110px;">
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
        <div class="content-panduan">
            <h4>Panduan Website</h4>
            <div class="isi-content-panduan">
                <p>Repositori institusi Universitas Andalas merupakan media penyimpanan semua karya sivitas akademika berupa laporan penelitian mahasiswa (skripsi, tesis, disertasi), penelitian dosen dan staf. Repositori dilayankan secara open access (ketentuan berlaku), di mana pengguna wajib Login untuk dokumen tertentu. Panduan menggunakan repositori bisa diunduh <a href="#">di sini</a>.</p>
                <p>Panduan mengupload dokumen Skripsi/tesis/disertasi bisa diunduh <a href="#">di sini</a>.</p>
            </div>
        </div>
    </center>
</div>
<?php echo $this->endSection(); ?>