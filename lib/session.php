<?php 
   //kiểm tra admin và khách hàng đã đăng nhập hay chưa
   class session{
    public static function checkSession(){
        if(session_id() == "")session_start();
        if(!isset($_SESSION["isLogin"])){
             session_destroy();
             header("location:/du_an_1/duan/login/login.php");
        }
    }
  
   
    //trang đã đăng nhập rồi 
    public static function checkLogin(){
        if(session_id() == "")session_start();
        if(isset($_SESSION["isLogin"])){
            header("Location: ../Admin/ql_kieu_toc/kieu_toc.php" );
        }

    } 
   

    public static function checkLogin_web(){
        if(session_id() == "")session_start();
        if(isset($_SESSION['isLogin'])){
            header("location:../web/trangchu.php");
        }
    }

}


?> 