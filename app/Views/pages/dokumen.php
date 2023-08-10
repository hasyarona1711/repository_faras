<?php
echo $this->extend('template');
echo $this->section('content');
?>

<center>
    <div class="content">
        <div class="kotak-search">
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
        <div class="content-table">
            <h4>Dokumen <?php echo $judul ?></h4>
            <h6>Menampilkan 1-10 dari 200 Dokumen</h6>
            <table class="table mt-3">
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dokumen as $d) : ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <td>
                                <a href="/dokumen/detail/<?php echo $d['id']; ?>">
                                    <?php echo $d['nama_belakang']; ?>,<?php echo $d['nama_depan']; ?>. <?php echo $d['tahun']; ?>. <?php echo $d['judul']; ?>. <?php echo $d['nama']; ?>. Universitas Andalas
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