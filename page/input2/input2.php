<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT PENGAWAS </h1>
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
                                <h3 class="box-title">List Data</h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="table1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NOMER PJN SPJ</th>
                                            <th>VALUE PEKERJAAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            $query = mysqli_query($conn, "SELECT * FROM tbl_input2
                                                                          JOIN tbl_input4 ON tbl_input2.nomer_pjn_spj=tbl_input4.nomer_pjn_spj");
                                            while($data = mysqli_fetch_array($query)) { ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $data['nomer_pjn_spj'] ?></td>
                                                    <td>
                                                        <div class="panel box box-success">
                                                            <div class="box-header with-border">
                                                                <h4 class="box-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $no ?>">
                                                                Data <?= $data['nomer_pjn_spj'] ?>
                                                                </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse<?= $no ?>" class="panel-collapse collapse">
                                                                <div class="box-body">
                                                                    <?= getValPekerjaan($data['nomer_pjn_spj'],$data['jenis_pekerjaan']) ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <a class="btn btn-primary btn-sm" href="?page=input1edit&id=<?php echo $data['id_pekerjaan']; ?>"><i class="fa fa-edit"></i> edit</a>
                                                    <a class="btn btn-danger btn-sm" href="?page=input1hapus&id=<?php echo $data['id_pekerjaan']; ?>"><i class="fa fa-trash"></i> hapus</a>
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
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="pull-left">
                                <h3 class="box-title">Form Pengisian Pengawas</h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <form action="?page=input2tambahpro" method="post" enctype="multipart/form-data">
                                        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nomor PJN/SPJ</label>    
                                            <select id="nopjn" class="form-control" name="nopjn">
                                            <option style="display:none;">-- pilih salah satu --</option>
                                            <?php 
                                            $noPjn = mysqli_query($conn, "SELECT tbl_input4.nomer_pjn_spj as nomer FROM tbl_input4
                                                                          LEFT JOIN tbl_input2 ON tbl_input4.nomer_pjn_spj=tbl_input2.nomer_pjn_spj
                                                                          WHERE tbl_input2.nomer_pjn_spj IS NULL");
                                            while($getnoPjn = mysqli_fetch_array($noPjn)){
                                                echo "<option value='".$getnoPjn['nomer']."'>".$getnoPjn['nomer']."</option>";
                                            } 
                                            ?>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">   
                                            <label>Jenis Pekerjaan</label>
                                            <input type="text" id="jenispekerjaan" class="form-control" name="jenispekerjaan" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8" id="tblsktm">
                                    <?php
                                        $hitsktm  = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_sktm"));
                                    ?>
                                    <input type="hidden" name="count" value="<?= $hitsktm ?>">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Uraian</th>
                                                <th>Harga</th>
                                                <th>Bobot</th>
                                                <th>Hari Kerja</th>
                                            </tr>
                                            <?php
                                                $no = 1;
                                                $query = mysqli_query($conn, "SELECT * FROM tbl_sktm");
                                                while($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $data['id_sktm'] ?></td>
                                                    <td>
                                                        <input type="text" class="form-control fieldsktm" name="hargasktm<?= $no ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control fieldsktm" name="bobotsktm<?= $no ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control fieldsktm" name="hari_kerjasktm<?= $no ?>">
                                                    </td>
                                                </tr>
                                            <?php $no++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-8" id="tblsipil">
                                    
                                    <?php
                                        $hitsipil  = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbl_sipil"));
                                    ?>
                                    <input type="hidden" name="count" value="<?= $hitsipil ?>">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Uraian</th>
                                                <th>Harga</th>
                                                <th>Bobot</th>
                                                <th>Hari Kerja</th>
                                            </tr>
                                            <?php
                                                $no = 1;
                                                $query = mysqli_query($conn, "SELECT * FROM tbl_sipil");
                                                while($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $data['id_sipil'] ?></td>
                                                    <td>
                                                        <input type="text" class="form-control fieldsipil" name="hargasipil<?= $no ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control fieldsipil" name="bobotsipil<?= $no ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control fieldsipil" name="hari_kerjasipil<?= $no ?>">
                                                    </td>
                                                </tr>
                                            <?php $no++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" id="btninput2" name="submit" class="btn btn-success" value="Simpan">
                        </div>
                        </form>                               
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


