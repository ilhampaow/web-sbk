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
                        <b><?= $digital[0]['nama_digital']; ?></b>
                    </h4>

                    <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                </div>
            </div>
        </div>
        <nav class="nav nav-pills nav-fill d-flex justify-content-center my-auto ">
            <?php foreach ($digital_produk as $digital) :  ?>
                <button class="col-md-4 card nav-link tablinks ambilDataIdDigital" onclick="openCity(event, '<?= $digital['id_digital_produk'] ?>')" data-id="<?= $digital['id_digital_produk']; ?>">
                    <a class="my-auto mx-auto"><b><?= $digital['digital_produk'] ?></b></a>
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
                <!-- artikel -->
                <div class="row d-flex" style="text-align: justify; padding-left: 20px;">
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