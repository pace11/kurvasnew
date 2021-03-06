<section class="content-header">
    <h1>INPUT TARGET</h1>
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
                        <h4><i class="fa fa-file-alt"></i> Form Hapus Data</h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="callout callout-danger">
                                    <h5>Peringatan !</h5>
                                    <p>Anda yakin ingin menghapus data ini ?</p>
                                <form action="?page=targethapus" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="nodin_ren" value="<?= $_GET['id'] ?>">
                                    <input class="btn btn-default" type="submit" name="submit" value="Ya">
                                    <a class="btn btn-info" href="?page=target"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                                </form>
                                </div>
                            </div>
                        </div>
                            <?php 
                            if(isset($_POST['submit'])){
                                $nomer_pjn_spj = $_POST['nomer_pjn_spjn'];
                                $delete = mysqli_query($conn,"DELETE FROM tbl_input4 WHERE nomer_pjn_spj='$nomer_pjn_spj'") or die (mysqli_error($conn));
                                if ($delete){
                                    echo    '<div class="row">'.
                                                '<div class="col-md-12">'.
                                                    '<div class="alert alert-success alert-dismissible">'.
                                                    '<h5><i class="icon fa fa-check"></i> Alert!</h5>'.
                                                    'Data berhasil dihapus.</div>'.
                                                '</div>'.
                                            '</div>';
                                    echo "<meta http-equiv='refresh' content='1;
                                    url=?page=target'>";
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