<section class="content-header">
    <h1>User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>User</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>USER</b> | Edit</h3>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                Are you sure ?
                                <form action="?page=userdelete" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="iduser" value="<?= $_GET['id'] ?>">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Yes">
                                    <a class="btn btn-success" href="?page=user"><i class="fa fa-chevron-circle-left"></i> Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if(isset($_POST['submit'])){
                            $iduser = $_POST['iduser'];
                            try {
                                $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $pdo = $conn->prepare("DELETE FROM tbl_user WHERE id_user=:id");
                                $deletedata = array(':id' => $iduser);
                                $pdo->execute($deletedata);
                                
                                echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                        '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                        'Delete data success'.
                                        '</div></div></div>';
                                echo "<meta http-equiv='refresh' content='1;
                                url=?page=user'>";

                            } catch (PDOexception $e) {
                                print "hapus berita gagal: " . $e->getMessage() . "<br/>";
                               die();
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

