<section class="w3l-index5" id="about">
  <div class="new-block py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center">
        <h3>Berita Terbaru</h3>
      </div>
      <?php
        $sql ="Select * from tbberita order by id_berita desc limit 4";
        $q = mysqli_query($k,$sql);
        while($r = mysqli_fetch_assoc($q)){
        ?>
      <div class="list-single-view mt-5">
        <div class="row">
          <div class="col-md-12 mt-3">
            <div class="grids5-info">
              <a href="#url" class="d-block zoom"><img src="../gambar/<?=$r['gambar']?>" alt="" class="img-fluid news-image"></a>
              <div class="blog-info">
                <p class="date"><?=$r['tanggal']?></p>
                <h4><?=$r['judul_berita']?></h4>
                <p class="blog-text">
                    <?=$r['content_berita']?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>
 <section class="w3l-index-block4">
  <div class="feature-16-main py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center">
        <h3>Agenda Terbaru</h3>
        <hr>
      </div>
      <div class="features-grids">
        <div class="row">
        <?php
        $sql1 ="Select * from tbagenda order by id_agenda desc limit 4";
        $q1 = mysqli_query($k,$sql1);
        while($r1 = mysqli_fetch_assoc($q1)){
        ?>    
          <div class="col-md-6">
            <div class="feature-16-gd">
              <div class="icon">
                <img src="assets/images/seminors.png" class="img-fluid" alt="">
              </div>
              <div class="feature-16-gd-info">
                <h4 class="mt-4 mb-2"><?=$r1['judul_agenda']?></h4>
                <p><?=$r1['content_agenda']?></p>               
              </div>
            </div>
          </div>
        <?php } ?>    
        </div>
      </div>
    </div>
  </div>
</section>
