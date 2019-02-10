<section class="content-header">
    <h1>User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a>User</a></li>
    </ol>
</section>
<?php
    $query = $conn->prepare("SELECT tbl_user.id_user,tbl_user.username,tbl_user.password,tbl_user.email,COUNT(tbl_news.id_category) as Hasil
                            FROM tbl_user 
                            LEFT OUTER JOIN tbl_news ON tbl_user.id_user=tbl_news.id_user
                            WHERE role=1 GROUP BY tbl_user.id_user");   
    $query->execute();
    $data = $query->fetchAll();
?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>USER</b> | List</h3>
                    <div class="pull-right">
                        <a class="btn btn-danger" href="?page=useradd">
                            <span class="fa fa-plus-circle"></span> Add Data
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>NO</th>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>EMAIL</th>
                                <th>POST</th>
                                <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                foreach($data as $value){ ?>
                                    <tr>
                                    <td><?= $no ?></td>
                                    <td><a href="#" class="btn btn-success btn-xs"><i class="fa fa-user"></i> <?= $value['username'] ?></a></td>
                                    <td><?= $value['password'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><a href="#" class="btn btn-success btn-xs"><?= $value['Hasil'] ?> Post</a></td>
                                    <td>
                                    <a class="btn btn-primary btn-xs" href="?page=useredit&id=<?= $value['id_user']?>"><i class="fa fa-edit"></i> Edit</a>
                                    <a class="btn btn-danger btn-xs" href="?page=userdelete&id=<?= $value['id_user']?>"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                            <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>