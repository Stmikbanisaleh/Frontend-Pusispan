<!--=== Container Part ===-->
<div class="container margin-bottom-40">
    <div class="row margin-top-20">
        <div class="col-md-3">
            <!-- Blog Thumb v3 -->
            <div>
                <h2 class="title-v4">Agenda</h2>
                <?php foreach ($agenda as $ag) : ?>
                    <div class="blog-thumb-v3">
                        <small><?= date('d-m-Y', strtotime($ag['tanggal_awal'])); ?></small>
                        <h3><a href="<?= base_url('agenda'); ?>"><?= $ag['nama_agenda']; ?></a></h3>

                    </div>
                    <hr class="hr-xs">
                <?php endforeach; ?>
                <div class="text-right">
                    <a href="<?= base_url('agenda'); ?>">Lihat Selengkapnya</a>
                </div>
            </div>
            <!-- End Blog Thumb v3 -->

            <div>
                <h2 class="title-v4">Program</h2>
                <p>Pengembangan standar penerbangan dan antariksa merupakan tahapan standardisasi yang
                    terdiri dari penyusunan rancangan standar, perumusan serta penetapan standar yang dilaksanakan oleh
                    Pusat Teknologi Informasi dan Standar Penerbangan dan Antariksa.</p>
            </div>

        </div>

        <!-- Slider -->
        <div class="col-md-6">
            <h2 class="title-v4">Kegiatan</h2>
            <div id="myCarousel" class="carousel slide carousel-v1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img_kegiatan/<?= $kmt['gambar']; ?>" alt="">
                        <div class="carousel-caption">
                            <p><?= $kmt['nama_kegiatan']; ?></p>
                            <p><?= $kmt['tempat']; ?> , <?= date('d-m-Y', strtotime($kmt['tanggal'])); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img_kegiatan/<?= $kat['gambar']; ?>" alt="">
                        <div class="carousel-caption">
                            <p><?= $kat['nama_kegiatan']; ?></p>
                            <p><?= $kat['tempat']; ?> , <?= date('d-m-Y', strtotime($kat['tanggal'])); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img_kegiatan/<?= $kst['gambar']; ?>" alt="">
                        <div class="carousel-caption">
                            <p><?= $kst['nama_kegiatan']; ?></p>
                            <p><?= $kst['tempat']; ?> , <?= date('d-m-Y', strtotime($kst['tanggal'])); ?></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control" href="#myCarousel" data-slide="next">
                        tes
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        tes
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <h2 class="title-v4">Berita Terbaru</h2>
            <?php foreach ($berita as $br) : ?>
                <div class="blog-thumb-v3">
                    <small><?= date('d-m-Y', strtotime($br['tanggal'])); ?></small>
                    <h3>
                        <?php if ($br['judul_seo']) { ?>
                            <a href="<?= base_url() ?>berita/read/<?= $br['judul_seo'] ?>"><?= $br['judul']; ?></a>
                        <?php } else { ?>
                            <a href="<?= base_url() ?>"><?= $br['judul']; ?></a>
                        <?php } ?>
                    </h3>
                </div>
                <hr class="hr-xs">
            <?php endforeach; ?>
            <a href="<?= base_url('berita'); ?>">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="row-lg-12 margin-top-20">
        <div class="col-md-4 text-center margin-top-20">
            <div class="margin-bottom-10" style="display: flex; justify-content: center; ">
                <a href="<?= base_url('ip-man') ?>">
                    <img style="height:120px; width:120px;" src="assets/img/logo/logolapan.png">
                </a>
            </div>
            <a href="<?= base_url('ip-man') ?>">
                <h2 class="title-v4">IP-MAN</h2>
            </a>
            <b>Sistem Informasi Kekayaan Intelektual</b>
            <hr class="hr-xs">
            <div class="text-left">
                <li>Pengelolaan Kekayaan Intelektual</li>
                <li>Valuasi Aset Tak Berwujud</li>
                <li>Tingkat Kesiapterapan Teknologi</li>
            </div>
        </div>
        <div class="col-md-4 text-center margin-top-20">
            <div class="margin-bottom-10" style="display: flex; justify-content: center; ">
                <a href="<?= base_url('sispan') ?>">
                    <img style="height:120px; width:120px;" src="assets/img/logo/logostd.png">
                </a>
            </div>
            <a href="<?= base_url('sispan') ?>">
                <h2 class="title-v4">SISPAN</h2>
            </a>
            <b>Sistem Informasi Standar Penerbangan dan Antariksa</b>
            <hr class="hr-xs">
            <div class="text-left">
                <li>Permusan Standar</li>
                <li>Sertifikasi dan Akreditasi</li>
            </div>
        </div>
        <div class="col-md-4 text-center margin-top-20">
            <div class="margin-bottom-10" style="display: flex; justify-content: center; ">
                <a href="<?= base_url('silat') ?>">
                    <img style="height:120px; width:120px;" src="assets/img/logo/logolapan.png">
                </a>
            </div>
            <a href="<?= base_url('silat') ?>">
                <h2 class="title-v4">SILAT</h2>
            </a>
            <b>Sistem Informasi Layanan Alih Teknologi</b>
            <hr class="hr-xs">
            <div class="text-left">
                <li>Valuasi Teknologi</li>
                <li>Temu Bisnis</li>
                <li>Inkubasi</li>
                <li>Perjanjian Lisensi</li>
            </div>
        </div>
    </div>
</div>
<!--=== End Container Part ===-->