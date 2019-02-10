<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT DIREKSI PEKERJAAN </h1>
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
                                <h3 class="box-title">Data Table Direksi Pekerjaan</h3>
                            </div>
                            <div class="pull-right">
                                <a href="?page=input1tambah" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah Data</a>
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

                                                    <?php if ($page == 'input1') { ?>
                                                    <a class="btn btn-primary btn-sm" href="?page=input1edit&id=<?php echo $data['nomer_pjn_spj']; ?>"><i class="fa fa-edit"></i> edit</a>
                                                    <a class="btn btn-danger btn-sm" href="?page=input1hapus&id=<?php echo $data['nomer_pjn_spj']; ?>"><i class="fa fa-trash"></i> hapus</a>
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
    </div>
</section>