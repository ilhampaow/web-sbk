<?php $this->extend('layout/template') ?>
<?php $this->section('content') ?>

<section class="ftco-section">
  <div class="container">
    <div class="jumbotron bg-light">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container ">
    <div class="row">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">From the Firehose</h3>
        <article class="blog-post">
          <h2 class="blog-post-title">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

          <img src="<?= base_url('Assets/images/about-2.jpg') ?>" class="float-left mr-4" width="175" height="175" alt="">
          <p class="text-justify">This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>

          <p class="text-justify">This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. <a href="">Lanjutkan Baca . . .</a></p>
        </article>
        <hr class="featurette-divider">
        <article class="blog-post">
          <h2 class="blog-post-title">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

          <img src="<?= base_url('Assets/images/about-2.jpg') ?>" class="float-left mr-4" width="175" height="175" alt="">
          <p class="text-justify">This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>

          <p class="text-justify">This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. <a href="">Lanjutkan Baca . . .</a></p>
        </article>
        <hr class="featurette-divider">
        <article class="blog-post">
          <h2 class="blog-post-title">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

          <img src="<?= base_url('Assets/images/about-2.jpg') ?>" class="float-left mr-4" width="175" height="175" alt="">
          <p class="text-justify">This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>

          <p class="text-justify">This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. <a href="">Lanjutkan Baca . . .</a></p>
        </article>

        <hr class="featurette-divider">
        <nav class="blog-pagination mb-3" aria-label="Pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled">Newer</a>
        </nav>
      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">December 2021</a></li>
              <li><a href="#">November 2021</a></li>
              <li><a href="#">October 2021</a></li>
              <li><a href="#">September 2021</a></li>
              <li><a href="#">August 2021</a></li>
              <li><a href="#">July 2021</a></li>
              <li><a href="#">June 2021</a></li>
              <li><a href="#">May 2021</a></li>
              <li><a href="#">April 2021</a></li>
              <li><a href="#">March 2021</a></li>
              <li><a href="#">February 2021</a></li>
              <li><a href="#">January 2021</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection() ?>