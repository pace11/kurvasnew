<section class="content-header">
    <h1> <i class="fa fa-plus-circle"></i> EDIT PENGAWAS</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<?php 
    $getdata = mysqli_query($conn, "SELECT * FROM tbl_pengawas WHERE pengawas='$_GET[id]'") or die (mysqli_error($conn));
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
                        
                        <form action="?page=pengawaseditpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>NO</label>    
                                        <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>" placeholder="masukan nama pengawas" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>PENGAWAS</label>    
                                        <input type="text" class="form-control" name="pengawas" value="<?= $data['pengawas'] ?>" placeholder="masukan nama pengawas">
                                    </div>
                                </div>
                            </div>                      
                        
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <a href="?page=pengawas" class="btn btn-danger">Batal</a>    
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>