<?php
$session = session();
$user = $session->get('user');
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href=" <?php echo base_url('css/main.css'); ?>">

        <title>e-Skripsi Unand</title>
    </head>

    <body>
        <div class="back">
            <nav style="background: #ffffff;" class="navbar">
                <div class="logo-eskripsi">
                    <img src="<?php echo base_url('images/logo-unand.png'); ?>" alt="">
                    <a class="navbar-brand" href="/"><span>e-Skripsi<br>Universitas Andalas</span></a>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Koleksi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/koleksi/jurusan">Jurusan</a>
                            <a class="dropdown-item" href="/koleksi/fakultas">Fakultas</a>
                            <a class="dropdown-item" href="/koleksi/jenis_dokumen">Jenis Dokumen</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akun
                        </a>
                        <div class="dropdown-menu dropakun" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Profil</a>
                            <a class="dropdown-item" href="">Save search</a>
                            <a class="dropdown-item" href="/user/manage/<?php echo $user['username']; ?>">Manage Deposits</a>
                            <a class="dropdown-item" href="/login/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <?php echo $this->renderSection('contentuser'); ?>

            <footer>
                <nav style="background: #ffffff; border-top:1px solid grey; height:60px;" class="navbar">
                    <ul class="nav">
                        <li>
                            <p style="padding-top: 8px;">INFORMASI:</p>
                        </li>
                        <li class="nav-item footermenu"><a class="nav-link" href="/tentang">Tentang</a></li>
                        <li class="nav-item footermenu"><a class="nav-link" href="/panduan">Panduan Website</a></li>
                        <li class="nav-item footermenu"><a class="nav-link" href="/dokumen">Latest Addition</a></li>
                        <li class="nav-item footermenu"><a class="nav-link" href="https://pustaka.unand.ac.id/index.php/berita-dan-peristiwa/item/47-prosedur-bebas-perpustakaan">Panduan Bebas Pustaka</a></li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="">Kontak Kami</a></li>
                    </ul>
                </nav>
            </footer>
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

                    <nav style="background: #ffffff;" class="navbar">
                        <div class="logo-eskripsi">
                            <img src="<?php echo base_url('images/logo-unand.png'); ?>" alt="">
                            <a class="navbar-brand" href="/"><span>e-Skripsi<br>Universitas Andalas</span></a>
                        </div>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Koleksi
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/koleksi/jurusan">Jurusan</a>
                                    <a class="dropdown-item" href="/koleksi/fakultas">Fakultas</a>
                                    <a class="dropdown-item" href="/koleksi/jenis_dokumen">Jenis Dokumen</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link loginbtn" style="color: white;" href="/login">Login</a>
                            </li>
                        </ul>
                    </nav>
                    <?php echo $this->renderSection('content'); ?>

                    <footer>
                        <nav style="background: #ffffff; border-top:1px solid grey; height:60px;" class="navbar">
                            <ul class="nav">
                                <li>
                                    <p style="padding-top: 8px;">INFORMASI:</p>
                                </li>
                                <li class="nav-item footermenu"><a class="nav-link" href="/tentang">Tentang</a></li>
                                <li class="nav-item footermenu"><a class="nav-link" href="/panduan">Panduan Website</a></li>
                                <li class="nav-item footermenu"><a class="nav-link" href="/dokumen">Latest Addition</a></li>
                                <li class="nav-item footermenu"><a class="nav-link" href="https://pustaka.unand.ac.id/index.php/berita-dan-peristiwa/item/47-prosedur-bebas-perpustakaan">Panduan Bebas Pustaka</a></li>
                            </ul>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="">Kontak Kami</a></li>
                            </ul>
                        </nav>
                    </footer>
                <?php } ?>
                </div>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <script src="<?php echo base_url('js/script.js'); ?>"></script>
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
                            <form action="/dokumen/advanced" method="post">
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="judul" name="judul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author" class="col-sm-3 col-form-label">Author</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="author" name="author">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" id="jurusan" style="width: 100%;" name="jurusan">
                                                <option value="" selected>Choose...</option>
                                                <option value="1">Agribisnis</option>
                                                <option value="2">Agroteknologi</option>
                                                <option value="12">Kedokteran</option>
                                                <option value="13">Kebidanan</option>
                                                <option value="18">Ilmu Hukum</option>
                                                <option value="19">Kimia</option>
                                                <option value="20">Biologi</option>
                                                <option value="23">Ekonomi</option>
                                                <option value="24">Manajemen</option>
                                                <option value="27">Peternakan</option>
                                                <option value="28">Sastra Indonesia</option>
                                                <option value="29">Sastra Inggris</option>
                                                <option value="33">Sosiologi</option>
                                                <option value="34">Antropologi</option>
                                                <option value="39">Teknik Mesin</option>
                                                <option value="40">Teknik Sipil</option>
                                                <option value="42">Teknik Industri</option>
                                                <option value="45">Farmasi</option>
                                                <option value="46">Teknik Pertanian dan Biosistem</option>
                                                <option value="47">Teknologi Hasil Pertanian</option>
                                                <option value="49">Keperawatan</option>
                                                <option value="50">Kesehatan Masyarakat</option>
                                                <option value="51">Gizi</option>
                                                <option value="52">Teknik Komputer</option>
                                                <option value="53">Sistem Informasi</option>
                                                <option value="55">Kedokteran Gigi</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fakultas" class="col-sm-3 col-form-label">Fakultas</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" id="fakultas" style="width: 100%;" name="fakultas">
                                                <option selected value="">Choose...</option>
                                                <option value="1">Pertanian</option>
                                                <option value="2">Kedokteran</option>
                                                <option value="3">Hukum</option>
                                                <option value="4">Matematika & Ilmu Pengetahuan Alam</option>
                                                <option value="5">Ekonomi & Bisnis</option>
                                                <option value="6">Peternakan</option>
                                                <option value="7">Ilmu Budaya</option>
                                                <option value="8">Ilmu Sosial & Ilmu Politik</option>
                                                <option value="9">Teknik</option>
                                                <option value="10">Farmasi</option>
                                                <option value="11">Teknologi Pertanian</option>
                                                <option value="12">Keperawatan</option>
                                                <option value="13">Kesehatan Masyarakat</option>
                                                <option value="14">Teknologi Informasi</option>
                                                <option value="15">Kedokteran Gigi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="subjek" class="col-sm-3 col-form-label">Subjek</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" id="subjek" style="width: 100%;" name="subjek">
                                                <option value="" selected>Choose...</option>
                                                <option value="1">General Works</option>
                                                <option value="2">Philosophy.Psychology.Religion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tahun" name="tahun">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dospem" class="col-sm-3 col-form-label">Dosen Pembimbing</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="dospem" name="dospem">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jendok" class="col-sm-3 col-form-label">Jenis Dokumen</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" id="jendok" style="width: 100%;" name="jendok">
                                                <option value="" selected>Choose...</option>
                                                <option value="1">Skripsi</option>
                                                <option value="2">Disertasi</option>
                                                <option value="3">Tesis</option>
                                                <option value="4">Jurnal</option>
                                                <option value="5">Buku</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Cari</button>
                                    <button type="button" class="btn btn-primary" onclick="this.form.reset();">Reset</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </body>

            </html>