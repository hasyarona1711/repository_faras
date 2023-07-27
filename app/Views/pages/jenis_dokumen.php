<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>

<center>
    <div class="search-content">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Advanced</button>
            </div>
        </div>
        <button class="btn btn-outline-secondary" type="button">Cari</button>
    </div>
    <div class="content">
        <div class="content-table">
            <h4>Daftar Jenis Dokumen</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis_dokumen</th>
                        <th scope="col">Jumlah Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Skripsi</td>
                        <td>0 Dokumen</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</center>
<?php echo $this->endSection(); ?>