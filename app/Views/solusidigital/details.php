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
                    <h2><em>Solusi Digital</em></h2>
                    <h4>

                        <b><?= $digital_dok[0]['nama_digital']; ?></b>
                    </h4>

                    <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                </div>
            </div>
        </div>

        <nav class="nav nav-pills nav-fill d-flex justify-content-center my-auto ">
            <?php foreach ($digital_produk as $digital) :  ?>
                <button class="col-md-4 card nav-link tablinks ambilDataIdDigital" onclick="openCity(event, '<?= $digital['id_digital_produk']; ?>')">
                    <a class="my-auto mx-auto"><b><?= $digital['digital_produk']; ?></b></a>
                </button>
            <?php endforeach; ?>

        </nav>

        <?php foreach ($digital_produk as $digital) : ?>
            <div id="<?= $digital['id_digital_produk']; ?>" class="tabcontent card">
                <!-- judul -->
                <div class="row justify-content-center text-center">
                    <div class="col-md-4 justify-content-center">
                        <h3><b><?= $digital['digital_produk']; ?></b></h3>
                    </div>
                </div>
                <!-- slider -->
                <div class="d-flex justify-content-center">
                    <div class="col-md-2">
                        <a class="carousel-control" href="#<?= $digital['id_digital_produk']; ?>-<?= $digital['slug']; ?>" data-slide="prev" style="left: 50%;">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <div id="<?= $digital['id_digital_produk']; ?>-<?= $digital['slug']; ?>" class="carousel slide justify-content-center col-md-8" data-ride="carousel">
                        <!-- Indicators -->
                        <?php $a = 0; ?>
                        <ol class="carousel-indicators">
                            <?php foreach ($digital_produk_dok as $produk_dok) : ?>
                                <?php if ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) { ?>
                                    <?php if ($a == 0) { ?>
                                        <li data-target="#<?= $digital['id_digital_produk']; ?>-<?= $digital['slug']; ?>" data-slide-to="<?= $produk_dok['id_digital_produk_dok']; ?>" class="active"></li>
                                        <?php $a++; ?>
                                    <?php } else { ?>
                                        <li data-target="#<?= $digital['id_digital_produk']; ?>-<?= $digital['slug']; ?>" data-slide-to="<?= $produk_dok['id_digital_produk_dok']; ?>"></li>
                                    <?php } ?>
                                <?php } else if ($produk_dok['source_id_digital_produk'] > $digital['id_digital_produk']) {
                                    break;
                                } else {
                                } ?>
                            <?php endforeach; ?>
                        </ol>
                        <!-- Wrapper for slides -->
                        <?php $b = 0; ?>
                        <div class="carousel-inner">
                            <?php foreach ($digital_produk_dok as $produk_dok) : ?>
                                <?php if ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) { ?>
                                    <?php if ($b == 0) { ?>
                                        <div class="item active">
                                            <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" alt="<?= $produk_dok['gambar_produk_dok']; ?>" style="width:100%;">
                                        </div>
                                        <?php $b++; ?>
                                    <?php } else { ?>
                                        <div class="item">
                                            <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" alt="<?= $produk_dok['gambar_produk_dok']; ?>" style="width:100%;">
                                        </div>
                                    <?php } ?>
                                <?php } else if ($produk_dok['source_id_digital_produk'] > $digital['id_digital_produk']) {
                                    break;
                                } else {
                                } ?>
                            <?php endforeach; ?>
                        </div>
                        <!-- Left and right controls -->

                    </div>
                    <div class="col-md-2">
                        <a class="carousel-control" href="#<?= $digital['id_digital_produk']; ?>-<?= $digital['slug']; ?>" data-slide="next" style="left: 50%;">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br>
                <!-- artikel -->
                <div class="row d-flex" style="text-align: justify; padding-left: 20px; padding-right: 20px;">
                    <p><?= $digital['artikel']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>