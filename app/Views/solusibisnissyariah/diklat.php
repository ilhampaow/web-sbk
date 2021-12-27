<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('/Assets/images/bg-diklat.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Services</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php
                $jml_pernyataan = count($id_pernyataan);
                for ($i = 0; $i < $jml_pernyataan; $i = $i + 3) {
                    if ($i == 0) {
                ?>
                        <li data-target="#demo" data-slide-to="<?= $a = $i / 3 ?>" class="active"></li>
                    <?php } else { ?>
                        <li data-target="#demo" data-slide-to="<?= $a = $i / 3 ?>" class=""></li>
                    <?php } ?>
                <?php } ?>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php
                for ($i = 0; $i < $jml_pernyataan;) {
                    $jml_field = count($pernyataan[$i]);
                    if ($pernyataan[$i]['id_pernyataan'] == 1) { ?>
                        <div class="carousel-item active">
                            <?php for ($j = 0; $j < $jml_field; $j++) {
                            ?>
                                <div class="col-md-4 services align-self-stretch ">
                                    <div class="d-block card justify-content-center">
                                        <div class="media-body">
                                            <h3 class="heading">Ke - <?= $pernyataan[$i]['id_pernyataan'] ?></h3>
                                            <p><?= $pernyataan[$i]['pernyataan'] ?></p>
                                            <p><?= $pernyataan[$i++]['sumber'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <?php for ($j = 0; $j < $jml_field; $j++) {
                            ?>
                                <div class="col-md-4 services align-self-stretch ">
                                    <div class="d-block card justify-content-center">
                                        <div class="media-body">
                                            <h3 class="heading">Ke - <?= $pernyataan[$i]['id_pernyataan'] ?></h3>
                                            <p><?= $pernyataan[$i]['pernyataan'] ?></p>
                                            <p><?= $pernyataan[$i++]['sumber'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev d-flex" href="#demo" data-slide="prev" style="color: gray;">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next d-flex" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="single-services">
        <div class="container">
            <div class="row" id="tabs">
                <div class="col-md-4">
                    <ul>
                        <?php $i = 1; ?>
                        <?php foreach ($diklat as $d) : ?>
                            <li><a href='#tabs-<?= $i++ ?>'><?= $d['produk']; ?><i class="fa fa-angle-right"></i></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-8">
                    <section class='tabs-content'>
                        <?php $i = 1; ?>
                        <?php foreach ($diklat as $d) : ?>
                            <article id="tabs-<?= $i ?>">
                                <?php $id_diklat = $d['id_diklat'] ?>
                                <?php $dokumentasi = $dok_diklat->where([
                                    'diklat_source_id' => $id_diklat
                                ])->findAll() ?>
                                <div id="myCarousel-<?= $i ?>" class="carousel slide d-flex justify-content-center" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $a = 1; ?>
                                        <?php foreach ($dokumentasi as $dok) : ?>
                                            <?php if ($a == 1) { ?>
                                                <div class="item active">
                                                    <img src="/Assets/images/<?= $dok['gambar']; ?>" class="d-block" alt="...">
                                                </div>
                                            <?php } else { ?>
                                                <div class="item">
                                                    <img src="/Assets/images/<?= $dok['gambar']; ?>" class="d-block" alt="...">
                                                </div>
                                            <?php } ?>
                                            <?php $a++; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel-<?= $i ?>" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel-<?= $i++ ?>" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <h4><?= $d['produk'] ?></h4>
                                <p><?= $d['deskripsi'] ?></p>
                            </article>
                        <?php endforeach; ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>
<?= $this->endSection('content'); ?>