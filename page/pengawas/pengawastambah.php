<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT PENGAWAS</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>
<?php 

// $get_id = mysqli_query($conn, "SELECT nomer_pjn_spj FROM tbl_input4 WHERE SUBSTRING(nomer_pjn_spj,1,7)='PJN/SPJ'") or die (mysqli_error($conn));
//         $trim_id = mysqli_query($conn, "SELECT SUBSTRING(nomer_pjn_spj,-4,4) as hasil FROM tbl_input4 WHERE SUBSTRING(nomer_pjn_spj,1,7)='PJN/SPJ' ORDER BY hasil DESC LIMIT 1") or die (mysqli_error($conn));
//         $hit    = mysqli_num_rows($get_id);
//         if ($hit == 0){
//             $id_k   = "PJN/SPJ/".date("d-m-Y")."/0001";
//         } else if ($hit > 0){
//             $row    = mysqli_fetch_array($trim_id);
//             $kode   = $row['hasil']+1;
//             $id_k   = "PJN/SPJ/".date("d-m-Y")."/".str_pad($kode,4,"0",STR_PAD_LEFT); 
//         }
 ?>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Tambah Data</h3>
                        </div>
                        
                        <form action="?page=pengawastambahpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>PENGAWAS</label>    
                                        <input type="text" class="form-control" name="pengawas" placeholder="masukan nama pengawas">
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