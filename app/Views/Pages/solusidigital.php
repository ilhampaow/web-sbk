<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/frame-digital1.jpg') ?>');" data-stellar-background-ratio="0.5">
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
        <div class="card">
            <?php foreach ($digital as $digital) : ?>
                <div class="row mt-3 mr-2 mb-3 ml-2">
                    <div class="col-md-4">
                        <img class="mx-auto w-100" src="/Assets/images/icon/<?= $digital['gambar']; ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <h4><b><?= $digital['nama_digital']; ?></b></h4>
                            <p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;"><?= $digital['deskripsi']; ?></p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <a href="/Solusidigital/<?= $digital['slug']; ?>" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>
<?= $this->endSection('content'); ?>