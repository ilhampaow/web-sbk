<div class="container mt-5 mb-5">
    <h4>Produk Lainnya</h4>
    <div class="row ftco-animate">
        <div class="col-md-12" style="margin-top: 20px; margin-bottom: 40px;">
            <div class="carousel-testimony owl-carousel ftco-owl">
                <!-- bisnis -->
                <?php $i = 1; ?>
                <?php foreach ($jenis_bisnis as $jenis_bisnis) : ?>
                    <div class="item">
                        <div class="blog-entry align-self-stretch">
                            <?php if ($i == 1) { ?>
                                <a href="/diklat/<?= $jenis_bisnis['slug']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_bisnis['gambar'] ?>');">
                                </a>
                            <?php } elseif ($i == 2) { ?>
                                <a href="/regulasi/<?= $jenis_bisnis['slug']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_bisnis['gambar'] ?>');">
                                </a>
                            <?php } else { ?>
                                <a href="/fatwa/<?= $jenis_bisnis['slug']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_bisnis['gambar'] ?>');">
                                </a>
                            <?php }
                            $i++ ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- komunitas -->
                <?php foreach ($jenis_komunitas as $jenis_komunitas) : ?>
                    <div class="item">
                        <div class="blog-entry align-self-stretch">
                            <a href="/Solusikomunitas/" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_komunitas['gambar'] ?>');">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- digital -->
                <?php foreach ($jenis_digital as $jenis_digital) : ?>
                    <div class="item">
                        <div class="blog-entry align-self-stretch">
                            <a href="/Solusidigital/<?= $jenis_digital['slug']; ?>" class="block-20 rounded" style="background-image: url('/Assets/images/<?= $jenis_digital['gambar'] ?>');">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>