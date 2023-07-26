<section class="w3l-courses">
  <div class="blog py-5" id="courses">
    <div class="container py-lg-5">
      <div class="header-section text-center">
        <h3 class="mb-2">Berita</h3>
      </div>
      
      <div class="row mt-md-5 mt-4">
        <div class="col-md-12 mx-auto">
          <div class="owl-two owl-carousel owl-theme">
            <?php
              $sql ="Select * from tbberita";
              $q = mysqli_query($k,$sql);
              while($r = mysqli_fetch_assoc($q)){
            ?>
            <div class="item">
              <div class="card">
                <div class="card-header p-0 position-relative">
                  <a href="#url" class="zoom d-block">
                    <img class="card-img-bottom d-block" src="../gambar/<?=$r['gambar']?>" alt="Card image cap">
                  </a>
                  <div class="author">

                    <div class="course-title">
                      <a href="#url"><?=$r['judul_berita']?></a>
                    </div>
                  </div>
                </div>
                <div class="card-body course-details">
                  <a href="#url" class="course-desc"><?=$r['content_berita']?></a>
                </div>
              </div>              
            </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>