<?php
$session = session();
echo $this->extend('template');
echo $this->section('contentuser');
$user = $session->get('user');
$jenjang = $session->get('jenjang');

?>

<div class="content" style="background-color: white;">
    <div class="container-upload">
        <center>
            <div class="title-upload">
                <h4>Silahkan isi formulir ini untuk langkah selanjutnya</h4>
            </div>
            <div class="progress-step">
                <p>disini progress step bar</p>
            </div>
        </center>
        <div class="tab">
            <div class="form-tipe">
                <form action="/dokumen/saveFile" method="post">
                    <div class="form-group row">
                        <label for="tipe-item" class="col-sm-2 col-form-label">Tipe Item</label>
                        <div class="col-sm-3">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="tipe-item">
                                <?php foreach ($tipeitem as $tipe) : ?>
                                    <option value="<?php echo $tipe['id']; ?>"><?php echo $tipe['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="form-group row">
                    <label for="upload-file" class="col-sm-2 col-form-label">Upload File</label>
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">
                                Tambah Lampiran
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="file-container" style="min-width: 750px;">
                <?php
                // if (isset($_POST['submit-modal' . $n])) {
                //     $filename = $_FILES['upload' . $n]['name'];
                //     $filesize = $_FILES['upload' . $n]['size'];

                //     $uploaded[$n] = array(
                //         'kontenFile' => $_POST['konten-file' . $n],
                //         'tipeFile' => $_POST['tipe-file' . $n],
                //         'deskripsiFile' => $_POST['deskripsi-file' . $n],
                //         'visibleFile' => $_POST['visible-file' . $n],
                //         'bahasaFile' => $_POST['bahasa-file' . $n],
                //         'uploadName' => $filename,
                //         'uploadSize' => $filesize
                //     );
                //     $n++;
                // }
                ?>


            </div>
        </div>
        <div class="tab">
            <div class="row mb-3">
                <label for="author" class="col-sm-2 col-form-label">Author</label>
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
                    <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Pengarang</button>
                </div>
                <!-- button buat nambah author -->
            </div>
            <div class="row mb-3">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <!-- ambil dari session -->
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $user['nim']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
            </div>
            <div class="row mb-3">
                <label for="abstrak" class="col-sm-2 col-form-label">Abstrak</label>
                <div class="col-sm-7">
                    <input type="textarea" class="form-control" id="abstrak" name="abstrak">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenjang" class="col-sm-2 col-form-label">Jenjang</label>
                <!-- ambil dari database -->
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="jenjang" name="jenjang" value="<?php echo $jenjang; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="fakultas" name="fakultas">
                </div>
                <label for="jurusan" class="col-sm-1 col-form-label">Jurusan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="dospem" class="col-sm-2 col-form-label">Dosen Pembimbing</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="dospem" name="dospem">
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-7">
                    <select id="status" class="custom-select mr-sm-2" name="status">
                        <option selected>Choose...</option>
                        <option value="published">Published</option>
                        <option value="in-press">In Press</option>
                        <option value="submitted">Submitted</option>
                        <option value="unpublished">Unpublished</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tgl_publikasi" class="col-sm-2 col-form-label">Tanggal Publikasi</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_publikasi" name="tgl_publikasi">
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
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <!-- ambil dari session -->
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                </div>
            </div>
        </div>
        <div class="tab">
            <center>
                <h5 class="mb-3"><b>Subjek</b></h5>
                <select class="custom-select mr-sm-2" aria-label="Default select example" id="selectsubjek">
                    <!-- ambil dari database -->
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </center>
        </div>
        <div class="tab">
            <h1>validasi</h1>
        </div>
        <center>
            <div class="pagination-form">
                <div style="overflow:auto;">
                    <div>
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="submitFile">Upload New Item</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>


<!-- modal untuk upload -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Lampiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dokumen/saveFile" method="post" enctype="multipart/form-data">
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
                        <label for="upload-file" class="col-form-label">Upload</label>
                        <input type="file" class="form-control" id="upload-file" name="upload">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit-modal<?php echo $n; ?>">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
// if (isset($_POST['submit-modal'])) {
//     $uploaded[$n] = array(
//         'tipeItem' => $_POST['tipe-item' . $n],
//         'kontenItem' => $_POST['konten-file' . $n],
//         'tipeFile' => $_POST['tipe-file' . $n],
//         'deskripsiFile' => $_POST['deskripsi-file' . $n],
//         'visibleFile' => $_POST['visible-file' . $n],
//         'bahasaFile' => $_POST['bahasa-file' . $n],
//         'uploadFile' => $_POST['upload-file' . $n]
//     );
//     $n++;
//     dd($uploaded);
// } 
?>
<?php echo $this->endSection(); ?>