<?php
$session = session();
echo $this->extend('template');
echo $this->section('contentuser');
$user = $session->get('user');
?>
<form action="/dokumen/saveFile" name="form-upload" method="post">
    <div class="content" style="background-color: white;">
        <center>
            <div class="title-upload">
                <h5 id="perintah-form">Silahkan isi formulir ini untuk langkah selanjutnya</h5>
            </div>
            <div class="progress-step" style="width: 877px;">
                <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                    <!-- step upload -->
                    <li class="form-stepper-active text-center form-stepper-list" step="0" onclick="pergiKe(0)">
                        <a class="mx-2">
                            <span class="form-stepper-circle">
                                <span><i class="fa fa-upload" aria-hidden="true"></i></span>
                            </span>
                            <div class="label">Upload</div>
                        </a>
                    </li>
                    <!-- step detail -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="1" onclick="pergiKe(1)">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                            </span>
                            <div class="label text-muted">Detail</div>
                        </a>
                    </li>
                    <!-- step upload -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="2" onclick="pergiKe(2)">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span><i class="fa fa-tag" aria-hidden="true"></i></span>
                            </span>
                            <div class="label text-muted">Subject</div>
                        </a>
                    </li>
                    <!-- step upload -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="3" onclick="pergiKe(3)">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span><i class="fa fa-check" aria-hidden="true"></i></span>
                            </span>
                            <div class="label text-muted">Validasi</div>
                        </a>
                    </li>
                </ul>
            </div>
        </center>
        <div class="container-upload">
            <div class="tab">
                <div class="form-tipe">
                    <div class="form-group row">
                        <input type="hidden" id="jurusan-user" value="<?php echo $user['id_jurusan']; ?>">
                        <input type="hidden" name="username" value="<?php echo $user['username']; ?>">
                        <label for="tipe-item" class="col-sm-2 col-form-label">Tipe Item</label>
                        <div class="col-sm-3">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="tipe-item">
                                <option selected value="">Choose..</option>
                                <?php foreach ($tipeitem as $tipe) : ?>
                                    <option value="<?php echo $tipe['id']; ?>"><?php echo $tipe['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="upload-file" class="col-sm-2 col-form-label">Upload File</label>
                        <div class="col-sm-3">
                            <div class="input-group mb-3">
                                <button type="button" onclick="adaLampiran()" class="btn btn-primary" data-toggle="modal" data-target="#lampiranModal">
                                    Tambah Lampiran
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="file-container" style="min-width: 750px;">
                    <?php if (!empty($files)) { ?>
                        <input type="hidden" name="adalampiran" id="adalampiran">
                        <?php foreach ($files as $file) : ?>
                            <div class="files-list mt-2">
                                <div class="left">
                                    <p><?php echo $file['judul']; ?></p>
                                </div>
                                <div class="right">
                                    <button type="button" class="settingbtn" data-toggle="modal" data-target="#settingModal<?php echo $file['id']; ?>"><i class="fa fa-cog" aria-hidden="true"></i>Settings</button>
                                    <a href="/dokumen/deletefiles/<?php echo $file['id']; ?>" class="deletebtn" onclick="return confirm('apakah anda yakin?');"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                </div>
                            </div>
                    <?php endforeach;
                    } ?>
                </div>
            </div>

            <div class="tab">
                <div class="row mb-3">
                    <label for="author" class="col-sm-2 col-form-label">Author*</label>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname_author">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname_author">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#authorModal"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Pengarang</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2 col-form-label"></div>
                    <div class="col-sm-7" id="author-container" style="overflow-y:auto">
                        <input type="hidden" name="jumlahauthor" id="jumlahauthor">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM*</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control harus" id="nim" name="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul*</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control harus" id="judul" name="judul">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="abstrak" class="col-sm-2 col-form-label">Abstrak*</label>
                    <div class="col-sm-7">
                        <input type="textarea" class="form-control harus" id="abstrak" name="abstrak">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jendok" class="col-sm-2 col-form-label">Tipe Tesis*</label>
                    <div class="col-sm-7">
                        <select class="custom-select harus" id="jendok" name="jendok">
                            <option selected>Choose...</option>
                            <?php foreach ($jendok as $je) : ?>
                                <option value="<?php echo $je['id']; ?>"><?php echo $je['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenjang" class="col-sm-2 col-form-label">Jenjang*</label>
                    <div class="col-sm-7">
                        <select class="custom-select harus" id="jenjang" name="jenjang">
                            <option selected>Choose...</option>
                            <?php foreach ($jenjang as $j) : ?>
                                <option value="<?php echo $j['id']; ?>"><?php echo $j['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fakultas" class="col-sm-2 col-form-label">Fakultas*</label>
                    <div class="col-sm-4">
                        <select class="custom-select harus" id="fakultas" name="fakultas">
                            <option selected>Choose...</option>
                            <?php foreach ($fakultas as $f) : ?>
                                <option value="<?php echo $f['id']; ?>"><?php echo $f['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <label for="jurusan" class="col-sm-1 col-form-label">Jurusan*</label>
                    <div class="col-sm-5">
                        <select class="custom-select harus" id="jurusan" name="jurusan">
                            <option selected>Choose...</option>
                            <?php foreach ($jurusan as $ju) : ?>
                                <option value="<?php echo $ju['id']; ?>"><?php echo $ju['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dospem" class="col-sm-2 col-form-label">Dosen Pembimbing*</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control harus" id="dospem" name="dospem">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status*</label>
                    <div class="col-sm-7">
                        <select id="status" class="custom-select mr-sm-2 harus" name="status">
                            <option selected>Choose...</option>
                            <option value="published">Published</option>
                            <option value="in-press">In Press</option>
                            <option value="submitted">Submitted</option>
                            <option value="unpublished">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_publikasi" class="col-sm-2 col-form-label">Tanggal Publikasi*</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control harus" id="tgl_publikasi" name="tgl_publikasi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kata_kunci" class="col-sm-2 col-form-label">Kata Kunci</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="kata_kunci" name="kata_kunci">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="referensi" class="col-sm-2 col-form-label">Referensi</label>
                    <div class="col-sm-7">
                        <input type="textarea" class="form-control" id="referensi" name="referensi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email*</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control harus" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="tab">
                <center>
                    <h5 class="mb-3"><b>Subjek</b></h5>
                    <select class="custom-select mr-sm-2" aria-label="Default select example" id="selectsubjek">
                        <option selected value="">Choose..</option>
                        <option value="1">General Works</option>
                        <option value="2">Philosophy.Psychology.Religion</option>
                    </select>
                    <select class="custom-select mr-sm-2 mt-3" aria-label="Default select example" id="subsubjek1" name="subsubjek1">
                        <option selected value="">Choose..</option>
                        <option value="1">Collections. Series. Collected works</option>
                        <option value="2">History of Scholarship The Humanities</option>
                    </select>
                    <select class="custom-select mr-sm-2 mt-3" aria-label="Default select example" id="subsubjek2" name="subsubjek2">
                        <option selected value="">Choose..</option>
                        <option value="3">Philosophy (General)</option>
                        <option value="4">Logic</option>
                    </select>
                </center>
                <script>
                    $('#selectsubjek').change(function() {
                        if ($(this).val() == 1) {
                            $('#subsubjek1').show();
                            $('#subsubjek2').hide();
                        } else {
                            $('#subsubjek2').show();
                            $('#subsubjek1').hide();
                        }
                    });
                </script>
            </div>
            <div class="tab">
                <div class="container-validasi" id="container-validasi">
                    <div class="validasi-form" id="validasi-form">
                        <div class="isivalform" id="isivalform">
                            <img src="<?php echo base_url('images/warning.png'); ?>" alt="" width="50" height="50">
                            <div class="listerror" id="listerror">
                                <p id="errorsub">You haven't filled out the required Subjek field</p>
                                <p id="errordet">You haven't filled out the required Detail field</p>
                                <p id="errorjur">Jurusan anda tidak sesuai dengan pilihan jurusan</p>
                            </div>
                        </div>
                    </div>
                    <div class="validasi-upload" id="validasi-upload">
                        <div class="isivalfile" id="isivalfile">
                            <img src="<?php echo base_url('images/warning.png'); ?>" alt="" width="50" height="50">
                            <p id="errorfile">You have not Uploaded any documents.</p>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="validasi-sukses" id="validasi-sukses">
                        <p>mengklik <b><i>Upload New Item</i></b> menunjukkan persetujuan Anda terhadap persyaratan ini.</p>
                    </div>
                </center>
            </div>
            <center>
                <div class="pagination-form">
                    <div style="overflow:auto;">
                        <div>
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="submit" id="submitFile">Upload New Item</button>
                            <button class="btncancel"><a href="/" style="color: white;">Cancel</a></button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</form>

<!-- modal untuk author -->
<div class="modal fade" id="authorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengarang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="nama-depan" class="col-sm-4 col-form-label">Nama Depan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama-depan" name="nama-depan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for="nama-belakang" class="col-sm-4 col-form-label">Nama Belakang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama-belakang" name="nama-belakang">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="tambahAuthor()" style="background-color: #428BCA;" id="tombolauthor" value="auth">Tambah</button>
            </div>
        </div>
    </div>
</div>
<!-- modal untuk file -->
<div class="modal fade" id="lampiranModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="lampiranModalLabel">Tambah Lampiran</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/dokumen/savelampiran" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="col-form-label" for="konten-file">Konten</label>
                        <div class="input-group">
                            <select class="custom-select" id="konten-file" name="konten-file">
                                <option selected>UNSPECIFIED</option>
                                <option value="Draft Version">Draft Version</option>
                                <option value="Submitted Version">Submitted Version</option>
                                <option value="Accepted Version">Accepted Version</option>
                                <option value="Published Version">Published Version</option>
                                <option value="Updated Version">Updated Version</option>
                                <option value="Supplemental Material">Supplemental Material</option>
                                <option value="Presentasion">Presentasion</option>
                                <option value="Cover Image">Cover Image</option>
                                <option value="Additional Metadata">Additional Metadata</option>
                                <option value="Bibliography">Bibliography</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="tipe-file">Tipe</label>
                        <div class="input-group">
                            <select class="custom-select" id="tipe-file" name="tipe-file">
                                <option selected value="Text">Text</option>
                                <option value="Spreadsheet">Spreadsheet</option>
                                <option value="Slideshow">Slideshow</option>
                                <option value="Image">Image</option>
                                <option value="Video">Video</option>
                                <option value="Audio">Audio</option>
                                <option value="Archive">Archive</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi-file" class="col-form-label">Deskripsi</label>
                        <input type="textarea" class="form-control" id="deskripsi-file" name="deskripsi-file">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="visible-file">Visible To</label>
                        <div class="input-group">
                            <select class="custom-select" id="visible-file" name="visible-file">
                                <option selected value="Anyone">Anyone</option>
                                <option value="Registered Users Only">Registered Users Only</option>
                                <option value="Repository Staff Only">Repository Staff Only</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label" for="bahasa-file">Language</label>
                        <div class="input-group">
                            <select class="custom-select" id="bahasa-file" name="bahasa-file">
                                <option selected value="English">English</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="upload-file" class="col-form-label">Upload File</label>
                        <input type="file" class="form-control" id="upload-file" name="upload-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit-modal" value="submit" id="tombolfile">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal untuk setting files -->
<?php if (!empty($files)) {
    foreach ($files as $file) : ?>
        <div class="modal fade" id="settingModal<?php echo $file['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="settingModalLabel">Settings</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="/dokumen/editlampiran" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id-file" value="<?php echo $file['id']; ?>">
                            <div class="mb-3">
                                <label class="col-form-label" for="konten-file">Konten</label>
                                <div class="input-group">
                                    <select class="custom-select" id="konten-file" name="konten-file">
                                        <option selected value="<?php echo $file['content']; ?>"><?php echo $file['content']; ?></option>
                                        <option>UNSPECIFIED</option>
                                        <option value="Draft Version">Draft Version</option>
                                        <option value="Submitted Version">Submitted Version</option>
                                        <option value="Accepted Version">Accepted Version</option>
                                        <option value="Published Version">Published Version</option>
                                        <option value="Updated Version">Updated Version</option>
                                        <option value="Supplemental Material">Supplemental Material</option>
                                        <option value="Presentasion">Presentasion</option>
                                        <option value="Cover Image">Cover Image</option>
                                        <option value="Additional Metadata">Additional Metadata</option>
                                        <option value="Bibliography">Bibliography</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="tipe-file">Tipe</label>
                                <div class="input-group">
                                    <select class="custom-select" id="tipe-file" name="tipe-file">
                                        <option selected value="<?php echo $file['type']; ?>"><?php echo $file['type']; ?></option>
                                        <option value="Text">Text</option>
                                        <option value="Spreadsheet">Spreadsheet</option>
                                        <option value="Slideshow">Slideshow</option>
                                        <option value="Image">Image</option>
                                        <option value="Video">Video</option>
                                        <option value="Audio">Audio</option>
                                        <option value="Archive">Archive</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi-file" class="col-form-label">Deskripsi</label>
                                <input type="textarea" class="form-control" id="deskripsi-file" name="deskripsi-file" value="<?php echo $file['deskripsi']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="visible-file">Visible To</label>
                                <div class="input-group">
                                    <select class="custom-select" id="visible-file" name="visible-file">
                                        <option selected value="<?php echo $file['visible']; ?>"><?php echo $file['visible']; ?></option>
                                        <option value="Anyone">Anyone</option>
                                        <option value="Registered Users Only">Registered Users Only</option>
                                        <option value="Repository Staff Only">Repository Staff Only</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="bahasa-file">Language</label>
                                <div class="input-group">
                                    <select class="custom-select" id="bahasa-file" name="bahasa-file">
                                        <option selected value="<?php echo $file['language']; ?>"><?php echo $file['language']; ?></option>
                                        <option value="English">English</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit-modal" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php endforeach;
} ?>


<?php echo $this->endSection(); ?>