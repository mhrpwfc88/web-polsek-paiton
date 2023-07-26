<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbbiodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Biodata</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nama Pimpinan</label>
                <input name="txtpimpinan" value="<?=$r['nama_pimpinan']?>" class="form-control py-4" type="text" placeholder="Masukkan nama pimpinan" />
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txttelepon" value="<?=$r['telepon']?>" class="form-control py-4" type="text" placeholder="Masukkan no telepon" />
    </div>

    <div class="form-group">
        <label class="small mb-1">Visi</label>
        <textarea name="txtvisi" cols="30" rows="10" class="form-control py-4"><?=$r['visi']?></textarea>
    </div>

    <div class="form-group">
        <label class="small mb-1">Misi</label>
        <textarea name="txtmisi" cols="30" rows="10" class="form-control py-4"><?=$r['misi']?></textarea>
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

            mysqli_query($k,"UPDATE tbbiodata SET nama_pimpinan = '$nama_pimpinan', telepon = '$telepon', visi = '$visi', misi = '$misi' WHERE id_biodata = '$id'");
            echo "<script>alert('Data berhasil disimpan');location='.?hal=biodata'</script>";
        }
    ?>
</form>
