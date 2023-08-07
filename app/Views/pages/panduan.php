<?php echo $this->extend('template');
echo $this->section('content');
?>

<div class="content">
    <center>
        <div class="kotak-search">
            <div class="container-search">
                <div class="search-content" style="height: 110px;">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div>
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