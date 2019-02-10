<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT DIREKSI PEKERJAAN</h1>
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
                            <h3 class="box-title">Form Tambah Data</h3>
                        </div>
                        
                        <div class="box-body">
                            <?php
                            
                            if (isset($_POST['submit'])){
                                
                                $no_1            = $_POST['no_1'];
                                $no_2            = $_POST['no_2'];
                                $nomer_pjn_spj   = $no_1."/DAN 02.03/A.BLG/".$no_2;
                                $tanggal_awal    = date("Y-m-d", strtotime($_POST['tanggal_awal']));
                                $tanggal_akhir   = date("Y-m-d", strtotime($_POST['tanggal_akhir']));
                                $pengawas        = $_POST['pengawas'];
                                $jenis_pekerjaan = $_POST['jenis_pekerjaan'];

                                    $input = mysqli_query($conn,"INSERT INTO tbl_input4 SET
                                            nomer_pjn_spj   = '$nomer_pjn_spj',
                                            tanggal_awal    = '$tanggal_awal',
                                            tanggal_akhir   = '$tanggal_akhir',
                                            pengawas        = '$pengawas',
                                            jenis_pekerjaan = '$jenis_pekerjaan'
                                            ") or die (mysqli_error($conn));
                                                                    
                                    if ($input){
                                        echo    '<div class="row">'.
                                                    '<div class="col-md-12">'.
                                                        '<div class="alert alert-success alert-dismissible">'.
                                                        '<h5><i class="icon fa fa-check"></i> Alert!</h5>'.
                                                        'Data berhasil disimpan.</div>'.
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