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
                    <h3 class="box-title"><b>USER</b> | Add</h3>
                </div>

                <div class="box-body">
                <?php
                    if (isset($_POST['submit'])){
                            
                        $username   = $_POST['username'];
                        $password   = $_POST['password'];
                        $email      = $_POST['email'];
                        $role       = 1;
                        
                        try {
                            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $pdo = $conn->prepare('INSERT INTO tbl_user (username, password, email, role) values (:username, :password, :email, :role)');
                            $insertdata = array(':username'=>$username , ':password'=>$password, 'email'=>$email, 'role'=>$role);
                            $pdo->execute($insertdata);
                            
                            echo    '<div class="row"><div class="col-md-12"><div class="alert alert-success alert-dismissible">'.
                                    '<h4><i class="icon fa fa-check"></i> Alert!</h4>'.
                                    'Add data success'.
                                    '</div></div></div>';
                            echo "<meta http-equiv='refresh' content='1;
                            url=?page=user'>";

                        } catch (PDOexception $e) {
                            print "Tambah User Gagal: " . $e->getMessage() . "<br/>";
                           die();
                        }
                        
                    }

                    
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

