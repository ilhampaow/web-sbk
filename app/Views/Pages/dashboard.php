<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="hero-wrap">
  <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(Assets/images/frame1.jpg);"> </div>

    <div class="slider-item" style="background-image:url(Assets/images/bg-diklat_4.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate">
            <div class="text w-100 text-center">
              <h2>We Support Business</h2>
              <h1 class="mb-4">The Best Business Support</h1>
              <p><a href="#" class="btn btn-white">Connect with us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url(Assets/images/image_6.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate">
            <div class="text w-100 text-center">
              <h2>We Give Advice</h2>
              <h1 class="mb-4">Expert Financial Advice</h1>
              <p><a href="#" class="btn btn-white">Connect with us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section bg-light">
  <div class="container card mt-4 mb-4">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading mt-3">Layanan Yang Tersedia</span>
        <h2>Jadikan pengalaman Kamu lebih baik hari ini</h2>
      </div>
    </div>
    <div class="row d-flex mb-4 mr-2 ml-2">
      <?php

      use App\Database\Migrations\Komunitas;

      $i = 1; ?>
      <?php foreach ($solusibisnis as $bisnis) : ?>
        <div class="col-md-4">
          <div class="service-item my-auto">
            <img class="mx-auto d-flex" src="/Assets/images/icon/<?= $bisnis['gambar']; ?>" alt="">
            <div class="down-content">
              <h4><?= $bisnis['nama_produk']; ?></h4>
              <p><?= $bisnis['deskripsi']; ?></p>
              <?php if ($i == 1) { ?>
                <a href="/diklat/<?= $bisnis['slug']; ?>" class="filled-button">Read More</a>
              <?php } elseif ($i == 2) { ?>
                <a href="/regulasi/<?= $bisnis['slug']; ?>" class="filled-button">Read More</a>
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
</section>

<section class="ftco-section bg-light ftco-no-pt">
  <div class="container card mt-4 mb-4">
    <div class="row db-row">
      <div class="col-md-6 col-lg-6 d-flex services align-self-stretch px-4 ftco-animate dashboard-image">
        <div class="img mb-4 mb-sm-0" style="background-image:url(Assets/images/about-2.jpg);"></div>
      </div>
      <div class="col-md-6 col-lg-6 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block">
          <div class="media-body">
            <h1 class="heading"><?= $komunitas[0]['judul'] ?></h1>
            <p><?= $komunitas[0]['artikel'] ?></p>
          </div>
        </div>
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row">
      <div class="col-md-6 col-lg-6 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block">
          <div class="media-body">
            <h1 class="heading"><?= $komunitas[1]['judul'] ?></h1>
            <p><?= $komunitas[1]['artikel'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="img mb-2 mb-sm-0" style="background-image:url(Assets/images/about-2.jpg);"></div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row">
      <div class="col-md-6 col-lg-6 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="img mb-4 mb-sm-0" style="background-image:url(Assets/images/about-2.jpg);"></div>
      </div>
      <div class="col-md-6 col-lg-6 d-flex services align-self-stretch px-4 ftco-animate">
        <div class="d-block">
          <div class="media-body">
            <h1 class="heading"><?= $komunitas[2]['judul']  ?></h1>
            <p><?= $komunitas[2]['artikel']  ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="25">25</strong>
          </div>
          <div class="text">
            <span>Terdapat 25+ Produk</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="50">500</strong>
          </div>
          <div class="text">
            <span>Terdapat 50+ Project Terselesaikan</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="10">10</strong>
          </div>
          <div class="text">
            <span>Bekerja sama dengan 10+ lembaga</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="20">20</strong>
          </div>
          <div class="text">
            <span>Memiliki 20+ Konsultan</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section testimony-section bg-light">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading mt-5">News &amp; Blog</span>
        <h2>Latest news from our blog</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('Assets/images/image_1.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('Assets/images/image_1.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('Assets/images/image_1.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('Assets/images/image_1.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('Assets/images/image_1.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('Assets/images/image_1.jpg');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="img-faqs w-100">
          <div class="img mb-4 mb-sm-0" style="background-image:url(Assets/images/about-2.jpg);">
          </div>
          <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(Assets/images/about-1.jpg);">
          </div>
        </div>
      </div>
      <div class="col-lg-6 pl-lg-5">
        <div class="heading-section mb-5 mt-5 mt-lg-0">
          <span class="subheading">FAQs</span>
          <h2 class="mb-3">Frequently Asks Questions</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
          <div class="card">
            <div class="card-header p-0" id="headingOne">
              <h2 class="mb-0">
                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                  <p class="mb-0">How to fixed a problem?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Far far away, behind the word mountains</li>
                  <li>Consonantia, there live the blind texts</li>
                  <li>When she reached the first hills of the Italic Mountains</li>
                  <li>Bookmarksgrove, the headline of Alphabet Village</li>
                  <li>Separated they live in Bookmarksgrove right</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingTwo" role="tab">
              <h2 class="mb-0">
                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                  <p class="mb-0">How to manage your business loans?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Far far away, behind the word mountains</li>
                  <li>Consonantia, there live the blind texts</li>
                  <li>When she reached the first hills of the Italic Mountains</li>
                  <li>Bookmarksgrove, the headline of Alphabet Village</li>
                  <li>Separated they live in Bookmarksgrove right</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingThree" role="tab">
              <h2 class="mb-0">
                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                  <p class="mb-0">How to grow your investments funds?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Far far away, behind the word mountains</li>
                  <li>Consonantia, there live the blind texts</li>
                  <li>When she reached the first hills of the Italic Mountains</li>
                  <li>Bookmarksgrove, the headline of Alphabet Village</li>
                  <li>Separated they live in Bookmarksgrove right</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingFour" role="tab">
              <h2 class="mb-0">
                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                  <p class="mb-0">What are those requirements for businesses?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection('content'); ?>