<?php
$session = session();
if ($session->get('isLogin')) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href=" <?php echo base_url('css/main.css'); ?>">

        <title>e-Skripsi Unand</title>
    </head>

    <body>
        <div class="back">

            <nav style="background: #C6C6C6;" class="navbar">
                <a style="color:#000;" class="navbar-brand" href="/">e-Skripsi<br>Universitas Andalas</a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Koleksi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/koleksi/fakultas">Fakultas</a>
                            <a class="dropdown-item" href="/koleksi/jurusan">Jurusan</a>
                            <a class="dropdown-item" href="/koleksi/jenis_dokumen">Jenis Dokumen</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akun
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Profil</a>
                            <a class="dropdown-item" href="">Save search</a>
                            <a class="dropdown-item" href="">Manage Deposits</a>
                            <a class="dropdown-item" href="/login/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <?php echo $this->renderSection('contentuser'); ?>
        <?php } else { ?>
            <!doctype html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
                <link rel="stylesheet" href=" <?php echo base_url('css/main.css'); ?>">

                <title>e-Skripsi Unand</title>
            </head>

            <body>
                <div class="back">

                    <nav style="background: #C6C6C6;" class="navbar">
                        <a style="color:#000;" class="navbar-brand" href="/">e-Skripsi<br>Universitas Andalas</a>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Koleksi
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/koleksi/fakultas">Fakultas</a>
                                    <a class="dropdown-item" href="/koleksi/jurusan">Jurusan</a>
                                    <a class="dropdown-item" href="/koleksi/jenis_dokumen">Jenis Dokumen</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link loginbtn" href="/login">Login</a>
                            </li>
                        </ul>
                    </nav>
                    <?php echo $this->renderSection('content'); ?>
                <?php } ?>


                <footer>
                    <nav style="background: #C6C6C6; border-top:1px solid black" class="navbar">
                        <ul class="nav">
                            <li>
                                <p style="padding-top: 8px;">INFORMASI:</p>
                            </li>
                            <li class="nav-item footermenu"><a class="nav-link" href="/tentang">Tentang</a></li>
                            <li class="nav-item footermenu"><a class="nav-link" href="/panduan">Panduan Website</a></li>
                            <li class="nav-item footermenu"><a class="nav-link" href="">Latest Addition</a></li>
                            <li class="nav-item footermenu"><a class="nav-link" href="https://pustaka.unand.ac.id/index.php/berita-dan-peristiwa/item/47-prosedur-bebas-perpustakaan">Panduan Bebas Pustaka</a></li>
                        </ul>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="">Kontak Kami</a></li>
                        </ul>
                    </nav>
                </footer>
                </div>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Advanced Search</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <center>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="judul" name="judul">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="author" name="author">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group mb-3">
                                                <label for="jurusan" class="col-form-label">Jurusan</label>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group mb-3">
                                                <label for="fakultas" class="col-form-label">Fakultas</label>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group mb-3">
                                                <label for="subjek" class="col-form-label">Subjek</label>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="author">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dospem" class="col-sm-2 col-form-label">Dosen Pembimbing</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="author">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jendok" class="col-sm-2 col-form-label">Jenis Dokumen</label>
                                            <div class="input-group mb-3">
                                                <label for="jurusan" class="col-form-label">Jurusan</label>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </center>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Cari</button>
                                <button type="button" class="btn btn-primary">Reset</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

            </html>