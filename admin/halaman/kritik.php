<h3>Data Kritik dan Saran</h3>
<hr>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href=".">Dashboard</a></li>
    <li class="breadcrumb-item active">Kritik dan Saran</li>
</ol>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                      $sql ="Select * from tbpesan";
                      $q = mysqli_query($k,$sql);
                      while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                <td><?=$r['email']?></td>
                <td><?=$r['pesan']?></td>
                <td><?=$r['tanggal']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>