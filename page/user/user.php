<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> USER </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="pull-left">
                                <h3 class="box-title">Data Table User</h3>
                            </div>
                            <div class="pull-right">
                                <a href="?page=usertambah" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah Data</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="table1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql = mysqli_query($conn,"SELECT * FROM tbl_user WHERE role <> 0 AND role <> 3") or die (mysqli_error($conn));
                                        while($data = mysqli_fetch_array($sql)){ ?>
                                            <tr>    
                                                <td><?= $no ?></td>
                                                <td><?= $data['name'] ?></td>
                                                <td><a class="btn btn-success btn-sm" href="#"><i class="fa fa-user"></i> <?= $data['username'] ?></a></td>
                                                <td>*****</td>
                                                <td>
                                                <?php 
                                                if ($data['role'] == 1) {
                                                    echo "<a class='btn btn-info btn-sm' href='#'>MANAGER</a>";
                                                } 
                                                elseif ($data['role'] == 2) {
                                                    echo "<a class='btn btn-info btn-sm' href='#'>SEKRETARIS</a>";
                                                } else {
                                                    echo "<a class='btn btn-info btn-sm' href='#'>PENGAWAS</a>";
                                                }

                                                ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="?page=useredit&id=<?php echo $data['id_user']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="?page=userhapus&id=<?php echo $data['id_user']; ?>"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>