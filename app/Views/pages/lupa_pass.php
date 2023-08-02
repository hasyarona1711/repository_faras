<?php echo $this->extend('template');
echo $this->section('content');
?>

<div class="content">
    <center>
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
                                <td colspan="2"><button style="border-radius: 10px; width:100px;">Submit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </center>
</div>

<?php echo $this->endSection(); ?>