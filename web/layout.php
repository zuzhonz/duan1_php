<?php require_once __DIR__ . "/../lib/session.php";
      session::checkSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/thong_tin.css">
    <link rel="stylesheet" href="../style/cmt.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="logo"><a href="./trangchu.php" style="text-decoration: none; font-family:fantasy; color: #000; ">
                        <h1> NO-HARI
                            <br>BARBERSHOP
                        </h1>
                    </a></div>
                <nav class="menu">
                    <ul>
                        <li><a href="">DỊCH VỤ</a></li>
                        <li><a href="./kieu_toc.php">KIỂU TÓC</a></li>
                        <li><a href="./blog.php">BLOG</a></li>
                        <li><a href="./cmt.php">ĐÁNH GIÁ</a></li>
                        <li><a href="./thong_tin_lien_he.php">HỖ TRỢ</a></li>
                    </ul>
                </nav>

                <div class="sign_log dropdown">
                    <img src="../img/icon.png" alt="" width="50px" class=" dropdown-toggle" data-bs-toggle="dropdown">
                    <?php
                    if (isset($_GET["action"]) && $_GET["action"] == "dang_xuat") {
                        session_destroy();
                        header("Location: ../login/login.php");
                    }

                    if (isset($_SESSION['use_name'])) {
                    ?>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href=""> <?php echo $_SESSION['use_name']?> </a></li>
                            <li><a class="dropdown-item" href="?action=dang_xuat">Đăng Xuất</a></li>
                        </ul>
                    <?php
                    }else{
                    ?>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="../login/login.php">Đăng Nhập</a></li>
                            <li><a class="dropdown-item" href="../login/dang_ky.php">Đăng Ký</a></li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <hr>
        </header>