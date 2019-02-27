<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT USER</h1>
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
                                
                                $role           = $_POST['role'];
                                $username       = strtoupper($_POST['username']);
                                $password       = $_POST['password'];

                                    $input = mysqli_query($conn,"INSERT INTO tbl_user SET
                                            username        = '$username',
                                            password        = '$password',
                                            role            = '$role'    
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
                                        url=?page=user'>";
                                    }
                            }
                            ?>
                        </div>
                        <div class="box-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>