<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbuser WHERE id_user = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form User</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nama</label>
                <input name="txtnama" value="<?=$r['nama_user']?>" class="form-control py-4" type="text" placeholder="Masukkan nama" />
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txttelepon" value="<?=$r['telepon']?>" class="form-control py-4" type="text" placeholder="Masukkan no telepon" />
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <input name="txtalamat" value="<?=$r['alamat']?>" class="form-control py-4" type="text" placeholder="Masukkan alamat" />
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1">Username</label>
                <input name="txtuser" value="<?=$r['username']?>" class="form-control py-4" type="text" placeholder="Masukkan username" />
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
            $password = $_POST['txtpassword'];
            if(empty($password)){
                mysqli_query($k,"UPDATE tbuser SET nama_user = '$nama', telepon = '$telepon', alamat = '$alamat', username = '$user' WHERE id_user = '$id' ");
            }else{
                mysqli_query($k,"UPDATE tbuser SET nama_user = '$nama', telepon = '$telepon', alamat = '$alamat', username = '$user', password = '$password' WHERE id_user = '$id' ");
            }

            echo "<script>alert('Data berhasil disimpan');location='.?hal=user'</script>";
        }
    ?>
</form>
