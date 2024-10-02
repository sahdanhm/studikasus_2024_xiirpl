<?php include "../config/koneksi.php";
$no = 1;
$month = $_GET['month'];
$year = $_GET['year'];
$showmonth = $_GET['nmmonth'];
$sql = mysqli_query($koneks, "select*from produk,penjualan,detailpenjualan where detailpenjualan.idproduk = produk.idproduk and detailpenjualan.idpenjualan = penjualan.idpenjualan and month(penjualan.tglpenjualan) = '$month' and year(penjualan.tglpenjualan) = '$year' order by penjualan.idpenjualan asc");



?>

<link rel="stylesheet" href="../config/css/print.css">


<body onafterprint="back()">
    <div class="container-xxl">
        <div id="print">
            <h2 class="text-center">Transaction Report of <?php echo $showmonth . " ";
                                                            echo $year ?></h2>
            <h5>Syahdan Kasep</h5>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. Faktur</th>
                        <th>Date of Transaction</th>
                        <th>Name of Product</th>
                        <th>Amount of Product</th>
                        <th>Price</th>
                        <th>Subtotal</th>
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
                        </tr>
                    <?php
                }
                $sqlsum = mysqli_query($koneks, "SELECT SUM(subtotal) as SUM from detailpenjualan;");
                $show = mysqli_fetch_array($sqlsum);
                    ?>
                    <tr class="fw-bold">
                        <td colspan="6">Total Transaction</td>

                        <td class="bg-success"><?php echo "Rp." . number_format($show['SUM'], "0", ".", "."); ?></td>

                    </tr>
                    </tbody>
            </table>
            <div class="right-sign me-5 mt-5 text-center float-end" style="width:fit-content;">
                <p class="fw-bold">
                    Waktu cetak
                </p>

                <p class="mt-5" id="date">

                </p>
            </div>
            <div class="left-sign ms-5 mt-5 text-center " style="width:fit-content;">
                <p>
                    <?php echo $_SESSION['level'] . ","; ?>
                </p>

                <p class="mt-5 fw-bold">
                    <?php echo $_SESSION['user']; ?>
                </p>
            </div>
            <form action="index.php?link=showlapen" method="post" name="myForm" id="myForm">
                <input type="number" name="months" id="months" value="<?php echo $month ?>" hidden>
                <input type="number" name="years" id="years" value="<?php echo $year ?>" hidden>
            </form>
        </div>
        <!-- <button onclick="printer()">Print</button> -->

    </div>
    <script>
        window.print();

        function back() {
            location.href = "index.php?link=showlapen";
        }


        var auto_refresh = setInterval(
            function() {
                submitform();
            }, 1000);

        function submitform() {
            document.myForm.submit();
        }
    </script>
    <script src="../config/js/date.js"></script>

</body>

</html>