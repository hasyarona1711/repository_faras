<?php
$session = session();
echo $this->extend('template');
echo $this->section('contentuser');
?>
<center>
    <div class="content">
        <div class="kotak-search">
            <div class="search-content" style="height: 110px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control searchbar" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btnadvanced" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                    </div>
                </div>
                <button class="btn btncari" type="button">Cari</button>
            </div>
        </div>

        <div class="content-table tablemanage" style="width: 1000px;">
            <h5><b>Manage Deposits</b></h5>
            <table class="table table-striped tablemanage">
                <thead>
                    <tr>
                        <th scope="col">Terakhir Diubah</th>
                        <th scope="col">Author</th>
                        <th scope="col">Tipe Item</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokumen as $d) : ?>
                        <tr>
                            <td><?php echo $d['updated_at']; ?></td>
                            <td><?php echo $d['penulis'] ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['judul']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td class="aksi-manage">
                                <a href="/dokumen/detail/<?php echo $d['id']; ?>" class="btnlihat" style="color:white;"><i class="fa fa-eye" aria-hidden="true"></i>Lihat</a>
                                <a href="/dokumen/edit/<?php echo $d['id']; ?>" class="btnedit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                <a href="/dokumen/delete/<?php echo $d['id']; ?>" class="btndelete" style="color:white;" onclick="return confirm('apakah anda yakin?');"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</center>

<?php echo $this->endSection(); ?>