<?php require_once __DIR__."/../class/cls_tai_khoan.php" ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Đăng Ký</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
   
  <?php $login = new cls_tai_khoan(); ?>
  
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <!-- login img left -->
          <div class="col-md-5">
            <img src="img/login.jpg" alt="login" class="login-card-img">
          </div>

          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              </div>
              <p class="login-card-description">Đăng Ký Tài Khoản </p>

              <?php 
                if(isset($_POST['dang_nhap'])){
                  $ten = $_POST['ten_tk'];
                  $email = $_POST['email'];
                  $sdt = $_POST['sdt_tk'];
                  $mat_khau = $_POST['mat_khau'];
                  $vai_tro = 2;

                  $kq = $login->them_kt($ten,$email,$sdt,$mat_khau,$vai_tro);
                }
                
              ?>




        
              <form action="" method="POST" >
                  <div class="form-group">
                    <label for="text" class="sr-only">Tên Tài Khoản</label>
                    <input type="text" name="ten_tk"  class="form-control" placeholder="nhập tên">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="nhập email">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only"> Số Điện Thoại</label>
                    <input type="number" name="sdt_tk"  class="form-control" placeholder="nhập số điện thoại">
                  </div> 
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Mật Khẩu</label>
                    <input type="password" name="mat_khau" id="password" class="form-control" placeholder="nhập mật Khẩu">
                  </div>
                  <input name="dang_nhap" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Đăng Nhập">
                </form>
                <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
                <p class="login-card-footer-text">Bạn có tài khoản? <a href="./login.php" class="text-reset">Đăng Nhập ở đây</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
