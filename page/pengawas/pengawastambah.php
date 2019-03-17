<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT PENGAWAS</h1>
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
                            <h3 class="box-title">Form Tambah Data</h3>
                        </div>
                        
                        <form action="?page=pengawastambahpro" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <a class="btn btn-success btn-flat">PENGAWAS</a>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>     
                                        <input type="text" class="form-control" name="name" placeholder="masukan nama pengawas" autocomplete="OFF" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>    
                                        <input type="text" class="form-control" name="user_name" placeholder="masukan username pengawas ..." autocomplete="OFF" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input id="password-field" type="password" class="form-control" name="user_password" placeholder="masukkan password pengawas ..." autocomplete="OFF" required>
                                        <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password"></span>
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