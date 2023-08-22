<?php echo $this->extend('template'); ?>
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
                                <td><a href="/dokumen/filefakultas/<?php echo $d['id']; ?>"><?php echo $title . ' ' . $d['nama']; ?></a></td>
                            <?php } elseif ($title == 'Jurusan') { ?>
                                <td><a href="/dokumen/filejurusan/<?php echo $d['id']; ?>"><?php echo $d['nama']; ?></a></td>
                            <?php } else { ?>
                                <td><a href="/dokumen/filejenis/<?php echo $d['id']; ?>"><?php echo $d['nama']; ?></a></td>
                            <?php } ?>
                            <td><?php echo $d['jumlah']; ?> Dokumen</td>
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
                                <td><a href="/dokumen/filefakultas/<?php echo $d['id']; ?>"><?php echo $title . ' ' . $d['nama']; ?></a></td>
                            <?php } elseif ($title == 'Jurusan') { ?>
                                <td><a href="/dokumen/filejurusan/<?php echo $d['id']; ?>"><?php echo $d['nama']; ?></a></td>
                            <?php } else { ?>
                                <td><a href="/dokumen/filejenis/<?php echo $d['id']; ?>"><?php echo $d['nama']; ?></a></td>
                            <?php } ?>
                            <td><?php echo $d['jumlah']; ?> Dokumen</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
<?php echo $this->endSection(); ?>