<?php
include "../config/koneksi.php";
$no = 1;
$month = $_POST['months'];
$year = $_POST['years'];
$sql = mysqli_query($koneks, "select*from produk,penjualan,detailpenjualan where detailpenjualan.idproduk = produk.idproduk and detailpenjualan.idpenjualan = penjualan.idpenjualan and month(penjualan.tglpenjualan) = '$month' and year(penjualan.tglpenjualan) = '$year' order by penjualan.idpenjualan asc");




switch ($month) {
    case 1:
        $mth = "January";
        break;
    case 2:
        $mth = "February";
        break;
    case 3:
        $mth = "March";
        break;
    case 4:
        $mth = "April";
        break;
    case 5:
        $mth = "May";
        break;
    case 6:
        $mth = "June";
        break;
    case 7:
        $mth = "July";
        break;
    case 8:
        $mth = "August";
        break;
    case 9:
        $mth = "September";
        break;
    case 10:
        $mth = "October";
        break;
    case 11:
        $mth = "November";
        break;
    case 12:
        $mth = "December";
        break;
    default:
        $mth = "Invalid month number";
        break;
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Produk</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card mt-5">
            <div class="card-header bg-info fw-bold text-white fs-2">Transaction Report of <?php echo $month; echo $year;?></div>
            <div class="card-body">
                <a href="index.php?link=print-lapen&&month=<?php echo $month; ?>&&year=<?php echo $year; ?>"><button
                        class="btn btn-info mb-3 fw-bold text-white">Print Data</button></a>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>No.</th>
                        <th>No Faktur</th>
                        <th>Date of Transaction</th>
                        <th>Name of Product</th>
                        <th>Amount of Transaction</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                    <?php

                    while ($tampil = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $tampil['idpenjualan']; ?></td>
                            <td><?php echo $tampil['tglpenjualan']; ?></td>
                            <td><?php echo $tampil['namaproduk']; ?></td>
                            <td><?php echo $tampil['jumlahproduk']; ?></td>
                            <td><?php echo $tampil['hargaproduk']; ?></td>
                            <td><?php echo $tampil['subtotal']; ?></td>
                            <td><a href="index.php?link=f_edit_produk&id=<?php echo $tampil['idproduk']; ?>"><button
                                        class="btn btn-warning text-white">Edit</button></a>|<a
                                    href="hapus_produk.php?id=<?php echo $tampil['idproduk']; ?>"><button
                                        class="btn btn-danger text-white">Hapus</button></a>|<a
                                    href="print-each-lapen.php?idpen=<?php echo $tampil['idpenjualan']; ?>&&idpro=<?php echo $tampil['idproduk']; ?>&&months=<?php echo $month; ?>&&years=<?php echo $year ?>"><button
                                        class="btn btn-primary text-white">Print</button></a></td>
                        </tr>
                        <?php
                    }
                    $sum = mysqli_query($koneks, "SELECT SUM(value) as SUM from MyTable;");
                        ?>
                    <tr class="fw-bold">
                        <td colspan="6">Total Transaction</td>
                        <td>Rp.</td>
                        <td></td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
    </script>
</body>

</html>