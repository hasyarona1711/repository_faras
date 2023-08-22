<?php
$session = session();
echo $this->extend('template');
echo $this->section('contentuser');
?>

<div class="content" tyle="background-color: white;">
    <div class="title-upload">
        <center>
            <h6>Judul : <?php echo $dokumen['judul']; ?></h6>
        </center>
    </div>
    <center>
        <?php if ($isUpload) { ?>
            <div class="berhasil">
                <p>Item Berhasil di Deposit</p><i class="fa fa-check-circle-o" aria-hidden="true"></i>
            </div>
        <?php } ?>
    </center>
    <div class="container-preview">
        <div class="button-preview">
            <button id="preview-button" onclick="previewButton()">Preview</button>
            <button id="details-button" onclick="detailButton()">Details</button>
        </div>
        <div class="content-preview" id="content-preview">
            <div class="preview-container-kecil">
                <div class="container-kecil-judul">
                    <center>
                        <div class="title-container-kecil">
                            <p class="judprev"><?php echo $dokumen['judul']; ?></p>
                        </div>
                    </center>
                    <p class="penprev">
                        <?php echo $dokumen['penulis_belakang']; ?>, <?php echo $dokumen['penulis_depan']; ?>,
                        <?php if ($author) {
                            foreach ($author as $a) {
                                echo $a['nama_depan']; ?> <?php echo $a['nama_belakang']; ?>,
                        <?php }
                        } ?>
                        <?php echo $jendok['nama']; ?>. Universitas Andalas.
                    </p>
                </div>
                <div class="preview-container-files">
                    <div class="left-files-kecil">
                        <?php foreach ($attachment as $att) : ?>
                            <div class="files-kecil">
                                <img src="<?php echo base_url('images/icon file.png'); ?>" alt="">
                                <div class="ket-files">
                                    <p><?php echo $att['judul']; ?></p>
                                    <p>Ukuran : <?php echo $att['size']; ?></p>
                                    <button>Unduh</button>
                                    <button>Lihat</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="right-files-kecil">
                        <div class="judul-right-files">
                            <p>Abstrak</p>
                            <div class="abstrak-kecil">
                                <p><?php echo $dokumen['abstrak']; ?></p>
                            </div>
                        </div>
                        <div class="detail-right-files">
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
                                        <td>: <?php echo $tgl_upload; ?> (<?php echo $waktu_upload; ?>)</td>
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
        <div class="content-detail" id="content-detail">
            <table>
                <tbody>
                    <tr>
                        <td>Item-ID</td>
                        <td>: <?php echo $dokumen['id']; ?></td>
                    </tr>
                    <tr>
                        <td>User</td>
                        <td>: <?php echo $jenjang['nama']; ?>-<?php echo $juruser['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Upload</td>
                        <td class="list-upload-preview">: <?php foreach ($attachment as $att) : ?>
                                <?php echo $att['judul']; ?>(<?php echo $att['visible']; ?>)<br>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Detail</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo $dokumen['penulis_depan']; ?> <?php echo $dokumen['penulis_belakang']; ?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: <?php echo $dokumen['nim']; ?></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>: <?php echo $dokumen['judul']; ?></td>
                    </tr>
                    <tr>
                        <td>Abstrak</td>
                        <td>: <?php echo $dokumen['abstrak']; ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Tesis</td>
                        <td>: <?php echo $jendok['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenjang</td>
                        <td>: <?php echo $jenjang_tesis['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td>: <?php echo $fakultas['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: <?php echo $jurusan['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Dosen Pembimbing</td>
                        <td>: <?php echo $dokumen['dosen_pembimbing']; ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>: <?php echo $dokumen['status']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Publikasi</td>
                        <td>: <?php echo $tgl_upload; ?></td>
                    </tr>
                    <tr>
                        <td>Kata Kunci</td>
                        <td>: <?php echo $dokumen['kata_kunci']; ?></td>
                    </tr>
                    <tr>
                        <td>Referensi</td>
                        <td>: <?php echo $dokumen['referensi']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <?php echo $dokumen['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Subjek</td>
                        <td>: <?php echo $subjek['nama']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>