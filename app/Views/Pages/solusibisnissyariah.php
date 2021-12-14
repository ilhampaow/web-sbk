<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-solusibisnissyariah.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">USSI-SBK<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Solusi Bisnis Syariah</h1>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row justify-content-center align-items-stretch">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-stretch">
                <div class="icon-box icon-box-green">
                    <table>
                        <tr>
                            <h4 class="title"><a href="<?= base_url('/'); ?>">Diklat BMT, Koperasi, dan LKM Syariah</a></h4>
                        </tr>
                        <tr>
                            <img src=" <?= base_url('Assets/images/diklat.png'); ?>" class="rounded mx-auto d-block" alt="..." style="height: 115px; width: 100;">
                        </tr>
                        <tr>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </tr>
                    </table>
                    <!-- <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch">
                        <h4 class="title"><a href="<?= base_url('/'); ?>">Diklat BMT, Koperasi, dan LKM Syariah</a></h4>
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch" style="padding-top: 10px;">
                        <img src=" <?= base_url('Assets/images/diklat.png'); ?>" class="rounded mx-auto d-block" alt="..." style="height: 115px; width: 100px;">
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch maksimum" style="padding-top: 25px;">
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-stretch">
                <div class="icon-box icon-box-green">
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch">
                        <h4 class="title"><a href="<?= base_url('/'); ?>">Regulasi Koperasi dan LKM Syariah</a></h4>
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch" style="padding-top: 10px;">
                        <img src=" <?= base_url('Assets/images/regulasi.png'); ?>" class="rounded mx-auto d-block" alt="..." style="height: 115px; width: 100px;">
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch" style="padding-top: 25px;">
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-stretch">
                <div class="icon-box icon-box-green">
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch">
                        <h4 class="title"><a href="<?= base_url('/'); ?>">Fatwa DSN MUI</a></h4>
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch" style="padding-top: 10px;">
                        <img src=" <?= base_url('Assets/images/fatwa.png'); ?>" class="rounded mx-auto d-block" alt="..." style="height: 115px; width: 100px;">
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex justify-content-center align-items-stretch" style="padding-top: 25px;">
                        <p class=" description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Services Section -->
<?= $this->endSection('content'); ?>