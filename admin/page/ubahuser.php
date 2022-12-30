<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id_user = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<div class="container-fluid">
<h3  class="mt-4">Form User</h3>
<hr>
<form method="post" action="">
    <div class="mt-4">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="form-floating mb-3 mb-md-0">
                    <input name="txtnama" value="<?=$r['nama']?>" class="form-control"  type="text" placeholder="Masukkan Nama" />
                    <label for="inputFirstName">Nama Lengkap</label>
                </div>
            </div>
        </div>
    </div>
  
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input name="txtuser" value="<?=$r['username']?>" class="form-control" type="text" placeholder="Masukkan Username" />
                <label for="inputPassword">Username</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input name="txtpasword" class="form-control" type="password" id="password" placeholder="Masukkan Pasword" value="<?=$r['password']?>" />
                <label for="inputPasswordConfirm">Password</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input type="checkbox" onclick="showPassword()"> Show Password</input>
                <script>
                    function showPassword() {
                        let temp = document.getElementById("password")
                        if(temp.getAttribute("type") == "text") {
                            temp.setAttribute("type", "password")
                        } else if(temp.getAttribute("type") == "password") {
                            temp.setAttribute("type", "text")
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-0">
        <div class="d-grid">
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
        </div>
    </div>
    <?php
        if (@$_POST['simpan']) {
            $nama = $_POST['txtnama'];          
            $user = $_POST['txtuser'];
            $pass = $_POST['txtpasword'];
            if(empty($pass)){
                mysqli_query($k,"UPDATE user SET nama='$nama',username='$user' WHERE id_user = '$id' ");
            }else{
                mysqli_query($k,"UPDATE user SET nama='$nama',username='$user',password='$pass'  WHERE id_user = '$id' ");
            }
             echo "<script>alert('Data berhasil disimpan');location='.?page=user'</script>";
        }
    ?>
</form>
                </div>