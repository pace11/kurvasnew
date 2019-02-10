<section class="content-header">
    <h1 <i class="fa fa-plus-star"></i>INPUT PENGAWAS</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<?php 
    $getdata = mysqli_query($conn, "SELECT * FROM tbl_input5 WHERE nodin_ren='$_GET[id]'") or die (mysqli_error($conn));
    $data    = mysqli_fetch_array($getdata);

?>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Tambah Data</h3>
                        </div>
                        
                        <form action="?page=input2tambahpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nodin Renus</label>    
                                        <input type="text" class="form-control" name="nodin_ren" placeholder="Masukan Nodin" value="<?= $data['nodin_ren'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label>Uraian</label>    
                                        <input type="text" class="form-control" name="uraian" placeholder="Masukan uraian" value="<?= $data['uraian'] ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label>Harga</label>    
                                        <input type="text" class="form-control" name="harga" placeholder="Masukan harga" value="<?= $data['harga'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label>Bobot(%)</label>    
                                        <input type="text" class="form-control" name="bobot" placeholder="Masukan bobot" value="<?= $data['bobot'] ?>"required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hari Kerja</label>
                                        <input type="number" min="1" max="5" placeholder="masukkan minggu ke ..." class="form-control" name="hari_kerja_week" value="<?= $data['hari_kerja_week'] ?>">
                                        <input type="hidden" name="counter" class="form-control" id="counter" value="1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label>Masa SPJ</label>    
                                        <input type="text" class="form-control" name="masa_spj" placeholder="Masukan masa spj" value="<?= $data['masa_spj'] ?>" required>
                                    </div>
                                </div>
                             </div>
            
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <input type="submit" name="submit" class="btn btn-danger" value = "Batal">
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>