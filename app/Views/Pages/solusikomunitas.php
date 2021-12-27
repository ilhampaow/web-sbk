<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-fatwa.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">USSI-SBK<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Solusi Komunitas</h1>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Solusi <em>Komunitas</em></h2>
                    <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                </div>
            </div>
        </div>
        <div class="tab d-flex justify-content-center">
            <button class="tablinks active" onclick="openCity(event, '<?= $komunitas[0]['slug']; ?>')"><?= $komunitas[0]['judul']; ?></button>
            <button class="tablinks" onclick="openCity(event, '<?= $komunitas[1]['slug']; ?>')"><?= $komunitas[1]['judul']; ?></button>
            <button class="tablinks" onclick="openCity(event, '<?= $komunitas[2]['slug']; ?>')"><?= $komunitas[2]['judul']; ?></button>
            <button class="tablinks" onclick="openCity(event, '<?= $komunitas[3]['slug']; ?>')"><?= $komunitas[3]['judul']; ?></button>
            <button class="tablinks" onclick="openCity(event, '<?= $komunitas[4]['slug']; ?>')"><?= $komunitas[4]['judul']; ?></button>
        </div>

        <div id="BMT-DESA" class="tabcontent card" style="display: block;">
            <!-- judul -->
            <div class="row justify-content-center text-center">
                <div class="col-md-4 justify-content-center">
                    <h3><?= $komunitas[0]['judul']; ?></h3>
                    <p><?= $komunitas[0]['sub_judul']; ?></p>
                </div>
            </div>
            <!-- carousel -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <div class="container mr-5 ml-5 mt-2 mb-5">
                        <div id="bmt-desa" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <?php foreach ($komunitas_dok_desa as $desa) : ?>
                                    <?php if ($desa['id_komunitas_dok'] == 0) { ?>
                                        <li data-target="#bmt-desa" data-slide-to="<?= $desa['id_komunitas_dok'] - 1 ?>" class="active"></li>
                                    <?php } else { ?>
                                        <li data-target="#bmt-desa" data-slide-to="<?= $desa['id_komunitas_dok'] - 1 ?>" class=""></li>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <?php foreach ($komunitas_dok_desa as $desa) : ?>
                                    <?php if ($desa['id_komunitas_dok'] == 1) { ?>
                                        <div class="carousel-item active">
                                            <img src="/Assets/images/<?= $desa['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <img src="/Assets/images/<?= $desa['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev d-flex" href="#bmt-desa" data-slide="prev" style="color: gray;">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next d-flex" href="#bmt-desa" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- artikel -->
            <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right : 20px;">
                <p><?= $komunitas[0]['artikel']; ?></p>
            </div>
        </div>
        <div id="BMT-Pesantren" class="tabcontent card">
            <!-- judul -->
            <div class="row justify-content-center text-center">
                <div class="col-md-4 justify-content-center">
                    <h3><?= $komunitas[1]['judul']; ?></h3>
                    <p><?= $komunitas[1]['sub_judul']; ?></p>
                </div>
            </div>
            <!-- carousel -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <div class="container mr-5 ml-5 mt-2 mb-5">
                        <div id="bmt-pesantren" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <?php foreach ($komunitas_dok_pesantren as $pesantren) : ?>
                                    <?php  ?>
                                    <?php if ($pesantren['id_komunitas_dok'] == 4) { ?>
                                        <li data-target="#bmt-pesantren" data-slide-to="<?= $pesantren['id_komunitas_dok'] - 4 ?>" class="active"></li>
                                    <?php } else { ?>

                                        <li data-target="#bmt-pesantren" data-slide-to="<?= $pesantren['id_komunitas_dok'] - 4 ?>" class=""></li>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                <?php foreach ($komunitas_dok_pesantren as $pesantren) : ?>
                                    <?php if ($pesantren['id_komunitas_dok'] == 4) { ?>
                                        <div class="carousel-item active">
                                            <img src="/Assets/images/<?= $pesantren['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <img src="/Assets/images/<?= $pesantren['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev d-flex" href="#bmt-pesantren" data-slide="prev" style="color: gray;">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next d-flex" href="#bmt-pesantren" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- artikel -->
            <div class="row d-flex" style="text-align: justify; padding-left: 20px;">
                <p><?= $komunitas[1]['artikel']; ?></p>
            </div>
        </div>
        <div id="BMT-Masjid" class="tabcontent card">
            <!-- judul -->
            <div class="row justify-content-center text-center">
                <div class="col-md-4 justify-content-center">
                    <h3><?= $komunitas[2]['judul']; ?></h3>
                    <p><?= $komunitas[2]['sub_judul']; ?></p>
                </div>
            </div>
            <!-- carousel -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <div class="container mr-5 ml-5 mt-2 mb-5">
                        <div id="bmt-masjid" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">

                                <?php foreach ($komunitas_dok_masjid as $masjid) : ?>
                                    <?php if ($masjid['id_komunitas_dok'] == 7) { ?>
                                        <li data-target="#bmt-masjid" data-slide-to="<?= $masjid['id_komunitas_dok'] - 7 ?>" class="active"></li>
                                    <?php } else { ?>
                                        <li data-target="#bmt-masjid" data-slide-to="<?= $masjid['id_komunitas_dok'] - 7 ?>" class=""></li>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <?php foreach ($komunitas_dok_masjid as $masjid) : ?>
                                    <?php if ($masjid['id_komunitas_dok'] == 7) { ?>
                                        <div class="carousel-item active">
                                            <img src="/Assets/images/<?= $masjid['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <img src="/Assets/images/<?= $masjid['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev d-flex" href="#bmt-masjid" data-slide="prev" style="color: gray;">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next d-flex" href="#bmt-masjid" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- artikel -->
            <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right : 20px;">
                <p><?= $komunitas[2]['artikel']; ?></p>
            </div>
        </div>
        <div id="BMT-Kampus" class="tabcontent card">
            <!-- judul -->
            <div class="row justify-content-center text-center">
                <div class="col-md-4 justify-content-center">
                    <h3><?= $komunitas[3]['judul']; ?></h3>
                    <p><?= $komunitas[3]['sub_judul']; ?></p>
                </div>
            </div>
            <!-- carousel -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <div class="container mr-5 ml-5 mt-2 mb-5">
                        <div id="bmt-masjid" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">

                                <?php foreach ($komunitas_dok_kampus as $kampus) : ?>
                                    <?php if ($kampus['id_komunitas_dok'] == 10) { ?>
                                        <li data-target="#bmt-kampus" data-slide-to="<?= $kampus['id_komunitas_dok'] - 10 ?>" class="active"></li>
                                    <?php } else { ?>
                                        <li data-target="#bmt-kampus" data-slide-to="<?= $kampus['id_komunitas_dok'] - 10 ?>" class=""></li>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <?php foreach ($komunitas_dok_kampus as $kampus) : ?>
                                    <?php if ($kampus['id_komunitas_dok'] == 10) { ?>
                                        <div class="carousel-item active">
                                            <img src="/Assets/images/<?= $kampus['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <img src="/Assets/images/<?= $kampus['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev d-flex" href="#bmt-kampus" data-slide="prev" style="color: gray;">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next d-flex" href="#bmt-kampus" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- artikel -->
            <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right : 20px;">
                <p><?= $komunitas[3]['artikel']; ?></p>
            </div>
        </div>
        <div id="BMT-Karyawan" class="tabcontent card">
            <!-- judul -->
            <div class="row justify-content-center text-center">
                <div class="col-md-4 justify-content-center">
                    <h3><?= $komunitas[4]['judul']; ?></h3>
                    <p><?= $komunitas[4]['sub_judul']; ?></p>
                </div>
            </div>
            <!-- carousel -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 d-flex justify-content-center">
                    <div class="container mr-5 ml-5 mt-2 mb-5">
                        <div id="bmt-masjid" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">

                                <?php foreach ($komunitas_dok_karyawan as $karyawan) : ?>
                                    <?php if ($karyawan['id_komunitas_dok'] == 13) { ?>
                                        <li data-target="#bmt-karyawan" data-slide-to="<?= $karyawan['id_komunitas_dok'] - 13 ?>" class="active"></li>
                                    <?php } else { ?>
                                        <li data-target="#bmt-karyawan" data-slide-to="<?= $karyawan['id_komunitas_dok'] - 13 ?>" class=""></li>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <?php foreach ($komunitas_dok_karyawan as $karyawan) : ?>
                                    <?php if ($karyawan['id_komunitas_dok'] == 13) { ?>
                                        <div class="carousel-item active">
                                            <img src="/Assets/images/<?= $karyawan['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <img src="/Assets/images/<?= $karyawan['gambar']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev d-flex" href="#bmt-karyawan" data-slide="prev" style="color: gray;">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next d-flex" href="#bmt-karyawan" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- artikel -->
            <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right : 20px;">
                <p><?= $komunitas[4]['artikel']; ?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>