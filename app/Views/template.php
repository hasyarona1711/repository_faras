<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=" <?php echo base_url('css/main.css'); ?>">

    <title>e-Skripsi Unand</title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">e-Skripsi<br>Universitas Andalas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav> -->
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
                    <a class="nav-link loginbtn" href="/user">Login</a>
                </li>
            </ul>
        </nav>

        <?php echo $this->renderSection('content'); ?>


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
                        <form action="">
                            <table>
                                <tr>
                                    <td><label for="judul">Judul</label></td>
                                    <td><input type="text" id="judul"></td>
                                </tr>
                                <tr>
                                    <td><label for="author">Author</label></td>
                                    <td><input type="text" id="author"></td>
                                </tr>
                                <tr>
                                    <td><label for="jurusan">Jurusan</label></td>
                                    <td><input type="text" id="jurusan"></td>
                                </tr>
                                <tr>
                                    <td><label for="fakultas">Fakultas</label></td>
                                    <td>
                                        <select name="fakultas" id="fakultas">
                                            <option value="">Teknik</option>
                                            <option value="">Pertanian</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="subjek">Subjek</label></td>
                                    <td><input type="text" id="subjek"></td>
                                </tr>
                                <tr>
                                    <td><label for="tahun">Tahun</label></td>
                                    <td><input type="text" id="tahun"></td>
                                </tr>
                                <tr>
                                    <td><label for="dospem">Dosen Pembimbing</label></td>
                                    <td><input type="text" id="dospem"></td>
                                </tr>
                                <tr>
                                    <td><label for="jendok">Jenis Dokumen</label></td>
                                    <td>
                                        <select name="jendok" id="jendok">
                                            <option value="">Skripsi</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
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