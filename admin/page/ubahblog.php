<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM blog WHERE id_berita = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<div class="container-fluid">

<h3  class="mt-4">Form Berita</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="mt-4">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="form-floating mb-3 mb-md-0">
                    <input name="txtjudul" value="<?=$r['judul_berita']?>" class="form-control"  type="text" placeholder="Masukkan Judul" />
                    <label for="inputFirstName">Judul</label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
        <textarea name="txtkonten" cols="30" rows="10" class="form-control"><?=$r['content_berita']?></textarea>
        <label for="inputEmail">Konten</label>
    </div>
    <div class="form-floating mb-3">
        <input name="txttgl" value="<?=$r['tanggal']?>"  class="form-control" type="date" />
        <label for="inputEmail">Tanggal</label>
    </div>
    <div class="form-floating mb-3">
        <input name="txtgbr" value="<?=$r['gambar']?>" class="form-control" type="file" />
        <label for="inputEmail">Gambar</label>
    </div>
    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
        </div>
    </div>
    <?php
        if (@$_POST['simpan']) {
            $judul = $_POST['txtjudul'];
            $konten = $_POST['txtkonten'];
            $tgl = $_POST['txttgl'];
            $gambar = $_FILES['txtgbr']['name'];
            $tmp = $_FILES['txtgbr']['tmp_name'];
            $iduser = "1";

            if(empty($gambar)){
                mysqli_query($k,"UPDATE blog SET  judul_berita='$judul',tanggal='$tgl',content_berita='$konten',id_user='$iduser'  WHERE id_berita = '$id'");
            }else{
                mysqli_query($k,"UPDATE blog SET  judul_berita='$judul',tanggal='$tgl',gambar='$gambar',id_user='$iduser' content_berita='$konten' WHERE id_berita = '$id'");
                copy($tmp,"../gambar/$gambar");
            }
            echo "<script>alert('Data berhasil disimpan');location='.?page=blog'</script>";
        }
    ?>
</form>
    </div>