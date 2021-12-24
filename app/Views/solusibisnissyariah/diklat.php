<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('/Assets/images/bg-diklat.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">Services</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php foreach ($diklat as $d) : ?>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="<?= $d['icon']; ?>"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading"><?= $d['produk']; ?></h3>
                            <p><?= $d['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div class="single-services">
    <div class="container">
        <div class="row" id="tabs">
            <div class="col-md-4">
                <ul>
                    <li><a href='#tabs-1'>Market Analysis <i class="fa fa-angle-right"></i></a></li>
                    <li><a href='#tabs-2'>Financial Data <i class="fa fa-angle-right"></i></a></li>
                    <li><a href='#tabs-3'>Accounting Service <i class="fa fa-angle-right"></i></a></li>
                    <li><a href='#tabs-4'>Overall Evaluation <i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id="tabs-1">
                        <img src="assets/images/single_service_01.jpg" alt="">
                        <h4>Market Analysis</h4>
                        <p>Vivamus sed feugiat elit. Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar tortor, eget convallis lorem odio non tortor. Donec massa est, fermentum sit amet felis ac, maximus luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui diam aliquet dui, a euismod metus enim ac velit. Vivamus eu tristique odio, vel tristique quam.
                            <br><br>Proin eu molestie risus. Etiam suscipit pretium odio, at consectetur nisi. Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante.
                        </p>
                    </article>
                    <article id='tabs-2'>
                        <img src="assets/images/single_service_02.jpg" alt="">
                        <h4>Financial Data</h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet
                            <br><br>Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar tortor, eget convallis lorem odio non tortor. Donec massa est, fermentum sit amet felis ac, maximus luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui diam aliquet dui, a euismod metus enim ac velit. Vivamus eu tristique odio, vel tristique quam.
                        </p>
                    </article>
                    <article id='tabs-3'>
                        <img src="assets/images/single_service_03.jpg" alt="">
                        <h4>Accounting Service</h4>
                        <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                            <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit. Praesent pretium justo non auctor condimentum.
                        </p>
                    </article>
                    <article id='tabs-4'>
                        <img src="assets/images/single_service_04.jpg" alt="">
                        <h4>Overall Evaluation</h4>
                        <p>Integer vehicula sapien quis dolor efficitur, eget molestie eros tempus. Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis. Ut ultricies maximus turpis, in sollicitudin ligula posuere vel.
                            <br><br>Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique. Etiam suscipit ante a odio consequat, in ornare lacus suscipit. Cras ac libero massa. Quisque rhoncus velit feugiat vulputate mollis. Donec nisl eros, malesuada sed nisi id, condimentum condimentum quam.
                        </p>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>