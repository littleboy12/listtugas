<?php 
require_once "../_config/config.php"; 
if (isset($_SESSION['user'])) {
    echo "<script>window.location='../dashboard/index.php';</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../_assets/icon.png">

    <title>Login-ListTugas</title>
    <!-- Bootstrap Core CSS -->
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_assets/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="login-page" style="margin-top: 150px;">
                <div class="form">
                    <h3 style="letter-spacing: 5px;">LOGIN</h3>
                    <!-- PROSES -->
                    <?php
                    if (isset($_POST['login'])) {
                        $user = trim(mysqli_real_escape_string($conn, $_POST['user']));
                        $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['pass'])));
                        $sql_login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($conn));
                        if (mysqli_num_rows($sql_login) > 0) {
                            $_SESSION['user'] = $user;
                            echo "<script>window.location='../dashboard/index.php';</script>";
                        } else { ?>
                            <div class="row">
                                <div class="alert alert-danger" role="alert">
                                    <small>Login Gagal !!</small>
                                    <a href="" class="close" data-dismiss="alert" aria-label="close"><span class="fas fa-window-close" style="float: right;"></span></a>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>
                    <form method="post" action="" class="login-form">
                        <input type="text" name="user" placeholder="username"/>
                        <input type="password" name="pass" placeholder="password"/>
                        <button type="submit" name="login">login</button>
                        <p class="message"> Data Pribadi 2021   </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>