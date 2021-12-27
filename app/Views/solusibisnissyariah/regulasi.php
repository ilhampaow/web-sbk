<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('Assets/images/bg-regulasi.jpg') ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url('/'); ?>">USSI-SBK<i class="ion-ios-arrow-forward"></i></a></span></p>
                <h1 class="mb-0 bread">Regulasi Koperasi dan LKM Syariah</h1>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Regulasi Koperasi dan LKM <em>Syariah</em></h2>
                    <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                </div>
            </div>
        </div>
        <div class="w3-row d-flex justify-content-center" style="text-align: center;">
            <a class="col-md-4 d-flex justify-content-center" href="javascript:void(0)" onclick="openCity(event, 'regulasi-koperasi');">
                <div class="col-md-12 tablink w3-bottombar w3-hover-light-grey w3-padding">Regulasi Koperasi</div>
            </a>
            <a class="col-md-4 d-flex justify-content-center" href="javascript:void(0)" onclick="openCity(event, 'regulasi-lkms');">
                <div class="col-md-12 tablink w3-bottombar w3-hover-light-grey w3-padding">Regulasi LKM Syariah</div>
            </a>
        </div>
        <div id="regulasi-koperasi" class="w3-container city mt-5" style="display:active">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th colspan="3">Deskripsi</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td colspan="3">Otto</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="regulasi-lkms" class="w3-container city mt-5" style="display:none">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th colspan="3">Deskripsi</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td colspan="3">Otto</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td><button type="button" class="btn btn-success">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section>
    <?= $this->include('layout/produklainnya'); ?>
</section>

<?= $this->endSection('content'); ?>