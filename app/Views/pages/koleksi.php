<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>

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
            <h4>Daftar <?php echo $title ?></h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col"><?php echo $title ?></th>
                        <th scope="col">Jumlah Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($dokumen as $d) : ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <?php if ($title == 'Fakultas') { ?>
                                <td><?php echo $title . ' ' . $d['nama']; ?></td>
                            <?php } else { ?>
                                <td><?php echo $d['nama']; ?></td>
                            <?php } ?>
                            <td>0 Dokumen</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
<?php echo $this->endSection(); ?>