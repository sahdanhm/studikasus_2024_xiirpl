<div class="super-con">
    <iframe src='https://my.spline.design/robotfollowcursorforlandingpage-0f6d2297ac4dfd5ea01067d3a597df06/'
        frameborder='0' width='100%' height='100%'>
    </iframe>

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="gradient-left"></div>
            <div class="gradient-right"></div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="config/images/product-one.jpg" class="d-block w-100" alt="gambar product">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Promo Weekend</h5>
                        <p>Bisa beli apapun sepuas nya dengan diskon hingga 60%.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="config/images/product-two.jpg" class="d-block w-100" alt="gambar product">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Skin care buat laki laki sejati</h5>
                        <p>Lo yang laki bisa banget skincare an tanpa malu.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="config/images/product-three.jpg" class="d-block w-100" alt="gambar product">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Branded Product</h5>
                        <p>Bukan buat kaum mendang mending.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="product mt-5">
            <h1 class=""># Product</h1>
            <div class="row row-cols-3 row-cols-xxl-4 g-4">
                <?php
                include "config/koneksi.php";
                $sql = mysqli_query($koneks, "select*from produk");
                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>
                    <div class="col col-sm-1">
                        <div class="card bg-black text-white border border-white w-75">
                            <div class="image-prdct">
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($tampil['image']) . '" class="img-pro card-image-top" alt="Photo product"/>'; ?>
                            </div>
                            <div class="card-body">
                                <p class="card-title text-center fs-3"><?php echo $tampil['namaproduk'] ?></p>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <p class="fs-4 fw-bold">
                                            <?php echo "Rp." . number_format($tampil['hargaproduk'], "0", ",", "."); ?>
                                        </p>
                                    </div>
                                    <div class="col align-middle">
                                        <p class="text-end fst-italic">
                                            <?php echo "stock available : " . $tampil['stok'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-buy w-100 d-grid ">
                                    <a href="#" class="btn btn-outline-light">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>