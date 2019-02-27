<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> INPUT USER</h1>
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
                        
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="?page=usertambahpro" method="post" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Hak Akses/Role</label>
                                                <select name="role" class="form-control">
                                                    <option value="1">MANAGER</option>
                                                    <option value="2">SEKRETARIS</option>
                                                    <option value="3">PENGAWAS</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="masukkan username ..." required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="masukkan password ..." required>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-info" value="Simpan">
                            <a href="?page=user" class="btn btn-danger">Batal</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>