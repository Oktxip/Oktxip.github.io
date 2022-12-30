<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Blog</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href=".?page=tambahblog" class="btn btn-primary btn-user btn-block">
                                Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                            <a href=".?page=ubahblog&id=<?=$r['id_berita']?>">Ubah</a>
                                                -
                                            <a onclick="return confirm('Yakin?')" href=".?page=hapusberita&id=<?=$r['id_berita']?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>