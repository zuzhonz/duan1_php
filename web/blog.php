<?php include __DIR__ . "/layout.php" ?>
<?php require __DIR__ . "/../class/cls_kieu_toc.php" ?>
<style>
   .card {
       height: 500px;
        border-radius: 10px;
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.25);
        margin-top: 10px;
        margin-bottom: 20px;
   }
    .card img{
          width: 230px;
          height: 210px;
          border-radius: 10px;
          margin-top: 10px;
          margin-bottom: 20px;
   }
</style>
<main class="my-5">
  <div class="container">
    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-5"><strong>Latest posts</strong></h4>

      <div class="row">
        <?php
        $bv = new cls_kieu_toc();
        $result = $bv->hien_bv();
        if (isset($result)) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="../img/<?php echo $row['anh_bv'] ?>" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['ten_bv'] ?></h5>
                  <p class="card-text">
                    <?php echo $row['mo_ta_bv'] ?>
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>

        <?php
          }
        }



        ?>

      </div>
    </section>
    <!--Section: Content-->

    <!-- Pagination -->
    <!-- <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav> -->
  </div>
</main>
<!--Main layout-->

<?php include __DIR__ . "/layout2.php" ?>