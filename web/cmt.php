<?php include "./layout.php" ?>
<?php require_once __DIR__ . "/../class/cls_tai_khoan.php" ?>


<main>

    <div class="container">
        <div class="row bootstrap snippets bootdeys">
            <div class="col-md-8 col-sm-12">
                <div class="comment-wrapper">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Bảng Đánh giá
                        </div>

                        <?php
                        $danh_gia = new cls_tai_khoan();
                        if (isset($_POST['sup_post'])) {
                            $noi_dung = $_POST['danh_gia'];
                            $id = $_SESSION['id_tk'];
                            $date = date('Y/m/d h:i:s a', time());

                            $kq = $danh_gia->them_dg($noi_dung, $id, $date);
                        }

                        ?>

                        <div class="panel-body">
                            <form action="" method="POST">
                                <textarea class="form-control" name="danh_gia" placeholder="đánh giá ở đây..." rows="3"></textarea>
                                <br>
                                <button type="submit" name="sup_post" class="btn btn-info pull-right">Post</button>
                            </form>


                            <div class="clearfix"></div>
                            <hr>



                            <ul class="media-list">
                                <?php
                                $result = $danh_gia->ds_chitiet();
                                if (!empty($result)) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <span class="text-muted pull-right">  
                                                    <small class="text-muted"><?php echo $row['ngay_dg'];?> </small>
                                                </span>
                                                <strong class="text-success"><?php echo $row['email'];?>  </strong>
                                                <p>
                                                    <?php echo $row['noi_dung']; ?>
                                                </p>
                                            </div>
                                        </li>
                                <?php
                                    }
                                }
                                ?>





                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include "./layout2.php" ?>