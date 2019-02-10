<section class="content-header">
    <h1>INPUT PENGAWAS</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Beranda</a></li>
    </ol>
</section>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    
                    <div class="card-header">
                        <h4><i class="fa fa-file-alt"></i> Form Edit Data</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <?php
                        
                        if (isset($_POST['submit'])){
                                                        
                            $nodin_ren        = $_POST['nodin_ren'];
                            $uraian           = $_POST['uraian'];
                            $harga            = $_POST['harga'];
                            $bobot            = $_POST['bobot'];
                            $hari_kerja_week  = $_POST['hari_kerja_week'];
                            $masa_spj         = $_POST['masa_spj'];

                                $input = mysqli_query($conn,"UPDATE tbl_input5 SET
                                        nodin_ren         = '$nodin_ren',
                                        uraian            = '$uraian',
                                        harga             = '$harga',
                                        bobot             = '$bobot',
                                        hari_kerja_week   = '$hari_kerja_week',
                                        masa_spj          = '$masa_spj'                                        
                                        WHERE nodin_ren   = '$nodin_ren'
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
                                    url=?page=input2'>";
                                }
                            } 
                        ?>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>