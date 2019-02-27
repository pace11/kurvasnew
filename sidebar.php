<section class="sidebar">
    <div class="user-panel">
    <div class="pull-left image">
        
    </div>
    <div class="pull-left info">
        <p><?= $userdata->username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MONITORING PROYEK</li>
        <li class="<?php if ($_GET['page'] == 'dashboard'){ echo "active";} ?>">

            <a href="?page=dashboard"><i class="fa fa-home"></i> <span>Beranda</span></a>
        </li>
        <li class="<?php if ($_GET['page'] == 'pengawas' || $_GET['page'] == 'pengawastambah' || $_GET['page'] == 'pengawastambahpro' || $_GET['page'] == 'pengawasedit' || $_GET['page'] == 'pengawaseditpro' || $_GET['page'] == 'pengawashapus'){ echo "active";} ?>">
            <a href="?page=pengawas"><i class="fa fa-child"></i> <span>Pengawas</span></a>
        </li>
        <li class="<?php if ($_GET['page'] == 'user' || $_GET['page'] == 'usertambah' || $_GET['page'] == 'usertambahpro' || $_GET['page'] == 'useredit' || $_GET['page'] == 'usereditpro' || $_GET['page'] == 'userhapus'){ echo "active";} ?>">
            <a href="?page=user"><i class="fa fa-user"></i> <span>Manajemen User</span></a>
        </li>
        <li class="treeview <?php if (
            $_GET['page'] == 'direksipekerjaan' || $_GET['page'] == 'direksipekerjaantambah'||  $_GET['page'] == 'direksipekerjaantambahpro' || $_GET['page'] == 'direksipekerjaanedit' || $_GET['page'] == 'direksipekerjaaneditpro' || $_GET['page'] == 'direksipekerjaanhapus' ||
            $_GET['page'] == 'target'  || $_GET['page'] == 'targettambah' || $_GET['page'] == 'targettambahpro' || $_GET['page'] == 'targetedit' || $_GET['page'] == 'targeteditpro' || $_GET['page'] == 'targethapus' || $_GET['page'] == 'targetgrafik' ||
            $_GET['page'] == 'progress' ||  $_GET['page'] == 'progresstambah' || $_GET['page'] == 'progresstambahpro' || $_GET['page'] == 'progressedit' || $_GET['page'] == 'progresseditpro' || $_GET['page'] == 'progresshapus'
            ){echo "active";} ?>">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Input</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?php if($_GET['page'] == 'direksipekerjaan' || $_GET['page'] == 'direksipekerjaantambah' || $_GET['page'] == 'direksipekerjaantambahpro' || $_GET['page'] == 'direksipekerjaanedit' || $_GET['page'] == 'direksipekerjaaneditpro' || $_GET['page'] == 'direksipekerjaanhapus') {echo "active";} ?>"><a href="?page=direksipekerjaan"><i class="fa fa-circle-o"></i>Direksi Pekerjaan</a></li>
            <li class="<?php if($_GET['page'] == 'target' || $_GET['page'] == 'targettambah' || $_GET['page'] == 'targettambahpro' || $_GET['page'] == 'targetedit' || $_GET['page'] == 'targeteditpro' || $_GET['page'] == 'targethapus' || $_GET['page'] == 'targetgrafik') {echo "active";} ?>"><a href="?page=target"><i class="fa fa-circle-o"></i>Target</a></li>
            <li class="<?php if($_GET['page'] == 'progress' || $_GET['page'] == 'progresstambah' || $_GET['page'] == 'progresstambahpro' || $_GET['page'] == 'progressedit' || $_GET['page'] == 'progresseditpro' || $_GET['page'] == 'progresshapus') {echo "active";} ?>"><a href="?page=progress"><i class="fa fa-circle-o"></i>Progress</a></li>          
          </ul>
        </li>
    </ul>
</section>