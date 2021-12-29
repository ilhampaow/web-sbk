<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-digital.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">USSI-SBK<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Solusi Digital</h1>
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
            <?php foreach ($digital_produk as $digital) : ?>
                <?php if ($digital['id_digital_produk'] == 1) { ?>
                    <button class="tablinks active ambilDataIdDigital" onclick="openCity(event, '<?= $digital['id_digital_produk']; ?>')"><?= $digital['digital_produk'] ?></button>
                <?php } else { ?>
                    <button class="tablinks ambilDataIdDigital" onclick="openCity(event, '<?= $digital['id_digital_produk']; ?>')"><?= $digital['digital_produk'] ?></button>
                <?php } ?>
            <?php endforeach; ?>
        </div>
        <?php $a = 1  ?>
        <?php foreach ($digital_produk as $digital) : ?>

            <?php if ($digital['id_digital_produk'] == 1) { ?>
                <div id="<?= $digital['id_digital_produk']; ?>" class="tabcontent card" style="display: block;">
                    <!-- judul -->
                    <div class="row justify-content-center text-center">
                        <div class="col-md-4 justify-content-center">
                            <h3><?= $digital['digital_produk']; ?></h3>
                        </div>
                    </div>
                    <!-- carousel -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 d-flex justify-content-center">
                            <div class="container mr-5 ml-5 mt-2 mb-5">
                                <div id="<?= $digital['id_digital_produk']; ?>" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <?php $peng_index_1 = 1 ?>
                                        <?php foreach ($digital_produk_dok as $produk_dok) : ?>
                                            <?php if ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) { ?>
                                                <?php if ($produk_dok['id_digital_produk_dok'] == $peng_index_1) { ?>
                                                    <li data-target="#<?= $produk_dok['id_digital_produk']; ?>" data-slide-to="<?= $produk_dok['id_digital_produk_dok'] - $a ?>" class="active"></li>
                                                <?php } else { ?>
                                                    <li data-target="#<?= $produk_dok['id_digital_produk']; ?>" data-slide-to="<?= $produk_dok['id_digital_produk_dok'] - $a ?>" class=""></li>
                                                <?php } ?>
                                            <?php } else {
                                                break;
                                            } ?>
                                        <?php endforeach; ?>
                                        <?php $peng_index_1++ ?>

                                    </ul>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <?php $peng_index_2 = 1 ?>
                                        <?php foreach ($digital_produk_dok as $produk_dok) : ?>

                                            <?php if ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) { ?>
                                                <?php if ($produk_dok['id_digital_produk_dok'] == $peng_index_2) { ?>
                                                    <div class="carousel-item active">
                                                        <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="carousel-item">
                                                        <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                                    </div>
                                                <?php } ?>
                                            <?php } else {
                                                echo ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']);
                                                break;
                                            } ?>

                                            <?php ?>
                                        <?php endforeach; ?>
                                        <?php $peng_index_2++ ?>
                                    </div>
                                    <?php echo ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) ?>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev d-flex" href="#<?= $digital['id_digital_produk']; ?>" data-slide="prev" style="color: gray;">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next d-flex" href="#<?= $digital['id_digital_produk']; ?>" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- artikel -->
                    <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right : 20px;">
                        <p><?= $digital['artikel']; ?></p>
                    </div>
                </div>
                <?php $a = $peng_index_1++ ?>
            <?php } else { ?>
                <div id="<?= $digital['id_digital_produk']; ?>" class="tabcontent card" style="display: noene;">
                    <!-- judul -->
                    <div class="row justify-content-center text-center">
                        <div class="col-md-4 justify-content-center">
                            <h3><?= $digital['digital_produk']; ?></h3>
                        </div>
                    </div>
                    <!-- carousel -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 d-flex justify-content-center">
                            <div class="container mr-5 ml-5 mt-2 mb-5">
                                <div id="<?= $digital['id_digital_produk']; ?>" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <?php $peng_index_2 = 1 ?>
                                        <?php foreach ($digital_produk_dok as $produk_dok) : ?>
                                            <?php if ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) { ?>
                                                <?php if ($produk_dok['id_digital_produk_dok'] == $peng_index_2) { ?>
                                                    <div class="carousel-item active">
                                                        <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="carousel-item">
                                                        <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" class="d-block ml-auto mr-auto" alt="..." style="width : 100%">
                                                    </div>
                                                <?php } ?>
                                            <?php } else {
                                                exit;
                                            } ?>
                                            <?php $peng_index_2++ ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev d-flex" href="#<?= $digital['id_digital_produk']; ?>" data-slide="prev" style="color: gray;">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next d-flex" href="#<?= $digital['id_digital_produk']; ?>" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- artikel -->
                    <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right : 20px;">
                        <p><?= $digital['artikel']; ?></p>
                    </div>
                </div>
                <?php $a = $peng_index_1++ ?>
            <?php } ?>
        <?php endforeach; ?>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>