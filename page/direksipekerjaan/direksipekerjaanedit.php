<section class="content-header">
    <h1> <i class="fa fa-plus-circle"></i> EDIT DIREKSI PEKERJAAN</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<?php 
    $getdata = mysqli_query($conn, "SELECT * FROM tbl_input4 WHERE nomer_pjn_spj='$_GET[id]'") or die (mysqli_error($conn));
    $data    = mysqli_fetch_array($getdata);

?>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit Data</h3>
                        </div>
                        <form action="?page=direksipekerjaaneditpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nomor PJN/SPJ</label>    
                                        <input type="text" class="form-control" name="nomer_pjn_spj" placeholder="Masukan Nomor PJN/SPJ" value="<?= $data['nomer_pjn_spj'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label>    
                                        <input type="text" id="datepicker" class="form-control" name="tanggal_awal" placeholder="Masukan Tanggal Awal" autocomplete="off" value="<?= date('m/d/Y', strtotime($data['tanggal_awal'])) ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label>    
                                        <input type="text" id="datepicker2" class="form-control" name="tanggal_akhir" placeholder="Masukan Tanggal Akhir" autocomplete="off" value="<?= date('m/d/Y', strtotime($data['tanggal_akhir'])) ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pengawas</label>    
                                        <select class="form-control" name="pengawas">
                                            <?php
                                                $pengawas = mysqli_query($conn, "SELECT * FROM tbl_pengawas");
                                                while ($row = mysqli_fetch_array($pengawas)){ ?>
                                                    <option value="<?= $row['pengawas'] ?>"<?php if($row['pengawas'] == $data['pengawas']){echo "selected";} ?>><?= $row['pengawas'] ?></option>
                                            <?php   }   ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">   
                                        <label>Jenis Pekerjaan</label>
                                        <select class="form-control" name="jenis_pekerjaan">
                                            <option style="display:none;">-- pilih salah satu --</option>
                                            <option value="SKTM" <?= ($data['jenis_pekerjaan'] == 'SKTM') ? "SELECTED" : ""; ?>>SKTM</option>
                                            <option value="SIPIL" <?= ($data['jenis_pekerjaan'] == 'SIPIL') ? "SELECTED" : ""; ?>>SIPIL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <a href="?page=direksipekerjaan" class="btn btn-danger">Batal</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>