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
                                <h3 class="box-title">Form Pengisian Pengawas</h3>
                            </div>
                        </div>
                        <div class="box-body">
                        <?php

                        if (isset($_POST['submit'])){

                            $nomer_pjn_spj   = $_POST['nopjn'];
                            $count           = $_POST['count'];
                            echo $count;
                            $jenispekerjaan  = $_POST['jenispekerjaan'];

                            if ($jenispekerjaan == 'SKTM'){
                                for ($a=1;$a<=$count;$a++) {    
                                    $isi['harga'] = $_POST["hargasktm".$a.""];
                                    $isi['bobot'] = $_POST["bobotsktm".$a.""];
                                    $isi['harikerja'] = $_POST["hari_kerjasktm".$a.""];
                                    $value[] = $isi;
                                }
                            } else {
                                for ($a=1;$a<=$count;$a++) {    
                                    $isi['harga'] = $_POST["hargasipil".$a.""];
                                    $isi['bobot'] = $_POST["bobotsipil".$a.""];
                                    $isi['harikerja'] = $_POST["hari_kerjasipil".$a.""];
                                    $value[] = $isi;
                                }
                            }
                            $valuePekerjaan = json_encode($value);
                            
                                $input = mysqli_query($conn,"INSERT INTO tbl_input2 SET
                                        nomer_pjn_spj   = '$nomer_pjn_spj',
                                        value_pekerjaan = '$valuePekerjaan'
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
</section>