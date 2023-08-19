<?php echo $this->extend('template'); ?>
<?php
$x = 0;
foreach ($dokumen as $dok) {
    $x++;
}
?>
<?php echo $this->section('content'); ?>
<center>
    <div class="content">
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
        <div class="content-table">
            <h4><?php echo $title; ?> <?php echo $keyword; ?></h4>
            <h6>Menampilkan <?php echo $x; ?> dari <?php echo $x; ?> Dokumen</h6>
            <table class="table mt-3">
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dokumen as $d) : ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <td>
                                <a href="/dokumen/detail/<?php echo $d['id']; ?>">
                                    <?php echo $d['penulis']; ?>. <?php echo $d['tahun']; ?>. <?php echo $d['judul']; ?>. <?php echo $d['nama']; ?>. Universitas Andalas
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
<?php echo $this->endSection(); ?>
<?php echo $this->section('contentuser'); ?>
<center>
    <div class="content">
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
        <div class="content-table">
            <h4><?php echo $title; ?> <?php echo $keyword; ?></h4>
            <h6>Menampilkan <?php echo $x; ?> dari <?php echo $x; ?> Dokumen</h6>
            <table class="table mt-3">
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dokumen as $d) : ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <td>
                                <a href="/dokumen/detail/<?php echo $d['id']; ?>">
                                    <?php echo $d['penulis']; ?>. <?php echo $d['tahun']; ?>. <?php echo $d['judul']; ?>. <?php echo $d['nama']; ?>. Universitas Andalas
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
<?php echo $this->endSection(); ?>