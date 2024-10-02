<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="config/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <!-- cek pesan notifikasi -->
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
              echo "<script> alert('Login Gagal!!!Password atau Username Salah!!'); </script>";
            }else if($_GET['pesan'] == "logout"){
                echo "<script> alert('Anda telah logout'); </script>";
             }else if($_GET['pesan'] == "belum_login"){
                echo "<script>alert('Anda harus login untuk mengakses halaman admin'); </script>";
            }
        }
        ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <br>
                    
                    <div class="container">
                        <div class="row justify-content-center">
                            <h3 class="text-center"><font color="white"></h3></font>
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center text-white font-weight-light bg-info my-4 p-2">Login</h3></div>
                                    <div class="card-body">
                                        <form action="ceklogin.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" name="txtusername" type="text" placeholder="username" />
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="txtpassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">Masukan Username dan Password yang benar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; UKK Yosep 2024</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="config/js/scripts.js"></script>
    </body>
</html>
