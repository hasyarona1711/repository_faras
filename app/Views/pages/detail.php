<?php $session = session(); ?>
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
    </center>
    <div class="container">
        <div class="judul-dokumen">
            <h3><?php echo $dokumen['judul']; ?></h3>
            <h5><?php foreach ($author as $auth) : ?>
                    <?php echo $auth['nama_depan']; ?> <?php echo $auth['nama_belakang']; ?>,
                <?php endforeach; ?>
                <?php echo $jendok['nama']; ?>. Unand
            </h5>
        </div>
        <div class="container-files">
            <div class="left-files">
                <?php foreach ($attachment as $a) : ?>
                    <div class="container-file">
                        <div class="gambarfile">
                            <img src="<?php echo base_url('images/icon file.png'); ?>" alt="">
                        </div>
                        <div class="detailfile">
                            <p><?php echo $a['judul']; ?></p>
                            <p>Ukuran : <?php echo $a['size']; ?> Kb</p>
                            <?php if ($session->get('isLogin')) { ?>
                                <?php if ($a['visible'] === "Anyone") { ?>
                                    <button><a href="/home/unduhfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Unduh</a></button>
                                    <button><a href="/home/lihatfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a></button>
                                <?php } elseif ($a['visible'] === "Registered Users Only") { ?>
                                    <button><a href="/home/unduhfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Unduh</a></button>
                                    <button><a href="/home/lihatfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a></button> <?php } else { ?>
                                    <p>Repository Staff Only</p>
                                <?php }
                                                                                                                                                                            } else { ?>
                                <?php if ($a['visible'] === "Anyone") { ?>
                                    <button><a href="/home/unduhfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Unduh</a></button>
                                    <button><a href="/home/lihatfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a></button> <?php } elseif ($a['visible'] === "Registered Users Only") { ?>
                                    <button><i class="fa fa-key" aria-hidden="true"></i>Login Required</button>
                                <?php } else { ?>
                                    <p>Repository Staff Only</p>
                            <?php }
                                                                                                                                                                            } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="right-files">
                <div class="container-preview-detail">
                    <h5>Abstrak</h5>
                    <p><?php echo $dokumen['abstrak']; ?></p>
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
                                <td>: <?php echo $tanggal; ?> (<?php echo $waktu; ?>)</td>
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
    </center>
    <div class="container">
        <div class="judul-dokumen">
            <h3><?php echo $dokumen['judul']; ?></h3>
            <h5><?php echo $dokumen['penulis_depan']; ?> <?php echo $dokumen['penulis_belakang'] ?>,<?php foreach ($author as $auth) : ?>
                <?php echo $auth['nama_depan']; ?> <?php echo $auth['nama_belakang']; ?>,
            <?php endforeach; ?>
            <?php echo $jendok['nama']; ?>. Unand
            </h5>
        </div>
        <div class="container-files">
            <div class="left-files">
                <?php foreach ($attachment as $a) : ?>
                    <div class="container-file">
                        <div class="gambarfile">
                            <img src="<?php echo base_url('images/icon file.png'); ?>" alt="">
                        </div>
                        <div class="detailfile">
                            <p><?php echo $a['judul']; ?></p>
                            <p>Ukuran : <?php echo $a['size']; ?> Kb</p>
                            <?php if ($session->get('isLogin')) { ?>
                                <?php if ($a['visible'] === "Anyone") { ?>
                                    <button><a href="/home/unduhfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Unduh</a></button>
                                    <button><a href="/home/lihatfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a></button> <?php } elseif ($a['visible'] === "Registered Users Only") { ?>
                                    <button><a href="/home/unduhfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Unduh</a></button>
                                    <button><a href="/home/lihatfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a></button> <?php } else { ?>
                                    <p>Repository Staff Only</p>
                                <?php }
                                                                                                                                                                            } else { ?>
                                <?php if ($a['visible'] === "Anyone") { ?>
                                    <button><a href="/home/unduhfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Unduh</a></button>
                                    <button><a href="/home/lihatfile/<?php echo $a['judul']; ?>.pdf" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a></button> <?php } elseif ($a['visible'] === "Registered Users Only") { ?>
                                    <button><i class="fa fa-key" aria-hidden="true"></i>Login Required</button>
                                <?php } else { ?>
                                    <p>Repository Staff Only</p>
                            <?php }
                                                                                                                                                                            } ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="right-files">
                <div class="container-preview-detail">
                    <h5>Abstrak</h5>
                    <p><?php echo $dokumen['abstrak']; ?></p>
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
                                <td>: <?php echo $tanggal; ?> (<?php echo $waktu; ?>)</td>
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