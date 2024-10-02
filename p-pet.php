<link rel="stylesheet" href="../config/css/print.css">

<body onafterprint="back()">
    <div class="container-xxl">
        <div id="print">
            <h2 class="text-center">Data Petugas</h2>
            <h5>Toko Syahdan Kasep</h5>
            <table class="table table-bordered">

                <tr>
                    <th>ID Petugas</th>
                    <th>Nama Petugas</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Contact Petugas</th>
                    <th>Level</th>

                </tr>
                <?php
                include "../config/koneksi.php";
                $sql = mysqli_query($koneks, "select*from petugas");
                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $tampil['idpetugas']; ?></td>
                        <td><?php echo $tampil['namapetugas']; ?></td>
                        <td><?php echo $tampil['username']; ?></td>
                        <td><?php echo $tampil['password']; ?></td>
                        <td><?php echo $tampil['telppetugas']; ?></td>
                        <td><?php echo $tampil['level']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script>
        window.print();
        function back() {
            location.href = "index.php?link=t-petugas";
        }
    </script>
</body>

</html>