<section class="content-header">
    <h1>Beranda</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Beranda</a></li>
    </ol>
</section>

<section class="content container-fluid">
    <div class="row">    
        <div class="col-md-12">
            <?php if ($userdata['role'] == 1 || $userdata['role'] == 2) { ?>
            <div class="row">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <div class="pull-left">
                            <h3 class="box-title">Data Table Direksi Pekerjaan</h3>
                        </div>
                    </div>
                    
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="table1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NOMOR PJN/SPJ</th>
                                    <th>TANGGAL AWAL</th>
                                    <th>TANGGAL AKHIR </th>
                                    <th>PENGAWAS</th>
                                    <th>JENIS PEKERJAAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = mysqli_query($conn, "SELECT * FROM tbl_input4");
                                    while($data = mysqli_fetch_array($query)) { ?>
                                        <tr>
                                            <td><a class="btn btn-success btn-sm"><?= $data['nomer_pjn_spj'] ?></a></td>
                                            <td><?= $data['tanggal_awal'] ?></td>
                                            <td><?= $data['tanggal_akhir'] ?></td>
                                            <td><?= $data['pengawas'] ?></td>
                                            <td><?= $data['jenis_pekerjaan'] ?></td>
                                            <td>

                                            <?php if ($page == 'dashboard') { ?>
                                            <a class="btn btn-primary btn-sm" href="?page=direksipekerjaanedit&id=<?php echo $data['nomer_pjn_spj']; ?>"><i class="fa fa-edit"></i> edit</a>
                                            <a class="btn btn-danger btn-sm" href="?page=direksipekerjaanhapus&id=<?php echo $data['nomer_pjn_spj']; ?>"><i class="fa fa-trash"></i> hapus</a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } else { 
    
    $hitusers  = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_user WHERE role <> 0"));
        
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="small-box bg-blue">
                        <div class="inner">
                        <h3><?= $hitusers ?></h3>

                        <p>All Users</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>