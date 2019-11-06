<!--=== Container Part ===-->
<div class="container margin-bottom-40">
    <div class="row">
        <!-- Main Content -->
        <!--=== Content Part ===-->
        <div class="container content">
            <div class="row">
                <h2 class="title-v4 ">Agenda</h2>
                <!-- Begin Content -->
                <div class="col-md-9 margin-top-20">
                    <ul class="timeline-v2">
                        <?php foreach ($agenda as $ag) { ?>
                            <li class="equal-height-columns">
                                <?php
                                    $harini = date('d-m-Y');
                                    $hariini = date_create($harini);
                                    $tglawal = date_create($ag['tanggal_awal']);
                                    $beda = date_diff($hariini, $tglawal);
                                    if ($hariini < $tglawal) {
                                        $selisih =  $beda->format("%a hari lagi");
                                    } else {
                                        $selisih =  $beda->format("%a hari yang lalu");
                                    }
                                    ?>
                                <div class="cbp_tmtime equal-height-column"><span><?= date('d/m/Y', strtotime($ag['tanggal_awal'])); ?></span></div>
                                <i class="cbp_tmicon rounded-x hidden-xs"></i>
                                <div class="cbp_tmlabel equal-height-column">
                                    <h2><?= $ag['nama_agenda']; ?></h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-responsive" src="<?= base_url() ?>assets/img_agenda/<?= $ag['foto']; ?>" alt="">
                                            <div class="md-margin-bottom-20"></div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-primary"><?= $ag['keterangan']; ?></h6>
                                            <h4 class="text-primary">
                                                <?php if ($ag['tanggal_awal'] != $ag['tanggal_akhir']) { ?>
                                                    <?= date('d/m/Y', strtotime($ag['tanggal_awal'])); ?> - <?= date('d/m/Y', strtotime($ag['tanggal_akhir'])); ?>
                                                <?php  } else { ?>
                                                    <?= date('d/m/Y', strtotime($ag['tanggal_awal'])); ?>
                                                <?php  }  ?>
                                            </h4>
                                            <h5><?= $selisih; ?></h5>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <?= $this->pagination->create_links() ?>
                </div>
                <!-- End Content -->
            </div>
        </div>
        <!--/container-->
        <!-- End Main Content -->

    </div>
</div>
<!--=== End Container Part ===-->