<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">User</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href=".?page=tambahuser" class="btn btn-primary btn-user btn-block">
                                Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            $k = mysqli_connect("localhost", "root", "", "portofolio");
                                            $no=1;
                                            $sql = "SELECT * FROM user";
                                            $q = mysqli_query($k, $sql);
                                            while($r = mysqli_fetch_assoc($q)) {
                                            ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $r['nama'] ?></td>
                                            <td><?= $r['username'] ?></td>
                                            <td>
                                            <a href=".?page=ubahuser&id=<?=$r['id_user']?>">Ubah</a>
                                                -
                                            <a onclick="return confirm('Yakin?')" href=".?page=hapususer&id=<?=$r['id_user']?>">Hapus</a>
                                            </td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>