<h3 class="mt-4">Form Biodata</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nama Pimpinan</label>
                <input name="txtpimpinan" class="form-control py-4" type="text" placeholder="Masukkan nama pimpinan" />
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <label class="small mb-1">jabatan</label>
        <input name="txttelepon" class="form-control py-4" type="text" placeholder="Masukkan no telepon" />
    </div>

    <div class="form-group">
        <label class="small mb-1">Email</label>
        <textarea name="txtvisi" cols="30" rows="10" class="form-control py-4"></textarea>
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <textarea name="txtmisi" cols="30" rows="10" class="form-control py-4"></textarea>
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
        if (@$_POST['simpan']) {
            $nama_pimpinan = $_POST['txtpimpinan'];
            $telepon = $_POST['txttelepon'];
            $visi = $_POST['txtvisi'];
            $misi = $_POST['txtmisi'];
            mysqli_query($k,"INSERT INTO tbbiodata(nama_pimpinan,telepon,visi,misi)VALUES('$nama_pimpinan','$telepon','$visi','$misi')");
            echo "<script>alert('Data berhasil disimpan');location='.?hal=biodata'</script>";
        }
    ?>
</form>
