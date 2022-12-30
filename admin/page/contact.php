<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Contact</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama</th>
                                            <th>email</th>
                                            <th>pesan</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $k = mysqli_connect("localhost", "root", "", "portofolio");
                                            $no=1;
                                            $sql = "SELECT * FROM contact";
                                            $q = mysqli_query($k, $sql);
                                            while($r = mysqli_fetch_assoc($q)) {
                                            ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $r['name'] ?></td>
                                            <td><?= $r['email'] ?></td>
                                            <td><?= $r['massage'] ?></td>
                                            <td>
                                            <a onclick="return confirm('Yakin?')" href=".?page=hapuscontact&id=<?=$r['id']?>">❌hapus</a>
                                            </td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>