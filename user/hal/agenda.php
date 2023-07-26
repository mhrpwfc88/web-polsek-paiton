
<section class="w3l-index-block4">
  <div class="feature-16-main py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center">
        <h3>Agenda</h3>
        <p class="mt-3 mb-5">Agenda Terbaru</p>
      </div>
      <?php
              $sql ="Select * from tbagenda";
              $q = mysqli_query($k,$sql);
              while($r = mysqli_fetch_assoc($q)){
      ?>
      <div class="features-grids">
      <div class="row mt-md-5 mt-4">
        <div class="col-md-12 mx-auto">
              <div class="feature-16-gd-info">
                <h4 class="mt-4 mb-2"><?=$r['judul_agenda']?></h4>
                <p><?=$r['tanggal']?></p>
                <ul>
                <a class="course-desc"><?=$r['content_agenda']?></a>
                </ul>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section> 