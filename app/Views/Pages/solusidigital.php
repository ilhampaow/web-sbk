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
<section class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Solusi <em>Digital</em></h2>
                <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row mt-4">
        <h3><em><?= $digital[0]['nama_digital'] ?></em></h3>
    </div>
    <div class="row mt-2 mb-10 justify-content-center">
        <!-- carousel -->
        <div id="<?= $digital[0]['slug']; ?>" class="carousel slide col-md-12" data-ride="carousel">

            <?php $jml_produk_1 = count($digital_produk_1); ?>
            <!-- Indicators -->
            <ul class="carousel-indicators mt-5">
                <?php for ($i = 0; $i < $jml_produk_1 / 3;) { ?>
                    <?php if ($digital_produk_1[$i]['id_digital_produk'] == 1) { ?>
                        <li data-target="#<?= $digital[0]['slug']; ?>" data-slide-to="<?= $i++ ?>" class="active"></li>
                    <?php } else { ?>
                        <li data-target="#<?= $digital[0]['slug']; ?>" data-slide-to="<?= $i++ ?>" class=""></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner mb-5">
                <?php for ($i = 0; $i < $jml_produk_1;) { ?>
                    <?php if ($digital_produk_1[$i]['id_digital_produk'] == 1) { ?>
                        <div class="carousel-item active" style="margin-right: auto; margin-left: auto;">
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_1[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_1[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_1[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_1[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_1[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_1[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_1[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_1[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_1[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_1[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_1[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_1[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_1[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_1[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_1[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_1[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_1[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_1[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_1[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_1[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_1[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_1[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_1[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_1[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_1[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_1[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_1[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_1[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_1[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_1[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row mt-4">
        <h3><em><?= $digital[1]['nama_digital'] ?></em></h3>
    </div>
    <div class="row mt-2 mb-10 justify-content-center">
        <!-- carousel -->
        <div id="<?= $digital[1]['slug']; ?>" class="carousel slide col-md-12" data-ride="carousel">

            <?php $jml_produk_2 = count($digital_produk_2); ?>
            <!-- Indicators -->
            <ul class="carousel-indicators mt-5">
                <?php for ($i = 0; $i < $jml_produk_2 / 3;) { ?>
                    <?php if ($digital_produk_2[$i]['id_digital_produk'] == 1) { ?>
                        <li data-target="#<?= $digital[1]['slug']; ?>" data-slide-to="<?= $i++ ?>" class="active"></li>
                    <?php } else { ?>
                        <li data-target="#<?= $digital[1]['slug']; ?>" data-slide-to="<?= $i++ ?>" class=""></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner mb-5">
                <?php for ($i = 0; $i < $jml_produk_2;) { ?>
                    <?php if ($digital_produk_2[$i]['id_digital_produk'] == 1) { ?>
                        <div class="carousel-item active" style="margin-right: auto; margin-left: auto;">
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_2[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_2[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_2[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_2[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_2[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_2[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_2[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_2[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_2[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_2[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_2[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_2[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_2[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_2[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_2[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_2[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_2[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_2[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_2[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_2[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_2[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_2[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_2[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_2[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_2[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-0.9 card">
                                <img class="mt-2" src="/Assets/images/<?= $digital_produk_2[$i]['gambar']; ?>" alt="">
                                <div class="row justify-content-center mt-2 mb-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $digital_produk_2[$i]['slug'] ?>">Details</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $digital_produk_2[$i]['slug'] ?>" role="dialog">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?= $digital_produk_2[$i]['digital_produk']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= $digital_produk_2[$i++]['artikel']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Daftar Layanan</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="mt-5"></section>
<?= $this->endSection('content'); ?>