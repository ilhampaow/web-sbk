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
<section class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Solusi <em>Digital</em></h2>
                <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
            </div>
        </div>
    </div>
</section>
<section class="services ">
    <div class="container">

        <?php $jml_digital = count($digital) ?>
        <?php for ($i = 0; 0 < $jml_digital;) { ?>
            <div class="row">
                <div class="d-flex justify-content-center  ">
                    <?php if ($i < $jml_digital) { ?>
                        <div class="col-md-4 mt-5">
                            <div class="service-item my-auto card">
                                <img class="mx-auto d-flex" src="/Assets/images/<?= $digital[$i]['gambar']; ?>" alt="">
                                <div class="down-content text-center ">
                                    <h4><?= $digital[$i]['nama_digital']; ?></h4>
                                    <a href="/Solusidigital/<?= $digital[$i++]['slug']; ?>" class="filled-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                        echo ("oke");
                        break;
                    } ?>
                    <?php if ($i < $jml_digital) { ?>
                        <div class="col-md-4 mt-5">
                            <div class="service-item my-auto card">
                                <img class="mx-auto d-flex" src="/Assets/images/<?= $digital[$i]['gambar']; ?>" alt="">
                                <div class="down-content text-center ">
                                    <h4><?= $digital[$i]['nama_digital']; ?></h4>
                                    <a href="/Solusidigital/<?= $digital[$i++]['slug']; ?>" class="filled-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                        break;
                    } ?>
                    <?php if ($i < $jml_digital) { ?>
                        <div class="col-md-4 mt-5">
                            <div class="service-item my-auto card">
                                <img class="mx-auto d-flex" src="/Assets/images/<?= $digital[$i]['gambar']; ?>" alt="">
                                <div class="down-content text-center ">
                                    <h4><?= $digital[$i]['nama_digital']; ?></h4>
                                    <a href="/Solusidigital/<?= $digital[$i++]['slug']; ?>" class="filled-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                        break;
                    } ?>
                </div>
            </div>
        <?php } ?>

    </div>
</section>
<?= $this->endSection('content'); ?>