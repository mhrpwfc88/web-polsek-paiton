<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbagenda WHERE id_agenda = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Agenda</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Judul</label>
                <input name="txtjudul" value="<?=$r['judul_agenda']?>" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txttanggal" value="<?=$r['tanggal']?>" class="form-control py-4" type="date" />
    </div>

    <div class="form-group">
        <label class="small mb-1">Konten</label>
        <textarea name="txtkonten" cols="30" rows="10" class="form-control py-4"><?=$r['content_agenda']?></textarea>
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
        if (@$_POST['simpan']) {
            $judul = $_POST['txtjudul'];
            $tanggal = $_POST['txttanggal'];
            $konten = $_POST['txtkonten'];
            $iduser = "1";

            mysqli_query($k,"UPDATE tbagenda SET judul_agenda = '$judul', tanggal = '$tanggal', content_agenda = '$konten', id_user = '$iduser' WHERE id_agenda = '$id'");
            echo "<script>alert('Data berhasil disimpan');location='.?hal=agenda'</script>";
        }
    ?>
</form>
