<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbberita WHERE id_berita = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=berita'</script>";

?>