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
                    <a class="nav-link active" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/user">Users</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Koleksi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/admin/fakultas">Fakultas</a>
                        <a class="dropdown-item" href="/admin/jurusan">Jurusan</a>
                        <a class="dropdown-item" href="/admin/jenis_dokumen">Jenis Dokumen</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link loginbtn" href="/login/logout">Logout</a>
                </li>
            </ul>
        </nav>

        <?php echo $this->renderSection('content'); ?>


        <!-- <footer>
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
        </footer> -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>