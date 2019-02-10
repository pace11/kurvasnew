<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> EDIT DIREKSI PEKERJAAN</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit Data</h3>
                        </div>
                        
                        <div class="box-body">
                            <?php
                            
                            if (isset($_POST['submit'])){
                                
                                $nomer_pjn_spj   = $_POST['nomer_pjn_spj'];
                                $tanggal_awal    = date("Y-m-d", strtotime($_POST['tanggal_awal']));
                                $tanggal_akhir   = date("Y-m-d", strtotime($_POST['tanggal_akhir']));
                                $pengawas        = $_POST['pengawas'];
                                $jenis_pekerjaan = $_POST['jenis_pekerjaan'];

                                    $input = mysqli_query($conn,"UPDATE tbl_input4 SET
                                            tanggal_awal    = '$tanggal_awal',
                                            tanggal_akhir   = '$tanggal_akhir',
                                            pengawas        = '$pengawas',
                                            jenis_pekerjaan = '$jenis_pekerjaan'
                                            WHERE nomer_pjn_spj = '$nomer_pjn_spj'
                                            ") or die (mysqli_error($conn));
                                                                    
                                    if ($input){
                                        echo    '<div class="row">'.
                                                    '<div class="col-md-12">'.
                                                        '<div class="alert alert-success alert-dismissible">'.
                                                        '<h5><i class="icon fa fa-check"></i> Alert!</h5>'.
                                                        'Data berhasil diedit.</div>'.
                                                    '</div>'.
                                                '</div>';
                                        echo "<meta http-equiv='refresh' content='1;
                                        url=?page=input1'>";
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>