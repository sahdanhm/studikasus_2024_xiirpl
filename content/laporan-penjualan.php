<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Penjualan</title>
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info fw-bold text-white fs-5">Laporan Penjualan</div>
                    <div class="card-body">
                        <form action="index.php?link=showlapen" method="post">
                            <div class="mb-3">
                                <label class="form-label">Month</label>
                                <select name="months" id="months" class="form-select">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <label class="form-label">Year</label>
                            <select name="years" id="years" class="form-select">
                                <?php
                                include "../config/koneksi.php";
                                $sql = mysqli_query($koneks, "select distinct year(tglpenjualan) as years from penjualan order by 1 asc");
                                while ($show = mysqli_fetch_array($sql)) {
                                    ?>
                                    <option value="<?php echo $show['years']; ?>"><?php echo $show['years']; ?></option>
                                </select>
                            <?php } ?>
                            <button type="submit" class="btn btn-primary text-white mt-5" name="bubah">Show
                                Report</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>