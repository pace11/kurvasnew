<section class="content-header">
    <h1><i class="fa fa-plus-circle"></i> USER </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<?php 

    $getdata = mysqli_query($conn, "SELECT * FROM tbl_user WHERE id_user=$_GET[id]") or die (mysqli_error($koneksi));
    $data    = mysqli_fetch_array($getdata);
    
?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit Data</h3>
                        </div>
                        
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="?page=usereditpro" method="post" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Hak Akses/Role</label>
                                                <select name="role" class="form-control">
                                                    <option value="1" <?= ($data['role'] == 1) ? "SELECTED" : ""; ?>>MANAGER</option>
                                                    <option value="2" <?= ($data['role'] == 2) ? "SELECTED" : ""; ?>>SEKRETARIS</option>
                                                </select>
                                                <input type="hidden" class="form-control" name="id_user" value="<?= $data['id_user'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="name" placeholder="masukkan username ..." value="<?= $data['name'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="user_name" style="text-transform:uppercase;" placeholder="masukkan username ..." value="<?= $data['username'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input id="password-field" type="password" class="form-control" name="user_password" placeholder="masukkan password ..." value="<?= $data['password'] ?>" required>
                                                <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <a href="?page=user" class="btn btn-danger">Batal</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
