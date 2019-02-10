<section class="content-header">
    <h1>User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>User</a></li>
    </ol>
</section>
<?php 
    $id = $_GET['id'];
    $result = $conn->prepare("SELECT * FROM tbl_user WHERE id_user =:id");
    $result->bindparam(':id', $id);
    $result->execute();
    $row=$result->fetch(PDO::FETCH_OBJ);      
?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>USER</b> | Edit</h3>
                </div>

                <div class="box-body">
                <form action="?page=usereditpro" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="hidden" name="iduser" value="<?= $row->id_user ?>">
                                <input type="text" class="form-control" name="username" value="<?= $row->username ?>" placeholder="enter username ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="text" class="form-control" name="password" value="<?= $row->password ?>" placeholder="enter password ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" value="<?= $row->email ?>" placeholder="enter email address ..." required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    <a href="?page=user" class="btn btn-danger">Back</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

