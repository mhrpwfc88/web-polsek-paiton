<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbbiodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=biodata'</script>";

?>