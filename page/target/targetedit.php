<section class="content-header">
    <h1 <i class="fa fa-plus-star"></i>INPUT TARGET</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>

<?php 
    $getdata = mysqli_query($conn, "SELECT * FROM tbl_input5 WHERE nodin_ren='$_GET[id]'") or die (mysqli_error($conn));
    $data    = mysqli_fetch_array($getdata);

?>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Edit Data</h3>
                        </div>
                        
                        <form action="?page=targeteditpro" method="post" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Uraian</th>
                                <th>Harga</th>
                                <th>Bobot</th>
                                <th>Mulai Kerja(week)</th>
                                <th>Lama Kerja (week)</th>
                            </tr>
                            <?php
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM tbl_sipil");
                                while($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['id_sipil'] ?></td>
                                    <td>
                                        <input type="text" class="form-control fieldsipil" name="hargasipil<?= $no ?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control fieldsipil" name="bobotsipil<?= $no ?>" readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control fieldsipil" name="mulaikerjasipil<?= $no ?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control fieldsipil" name="lama_kerjasipil<?= $no ?>">
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                            </tbody>
                        </table>
                        
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                            <input type="submit" name="submit" class="btn btn-danger" value = "Batal">
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>