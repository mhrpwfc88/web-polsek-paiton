<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbagenda WHERE id_agenda = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=agenda'</script>";

?>