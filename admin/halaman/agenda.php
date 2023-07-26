<h3>Data Agenda</h3>
<hr>
<a href=".?hal=tambahagenda" class="btn btn-primary">Tambah data</a>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href=".">Dashboard</a></li>
    <li class="breadcrumb-item active">Agenda</li>
</ol>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                      $sql ="Select * from tbagenda";
                      $q = mysqli_query($k,$sql);
                      while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                <td><?=$r['judul_agenda']?></td>
                <td><?=$r['tanggal']?></td>
                <td><?=$r['content_agenda']?></td>
                <td>
                    <a href=".?hal=ubahagenda&id=<?=$r['id_agenda']?>">Ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusagenda&id=<?=$r['id_agenda']?>">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>