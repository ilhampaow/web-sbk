<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-fatwa.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">USSI-SBK<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Fatwa DSN MUI</h1>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Fatwa DSN <em>MUI</em></h2>
                    <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                </div>
            </div>
        </div>
        <table id="fatwa" class="table table-striped table-bordered" style="width:100%">
            <thead class="table-primary">
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Nomor Fatwa</th>
                    <th style="text-align: center;">Tentang</th>
                    <th style="text-align: center;">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fatwa_dsn_mui as $fatwa_dsn_mui) : ?>
                    <tr>
                        <td><?= $fatwa_dsn_mui['id_fatwa_dsn_mui']; ?></td>
                        <td><?= $fatwa_dsn_mui['nomor_fatwa']; ?></td>
                        <td><?= $fatwa_dsn_mui['tentang']; ?></td>
                        <td style="text-align: center;"><a href="<?= $fatwa_dsn_mui['link'] ?>" class="btn btn-primary" role="button" data-bs-toggle="button">Details</a></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>