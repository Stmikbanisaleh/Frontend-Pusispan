<!--=== Container Part ===-->
<div class="container margin-bottom-40 margin-top-20">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-12">
            <div>
                <?php if ($peran) { ?>
                    <h2 class="title-v4"><?= $peran['judul']; ?></h2>

                    <?= $peran['isi_halaman']; ?>
                <?php } else { ?>
                    <div class="tag-box tag-box-v2 margin-bottom-40">
                        <h4>Halaman tidak ditemukan.</h4>
                    </div>
                <?php } ?>
            </div>
        </div> <!-- End Main Content -->

    </div>
</div>
<!--=== End Container Part ===-->