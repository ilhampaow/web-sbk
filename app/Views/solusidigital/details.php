<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-core.jpg') ?>');">
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
            <?php $a = 0; ?>
            <?php foreach ($digital_produk as $digital) :  ?>
                <?php if ($a == 0) { ?>
                    <button class="col-md-4 card nav-link tablinks ambilDataIdDigital active" onclick="openCity(event, '<?= $digital['id_digital_produk']; ?>')">
                    <?php } else { ?>
                        <button class="col-md-4 card nav-link tablinks ambilDataIdDigital" onclick="openCity(event, '<?= $digital['id_digital_produk']; ?>')">
                        <?php } ?>
                        <a class="my-auto mx-auto"><b><?= $digital['digital_produk']; ?></b></a>
                        </button>
                        <?php $a++; ?>
                    <?php endforeach; ?>

        </nav>
        <?php $a = 0; ?>
        <?php foreach ($digital_produk as $digital) : ?>
            <?php if ($a == 0) { ?>
                <div id="<?= $digital['id_digital_produk']; ?>" class="tabcontent card" style="display: block;">
                <?php } else { ?>
                    <div id="<?= $digital['id_digital_produk']; ?>" class="tabcontent card">
                    <?php } ?>
                    <?php $a++; ?>
                    <!-- judul -->
                    <div class="row justify-content-center text-center">
                        <div class="col-md-4 justify-content-center">
                            <h3><b><?= $digital['digital_produk']; ?></b></h3>
                        </div>
                    </div>
                    <!-- artikel -->
                    <?php foreach ($digital_produk_dok as $produk_dok) : ?>
                        <?php if ($produk_dok['source_id_digital_produk'] == $digital['id_digital_produk']) { ?>

                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/Assets/images/<?= $produk_dok['gambar_produk_dok']; ?>" alt="<?= $produk_dok['gambar_produk_dok']; ?>" style="width:100%;">
                                </div>
                                <div class="col-md-8">
                                    <p><?= $digital['artikel']; ?></p>
                                </div>
                            </div>
                        <?php } else if ($produk_dok['source_id_digital_produk'] > $digital['id_digital_produk']) {
                            break;
                        } else {
                        } ?>
                    <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>

<!-- slider -->