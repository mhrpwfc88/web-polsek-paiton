<h3>Data Biodata</h3>
<hr>
<a href=".?hal=tambahbiodata" class="btn btn-primary">Tambah data</a>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href=".">Dashboard</a></li>
    <li class="breadcrumb-item active">Biodata</li>
</ol>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Pimpinan</th>
                    <th>jabatan</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Pimpinan</th>
                    <th>jabatan</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "Select * from tbbiodata";
                $q = mysqli_query($k, $sql);
                while ($r = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $r['nama_pimpinan'] ?></td>
                        <td><?= $r['telepon'] ?></td>
                        <td><?= $r['visi'] ?></td>
                        <td><?= $r['misi'] ?></td>
                        <td>
                            <a href=".?hal=ubahbiodata&id=<?= $r['id_biodata'] ?>">Ubah</a>
                            -
                            <a onclick="return confirm('Apakah anda yakin akan menghapus ?')" href=".?hal=hapusbiodata&id=<?= $r['id_biodata'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>