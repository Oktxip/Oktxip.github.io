<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM blog WHERE Id_berita = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?page=blog'</script>";