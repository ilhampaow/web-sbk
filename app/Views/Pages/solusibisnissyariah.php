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
<section>
  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Solusi Bisnis <em>Syariah</em></h2>
            <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
          </div>
        </div>
        <?php $i = 1; ?>
        <?php foreach ($solusibisnis as $bisnis) : ?>
          <div class="col-md-4">
            <div class="service-item my-auto">
              <img class="mx-auto d-flex" src="/Assets/images/<?= $bisnis['icon']; ?>" alt="">
              <div class="down-content">
                <h4><?= $bisnis['nama_produk']; ?></h4>
                <p><?= $bisnis['deskripsi']; ?></p>
                <?php if ($i == 1) { ?>
                  <a href="/diklat/<?= $bisnis['slug']; ?>" class="filled-button">Read More</a>
                <?php } elseif ($i == 2) { ?>
                  <a href="/regulasi/<?= $bisnis['slug']; ?>" cla ss="filled-button">Read More</a>
                <?php } else { ?>
                  <a href="/fatwa/<?= $bisnis['slug']; ?>" class="filled-button">Read More</a>
                <?php }
                $i++ ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection('content'); ?>