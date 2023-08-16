<?php echo $this->extend('template');
echo $this->section('content');
?>

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
        <div class="content-login">
            <h2>Lupa Password</h2>
            <div class="form-login">
                <form action="">
                    <table>
                        <tbody>
                            <tr>
                                <td><label for="email_lupa">E-mail</label></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td><label for="pass_baru">Password Baru</label></td>
                                <td><input type="password"></td>
                            </tr>
                            <tr>
                                <td><label for="pass_baru1">Konfirmasi Password</label></td>
                                <td><input type="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><button class="loginbtn" style="width: 100px;">Submit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </center>
</div>

<?php echo $this->endSection(); ?>