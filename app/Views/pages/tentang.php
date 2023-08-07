<?php echo $this->extend('template');
echo $this->section('content');
?>

<div class="content">
    <center>
        <div class="kotak-search">
            <div class="container-search">
                <div class="search-content" style="height: 110px;">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Advanced</button>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div>
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