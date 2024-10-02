<div class="container-fluid px-4">
    <h1 class="mt-4">Panel Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Selamat datang ....!</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Jumlah Barang yang akan habis :
                    <?php
                    include '../config/koneksi.php';
                    $query = mysqli_query($konek, "select*from produk where stok < 5");
                    $data = mysqli_num_rows($query);
                    echo $data;
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php?link=t-produk">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Jumlah Pelanggan :
                    <?php
                    $query = mysqli_query($konek, "select*from pelanggan");
                    $data = mysqli_num_rows($query);
                    echo $data;
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="index.php?link=t-pelanggan">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Jumlah Transaksi Bulan Ini :
                    <?php
                    $query = mysqli_query($konek, "select*from penjualan");
                    $data = mysqli_num_rows($query);
                    echo $data;
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

    </div>

</div>