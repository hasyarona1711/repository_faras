<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>
<?php $session = session(); ?>

<div class="content">
    <center>
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
    </center>
    <div class="container">
        <div class="judul-dokumen">
            <h3><?php echo $dokumen['judul']; ?></h3>
            <h5><?php echo $author['nama_depan']; ?> <?php echo $author['nama_belakang']; ?>.<?php echo $jendok['nama']; ?>Unand</h5>
        </div>
        <div class="container-files">
            <div class="left-files">
                <?php foreach ($attachment as $a) : ?>
                    <div class="container-file">
                        <div class="gambarfile">
                            <img src="" alt="">
                        </div>
                        <div class="detailfile">
                            <p><?php echo $a['judul']; ?></p>
                            <p>Ukuran : <?php echo $a['size']; ?> Kb</p>
                            <?php if ($session->get('isLogin')) { ?>
                                <?php if ($a['visible'] === "Anyone") { ?>
                                    <button>Unduh</button>
                                    <button>Lihat</button>
                                <?php } elseif ($a['visible'] === "Registered Users Only") { ?>
                                    <button>Unduh</button>
                                    <button>Lihat</button>
                                <?php } else { ?>
                                    <p>Repository Staff Only</p>
                                <?php }
                            } else { ?>
                                <?php if ($a['visible'] === "Anyone") { ?>
                                    <button>Unduh</button>
                                    <button>Lihat</button>
                                <?php } elseif ($a['visible'] === "Registered Users Only") { ?>
                                    <button>Login Required</button>
                                <?php } else { ?>
                                    <p>Repository Staff Only</p>
                            <?php }
                            } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="right-files">
                <div class="container-preview">
                    <h5>Judul file</h5>
                    <h2>preview file</h2>
                </div>
                <div class="detail-dokumen">
                    <table>
                        <tbody>
                            <tr>
                                <td>Jenis Dokumen</td>
                                <td>: <?php echo $jendok['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>: <?php echo $jurusan['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>: <?php echo $fakultas['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Dosen Pembimbing</td>
                                <td>: <?php echo $dokumen['dosen_pembimbing']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Upload</td>
                                <td><?php echo $tanggal; ?> (<?php echo $waktu; ?>)</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: <?php echo $dokumen['email']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php echo $this->endSection(); ?>