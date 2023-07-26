<h3 class="mt-4">Form User</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nama</label>
                <input name="txtnama" class="form-control py-4" type="text" placeholder="Masukkan nama" />
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txttelepon" class="form-control py-4" type="text" placeholder="Masukkan no telepon" />
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <input name="txtalamat" class="form-control py-4" type="text" placeholder="Masukkan alamat" />
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1">Username</label>
                <input name="txtuser" class="form-control py-4" type="text" placeholder="Masukkan username" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1">Password</label>
                <input name="txtpassword" class="form-control py-4" type="password" placeholder="Masukkan password" />
            </div>
        </div>
    </div>
    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
        if (@$_POST['simpan']) {
            $nama = $_POST['txtnama'];
            $telepon = $_POST['txttelepon'];
            $alamat = $_POST['txtalamat'];
            $user = $_POST['txtuser'];
            $password = md5($_POST['txtpassword']);
            mysqli_query($k,"INSERT INTO tbuser(nama_user,telepon,alamat,username,password)VALUES('$nama','$telepon','$alamat','$user','$password')");
            echo "<script>alert('Data berhasil disimpan');location='.?hal=user'</script>";
        }
    ?>
</form>
