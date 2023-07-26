<section class="w3l-team" id="team">
  <div class="team-block py-5">
    <div class="container py-lg-5">
      <div class="wthree-title">
        <div class="header-section text-center">
          <h3 class="mb-2">Galeri</h3>
        </div>
      </div>
      <div class="row mt-md-5 mt-4">
        <div class="col-md-5 mx-4">
        <?php
        $sql ="Select * from tbgaleri";
        $q = mysqli_query($k,$sql);
        while($r = mysqli_fetch_assoc($q)){
        ?>
          <div class="box2">
          <div class="card-header p-0 position-relative">

            <a href="#url"><img src="../gambar/<?=$r['gambar']?>" alt="" class="img-fluid" /></a>
            <div class="box-content">
              <h3 class="title"><a href="#url"><?=$r['judul_galeri']?></a></h3>
              <span class="post"><?=$r['tanggal']?></span>
              <ul class="social">
              </ul>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </div>
</section>