<?php
    $sql = "SELECT * FROM tbbiodata";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<section class="w3l-about1" id="about">
  <div id="cwp23-block" class="py-5">
    <div class="container py-lg-5">
      <div class="row cwp23-content align-items-center">
        <div class="col-lg-6 cwp23-text">
          <div class="cwp23-title">
            <h3>Profil Polsek Paiton</h3>
          </div>
          <div class="cwp23-text-cols">
            <div class="column">
              <span class="fa fa-user" aria-hidden="true"></span>
              <a href="services.html">Kepala polsek</a>
              <p><?=$r['nama_pimpinan']?></p>
            </div>
            <div class="column">
              <span class="fa fa-user" aria-hidden="true"></span>
              <a href="services.html">Jabatan</a>
              <p><?=$r['telepon']?></p>
            </div>
            <div class="column">
              <span class="fa fa-users" aria-hidden="true"></span>
              <a href="services.html">Email</a>
              <p><?=$r['visi']?></p>
            </div>
            <div class="column">
              <span class="fa fa-users" aria-hidden="true"></span>
              <a href="services.html">Alamat</a>
              <p><?=$r['misi']?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 cwp23-img">
          <img src="assets/images/polsek.paiton.jpg" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>