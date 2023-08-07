<?php
$session = session();
echo $this->extend('template');
echo $this->section('contentuser');
?>
<form action="">
    <div class="content" style="background-color: white; height:650px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Silahkan isi formulir ini untuk langkah selanjutnya</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="progress-bar">

                    </div>
                </div>
            </div>
            <div class="tab">
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
                <div class="form-group row">
                    <label for="upload-file" class="col-sm-2 col-form-label">Upload File</label>
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="files">
                                <label class="custom-file-label" for="inputGroupFile02"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-container">
                    <div class="files-list">
                        <div class="left">
                            <p>Judul File</p>
                        </div>
                        <div class="right">
                            <a href=""><i class="fa fa-cog" aria-hidden="true"></i></i>Settings</a>
                            <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php echo $this->endSection(); ?>