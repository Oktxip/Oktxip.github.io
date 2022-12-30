<h1 class="mt-4">Data Berita</h1>
<hr>
<a href=".?hal=tambahberita" class="btn btn-primary">Tambah Data</a> 
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul Berita</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Judul Berita</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>  
            <tbody>
                <?php
                    $sql = "SELECT * FROM blog";
                    $q = mysqli_query($k,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$r['judul_berita']?></td>
                    <td><?=$r['content_berita']?></td>
                    <td><img src="../gambar/<?=$r['gambar']?> "alt="" width="128" height="85"></td>
                    <td><?=$r['tanggal']?></td>
                    <td>
                        <a href=".?hal=ubahberita&id=<?=$r['id_berita']?>">Ubah</a>
                        -
                        <a onclick="return confirm('Yakin?')" href=".?hal=hapusberita&id=<?=$r['id_berita']?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
