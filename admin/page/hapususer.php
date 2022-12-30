<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE Id_user = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?page=user'</script>";