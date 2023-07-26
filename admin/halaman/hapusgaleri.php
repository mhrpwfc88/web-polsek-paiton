<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbgaleri WHERE id_galeri = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=galeri'</script>";

?>