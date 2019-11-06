<!-- Four Columns -->
<div class="container content">
    <div class="margin-bottom-20">
        <h2 class="title-v4">GALERI</h2>
    </div>

    <div class="row  margin-bottom-30 margin-top-20">
        <?php foreach ($galeri as $gal) { ?>
            <div class="col-md-4 md-margin-bottom-30 margin-top-20">
                <a href="<?= base_url() ?>assets/img_album/<?= $gal['gambar']; ?>" rel="gallery2" class="fancybox img-hover-v1" title="<?= $gal['keterangan']; ?>">
                    <span><img width="360px" height="240px" src="<?= base_url() ?>assets/img_album/<?= $gal['gambar']; ?>" alt=""></span>
                </a>
            </div>
        <?php } ?>
    </div>
    <?= $this->pagination->create_links() ?>

</div>
<!-- End Four Columns -->