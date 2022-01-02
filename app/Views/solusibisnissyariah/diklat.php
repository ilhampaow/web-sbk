<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('/Assets/images/bg-diklat.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">USSI-SBK</a></span></p>
        <h3 class="mb-0 bread" style="color: white;">DIKLAT BMT | DIKLAT KOPERASI | DIKLAT LKM SYARIAH</h3>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section">
  <div class="container">
    <div class="row ftco-animate">
      <div class="col-md-12" style="margin-top: 20px; margin-bottom: 40px;">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <?php foreach ($pernyataan as $pernyataan) : ?>
            <div class="item">
              <div class="blog-entry align-self-stretch">
                <a href="https://<?= $pernyataan['link-sumber']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/berita/<?= $pernyataan['gambar'] ?>');height: 150px;">
                </a>
                <div class="text p-4 card" style="opacity: 0.2 initial;">
                  <div class="meta">
                    <div><?= $pernyataan['tanggal'] ?></div>
                    <div><a href="https://<?= $pernyataan['sumber']; ?>"><?= $pernyataan['sumber'] ?></a></div>
                  </div>
                  <h5 class="heading" style="color: black;text-align:center; hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><?= $pernyataan['pernyataan']; ?></h5>
                  <p style="text-align: center;"><a href="<?= $pernyataan['link-sumber']; ?>">lihat details</a></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
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
                <p style="color: black; text-align: justify;"><?= $d['deskripsi'] ?></p>
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