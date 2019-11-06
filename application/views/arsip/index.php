<!--=== Container Part ===-->
<div class="container margin-bottom-40 margin-top-20">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-12">
            <h2 class="title-v4">Unduh File</h2>

            <div class="row margin-top-20">
                <div class="col-md-12">
                    <?= $start; ?>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penerbit</th>
                            <th>Penulis</th>
                            <th>Tahun</th>
                            <th>Unduh</th>
                        </tr>
                        <?php foreach ($download as $gd) { ?>
                            <tr>
                                <td><?= ++$start ?></td>
                                <td><?= $gd['judul']; ?></td>
                                <td><?= $gd['publisher']; ?></td>
                                <td><?= $gd['penulis']; ?></td>
                                <td><?= date('Y', strtotime($gd['tgl_posting'])); ?></td>
                                <td>
                                    <a href="<?= base_url() ?>assets/arsip/<?= $gd['nama_file']; ?>" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?= $this->pagination->create_links() ?>
                </div>
            </div>
            <!-- End Main Content -->
        </div>
    </div>
    <!--=== End Container Part ===-->
</div>