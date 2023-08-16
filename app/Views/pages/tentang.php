<?php echo $this->extend('template'); ?>
<?php echo $this->section('content'); ?>
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
        <div class="content-panduan">
            <h4>Tentang Repository</h4>
            <div class="isi-content-panduan">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam autem veniam distinctio repellat illo, soluta tempora dignissimos. Deserunt perspiciatis doloribus voluptatibus, quasi illo quidem ducimus, exercitationem iusto, iure adipisci eos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia repellendus atque optio animi dolorem ex eligendi amet tenetur et hic! Ut qui magni eveniet ab obcaecati sunt, reiciendis quo. Voluptatem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum laboriosam vel nam doloribus repellat cupiditate nobis facere! Voluptatibus labore, fugit consequuntur facere porro, hic magni ducimus, laudantium deserunt sed numquam.</p>
            </div>
        </div>
    </center>
</div>
<?php echo $this->endSection(); ?>
<?php echo $this->section('contentuser'); ?>
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
        <div class="content-panduan">
            <h4>Tentang Repository</h4>
            <div class="isi-content-panduan">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam autem veniam distinctio repellat illo, soluta tempora dignissimos. Deserunt perspiciatis doloribus voluptatibus, quasi illo quidem ducimus, exercitationem iusto, iure adipisci eos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia repellendus atque optio animi dolorem ex eligendi amet tenetur et hic! Ut qui magni eveniet ab obcaecati sunt, reiciendis quo. Voluptatem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum laboriosam vel nam doloribus repellat cupiditate nobis facere! Voluptatibus labore, fugit consequuntur facere porro, hic magni ducimus, laudantium deserunt sed numquam.</p>
            </div>
        </div>
    </center>
</div>
<?php echo $this->endSection(); ?>