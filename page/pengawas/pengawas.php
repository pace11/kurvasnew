<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> PENGAWAS </h1>
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
                                <h3 class="box-title">Data Table Pengawas</h3>
                            </div>
                            <div class="pull-right">
                                <a href="?page=pengawastambah" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah Data</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="table1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA PENGAWAS</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = mysqli_query($conn,"SELECT * FROM tbl_pengawas") or die (mysqli_error($conn));
                                        while($data = mysqli_fetch_array($sql)){ ?>
                                            <tr>    
                                                <td><?= $data['id'] ?></td>
                                                <td><?= $data['pengawas'] ?></a></td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="?page=pengawasedit&id=<?php echo $data['pengawas']; ?>"><i class="fa fa-edit"></i> Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="?page=pengawashapus&id=<?php echo $data['pengawas']; ?>"><i class="fa fa-trash"></i> hapus</a>
                                                </td>
                                            </tr>
                                        <?php  } ?>
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