<?php
include "../config/koneksi.php";
$no = 1;
$month = $_POST['months'];
$year = $_POST['years'];
$sql = mysqli_query($koneks, "select*from produk,penjualan,detailpenjualan where detailpenjualan.idproduk = produk.idproduk and detailpenjualan.idpenjualan = penjualan.idpenjualan and month(penjualan.tglpenjualan) = '$month' and year(penjualan.tglpenjualan) = '$year' order by penjualan.idpenjualan asc");
if ($sql) {
    $showmonth = null;
    switch ($month) {
        case 1:
            $showmonth = "January";
            break;
        case 2:
            $showmonth = "February";
            break;
        case 3:
            $showmonth = "March";
            break;
        case 4:
            $showmonth = "April";
            break;
        case 5:
            $showmonth = "May";
            break;
        case 6:
            $showmonth = "June";
            break;
        case 7:
            $showmonth = "July";
            break;
        case 8:
            $showmonth = "August";
            break;
        case 9:
            $showmonth = "September";
            break;
        case 10:
            $showmonth = "October";
            break;
        case 11:
            $showmonth = "November";
            break;
        case 12:
            $showmonth = "December";
            break;
        default:
            $showmonth = "Invalid month";
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
                <div class="card-header bg-info fw-bold text-white fs-2">Transaction Report of <?php echo $showmonth . " ";
                echo $year ?></div>
                <div class="card-body">
                    <a
                        href="index.php?link=print-lapen&&month=<?php echo $month; ?>&&year=<?php echo $year; ?>&&nmmonth=<?php echo $showmonth; ?>"><button
                            class="btn btn-info mb-3 fw-bold text-white" id="btn-print">Print Data</button></a>
                    <table class="table table-bordered table-hover">
                        <thead>
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
                        </thead>
                        <?php

                        while ($tampil = mysqli_fetch_array($sql)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $tampil['idpenjualan']; ?></td>
                                    <td><?php echo $tampil['tglpenjualan']; ?></td>
                                    <td><?php echo $tampil['namaproduk']; ?></td>
                                    <td><?php echo $tampil['jumlahproduk']; ?></td>
                                    <td><?php echo "Rp." . number_format($tampil['hargaproduk'], "0", ".", "."); ?></td>
                                    <td><?php echo "Rp." . number_format($tampil['subtotal'], "0", ".", "."); ?></td>
                                    <td><a href="#?id=<?php echo $tampil['idproduk']; ?>"><button
                                                class="btn btn-warning text-white">Edit</button></a>|<a
                                            href="#?id=<?php echo $tampil['idproduk']; ?>"><button
                                                class="btn btn-danger text-white">Hapus</button></a>|<a
                                            href="index.php?link=print-each-lapen&&idpen=<?php echo $tampil['idpenjualan']; ?>&&idpro=<?php echo $tampil['idproduk']; ?>&&months=<?php echo $month; ?>&&nmmonth=<?php echo $showmonth; ?>&&years=<?php echo $year ?>"><button
                                                class="btn btn-primary text-white">Print</button></a></td>
                                </tr>
                            </tbody>
                            <?php
                        }
                        $sqlsum = mysqli_query($koneks, "SELECT SUM(subtotal) as SUM from detailpenjualan;");
                        $show = mysqli_fetch_array($sqlsum);
                        ?>
                        <tr class="fw-bold">
                            <td colspan="6">Total Transaction</td>
                            <td class="bg-info"><?php echo "Rp." . number_format($show['SUM'], "0", ".", "."); ?></td>
                            <td></td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <script>
            document.body.addEventListener("keypress", function key(event) {
                if (event.which == 80) {
                    document.getElementById('btn-print').click();
                }
            });
        </script>
    </body>

    </html>
<?php } else {
    ?>
    <div class="card mt-5">
        <div class="card-header bg-info fw-bold text-white fs-2">Transaction Report of <?php echo $showmonth . " ";
        echo $year ?></div>
        <h1>Sorry.....!! Transaction is not found</h1>
    </div>
<?php } ?>