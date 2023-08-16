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
            <h2>LOGIN</h2>
            <div class="form-login">
                <form action="/login/doLogin" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td><label for="username">Username</label></td>
                                <td><input type="text" id="username" name="username"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td><input type="password" id="password" name="password"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="user/lupa_pass">Lupa Password?</a></td>
                            </tr>
                            <tr>
                                <td colspan="2"><button class="loginbtn" style="width: 85px; padding:3px 10px;">Login</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </center>
</div>



<?php echo $this->endSection(); ?>