<?php
$session = session();
echo $this->extend('template');
echo $this->section('contentuser');
?>

<div class="content" tyle="background-color: white;">
    <div class="title-upload">
        <center>
            <h6><?php echo $judul; ?></h6>
        </center>
    </div>
    <center>
        <div class="berhasil">
            <p>Item Berhasil di Deposit</p><i class="fa fa-check-circle-o" aria-hidden="true"></i>
        </div>
    </center>
    <div class="container-preview">
        <div class="button-preview">
            <button id="preview-button" onclick="previewButton()">Preview</button>
            <button id="details-button" onclick="detailButton()">Details</button>
        </div>
        <div class="content-preview" id="content-preview">
            <p>ini adalah hasil preview</p>
        </div>
        <div class="content-detail" id="content-detail">
            <p>ini adalah hasil details</p>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>