<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-regulasi.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">USSI-SBK<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Regulasi Koperasi dan LKM Syariah</h1>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Regulasi Koperasi dan LKM <em>Syariah</em></h2>
                    <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                </div>
            </div>
        </div>
        <div class="tab d-flex justify-content-center">
            <button class="tablinks active" onclick="openCity(event, 'Regulasi-Koperasi')">Regulasi Koperasi</button>
            <button class="tablinks" onclick="openCity(event, 'Regulasi-LKMS')">Regulasi LKMS</button>
        </div>
        <div id="Regulasi-Koperasi" class="tabcontent card" style="display: block;">
            <table id="regulasikoperasi" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Judul</th>
                        <th style="text-align: center;">Deskripsi</th>
                        <th style="text-align: center;">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($regulasi_kop as $reg_kop) : ?>
                        <tr>
                            <td><?= $reg_kop['id_regulasi_kop']; ?></td>
                            <td><?= $reg_kop['judul']; ?></td>
                            <td><?= $reg_kop['deskripsi']; ?></td>
                            <td style="text-align: center;"><a href="<?= $reg_kop['link']; ?>"><button class="btn btn-success btn-sm" type="button">details</button></a></td>
                        </tr>
                    <?php endforeach;  ?>
                </tbody>
            </table>
        </div>
        <div id="Regulasi-LKMS" class="tabcontent card">
            <table id="regulasilkms" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Judul</th>
                        <th style="text-align: center;">Deskripsi</th>
                        <th style="text-align: center;">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($regulasi_lkms as $reg_lkms) : ?>
                        <tr>
                            <td><?= $reg_lkms['id_regulasi_lkms']; ?></td>
                            <td><?= $reg_lkms['judul']; ?></td>
                            <td><?= $reg_lkms['deskripsi']; ?></td>
                            <td style="text-align: center;"><a href="<?= $reg_lkms['link']; ?>"><button class="btn btn-success btn-sm" type="button">details</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>