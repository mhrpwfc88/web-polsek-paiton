<h3 class="mt4">Data User</h3>
<hr>
<a href=".?hal=tambahuser" class="btn btn-primary">Tambah data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                      $sql ="Select * from tbuser";
                      $q = mysqli_query($k,$sql);
                      while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                <td><?=$r['nama_user']?></td>
                <td><?=$r['telepon']?></td>
                <td><?=$r['username']?></td>
                <td><?=$r['alamat']?></td>
                    <td>
                    <a href=".?hal=ubahuser&id=<?=$r['id_user']?>">Ubah</a>
                    -
                    <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapususer&id=<?=$r['id_user']?>">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>