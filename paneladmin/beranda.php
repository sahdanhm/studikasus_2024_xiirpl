<?php
error_reporting(0);
    session_start();
    include '../config/koneksi2.php';
    if (isset($_SESSION['status'])!="login") {
        header('location:../login.php?pesan=belum_login');
        exit();
    }
?>
<div class="container-fluid px-4">
                        <h1 class="mt-4"><img src="logo.jpg" width="50" height="60">HAI <?php echo $_SESSION['user'];?> !</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang di Halaman Panel Admin Toko Sumber Makmur</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Produk Yang Mau Habis :
                                    <?php
                                        $sql=mysqli_query($koneks,"select * from produk where stok <=5");
                                        $hitung=mysqli_num_rows($sql);
                                        echo $hitung." produk";
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php?link=habis">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Transaksi Penjualan Bulan Ini :
                                    <?php
                                    $sql=mysqli_query($koneks,"select * from penjualan");
                                    $hitung=mysqli_num_rows($sql);
                                    echo $hitung." Transaksi";
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Member :
                                    <?php
                                        $sql=mysqli_query($koneks,"select * from pelanggan");
                                        $hitung=mysqli_num_rows($sql);
                                        echo $hitung." member";
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            