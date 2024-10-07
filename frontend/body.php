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
            <div class="con-card d-flex w-100">
                <?php
                include "config/koneksi.php";
                $sql = mysqli_query($koneks, "select*from produk");
                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>

                    <div class="card bg-black text-white border border-white m-1">
                        <div class="con-img-pro">
                            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($tampil['image']) . '" class="img-pro card-image-top" alt="Photo product"/>'; ?>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $tampil['namaproduk'] ?></h6>
                            <hr>

                            <h5 class="card-price">
                                <?php echo "Rp." . number_format($tampil['hargaproduk'], "0", ",", "."); ?>
                            </h5>

                            <p class="fst-italic font-monospace" style="font-size: 0.7rem;">
                                <?php echo "stock : " . $tampil['stok'] ?>
                            </p>


                            <div class="">

                                <button href="#" class="btn btn-outline-light">Buy Now</button>


                                <a class="btn ms-auto rounded-circle cart-btn" style="width: fit-content; padding:5%;"
                                    onclick="jmlCart('<?php echo $tampil['idproduk']; ?>')" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#FFFFFF">
                                        <path
                                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                                    </svg></a>



                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>


        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="content/cart.php" method="post">
                    <input type="text" id="produk" name="produk" hidden>
                    <label for="jml" class="form-label">Amount</label>
                    <input type="text" name="jml" id="jml" class="form-control">
                    <button type="submit" name="baddcart" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>