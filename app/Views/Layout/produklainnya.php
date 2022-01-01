<div class="container mt-5 mb-5">
    <h4>Produk Lainnya</h4>
    <div class="row ftco-animate">
        <div class="col-md-12" style="margin-top: 20px; margin-bottom: 40px;">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <?php foreach ($jenis_bisnis as $jenis_bisnis) : ?>
                    <div class="item">
                        <div class="blog-entry align-self-stretch">
                            <a href="/diklat/<?= $jenis_bisnis['slug']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_bisnis['gambar'] ?>');">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($jenis_digital as $jenis_digital) : ?>
                    <div class="item">
                        <div class="blog-entry align-self-stretch">
                            <a href="/Solusidigital/<?= $jenis_digital['slug']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_bisnis['gambar_digital_produk'] ?>');">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>