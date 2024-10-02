<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../config/css/bootstrap.min.css">
    <link rel="stylesheet" href="../config/css/login.css">
</head>

<body>
<iframe src='https://my.spline.design/lines-2815270302e16b31d96cb0aca02d31d9/' frameborder='0' width='100%' height='100%'></iframe>
    <div class="container position-absolute top-50 start-50 translate-middle rounded-5">
        <h1 class="text-center">Create an account</h1>
        <form action="save-account.php" method="post">
            <div class="incon mt-5">
                <input type="text" class="username" placeholder="Username" name="txtusername">
                <input type="password" class="pass" placeholder="Password" name="txtpassword">
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn">Create</button>
            </div>
        </form>
        <div class="footer mt-3 text-end">
            <a href="../createaccount/">Don't have an account?</a>
        </div>
    </div>
</body>

</html>