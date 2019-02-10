<?php 

    $user = $_SESSION['username'];
    $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$user'");
    $userdata = mysqli_fetch_array($sql);

    function getValPekerjaan($id,$kerja){
        include "lib/koneksi.php";
        if($kerja == 'SKTM'){
            $query = mysqli_query($conn,"SELECT * FROM tbl_sktm");
            $getval = mysqli_query($conn, "SELECT value_pekerjaan FROM tbl_input2 WHERE nomer_pjn_spj='$id'");
            $dataval = mysqli_fetch_array($getval);
            $json = json_decode($dataval['value_pekerjaan']);
            $no=0;
            echo "<div class='table-responsive'><table class='table table-bordered'><thead><tr><th>Uraian</th><th>Harga</th><th>Bobot</th><th>Hari Kerja</th></tr></thead><tbody>";
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$data['id_sktm']."</td>";
                echo "<td>".$json[$no]->harga."</td>";
                echo "<td>".$json[$no]->bobot."</td>";
                echo "<td>".$json[$no]->harikerja."</td>";
                echo "</tr>";
                $no++;
            }
            echo "</tbody></table></div>";
        } else {
            $query = mysqli_query($conn,"SELECT * FROM tbl_sipil");
            $getval = mysqli_query($conn, "SELECT value_pekerjaan FROM tbl_input2 WHERE nomer_pjn_spj='$id'");
            $dataval = mysqli_fetch_array($getval);
            $json = json_decode($dataval['value_pekerjaan']);
            $no=0;
            echo "<div class='table-responsive'><table class='table table-bordered'><thead><tr><th>Uraian</th><th>Harga</th><th>Bobot</th><th>Hari Kerja</th></tr></thead><tbody>";
            while($data = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$data['id_sipil']."</td>";
                echo "<td>".$json[$no]->harga."</td>";
                echo "<td>".$json[$no]->bobot."</td>";
                echo "<td>".$json[$no]->harikerja."</td>";
                echo "</tr>";
                $no++;
            }
            echo "</tbody></table></div>";
        }
    }

?>
<a href="?page=dashboard" class="logo">
    <span class="logo-mini"><b>A</b>DM</span>
    <span class="logo-lg">
    <i class="fa fa-user"></i> <?= $userdata['username'] ?>
    </span>
</a>
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="img/pln.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= strtoupper($userdata['username']) ?></span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                <img src="img/pln.png" class="img-circle" alt="User Image">
                    <p>
                        <?= "<b>".$userdata['username'] ."</b>"; ?>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="?page=logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </li> 
            </ul>
        </li>
    </ul>
    </div>
</nav>