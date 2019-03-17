<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> EDIT PENGAWAS</h1>
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
                                $id             = $_POST['id_user'];
                                $name           = $_POST['name'];
                                $username       = $_POST['user_name'];
                                $password       = $_POST['user_password'];

                                    $input = mysqli_query($conn,"UPDATE tbl_user SET
                                            name            = '$name',
                                            username        = '$username',
                                            password        = '$password'
                                            WHERE id_user   = $id
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
                                        url=?page=pengawas'>";
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