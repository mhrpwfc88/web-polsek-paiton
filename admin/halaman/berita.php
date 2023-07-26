<h3>Data Berita</h3>
<hr>
<a href=".?hal=tambahberita" class="btn btn-primary">Tambah data</a>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href=".">Dashboard</a></li>
    <li class="breadcrumb-item active">Berita</li>
</ol>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                      $sql ="Select * from tbberita";
                      $q = mysqli_query($k,$sql);
                      while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                <td><?=$r['judul_berita']?></td>
                <td><?=$r['content_berita']?></td>                
                <td><?=$r['tanggal']?></td>
                <td>
                    <img src="../gambar/<?=$r['gambar']?>" alt="" width="70" height="70">
                </td>
                <td>
                    <a href=".?hal=ubahberita&id=<?=$r['id_berita']?>">Ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusberita&id=<?=$r['id_berita']?>">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>