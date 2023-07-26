<h3>Data Galeri</h3>
<hr>
<a href=".?hal=tambahgaleri" class="btn btn-primary">Tambah data</a>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href=".">Dashboard</a></li>
    <li class="breadcrumb-item active">Galeri</li>
</ol>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                      $sql ="Select * from tbgaleri";
                      $q = mysqli_query($k,$sql);
                      while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                <td><?=$r['judul_galeri']?></td>
                <td>
                    <img src="../gambar/<?=$r['gambar']?>" alt="" width="70" height="70">
                </td>
                <td><?=$r['tanggal']?></td>
                <td>
                    <a href=".?hal=ubahgaleri&id=<?=$r['id_galeri']?>">Ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusgaleri&id=<?=$r['id_galeri']?>">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>