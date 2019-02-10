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
        <li class="treeview <?php if ($_GET['page'] == 'input1' || $_GET['page'] == 'input2' ||  $_GET['page'] == 'input3' || 
            $_GET['page'] == 'input1tambah' || $_GET['page'] == 'input2tambah' || $_GET['page'] == 'input3tambah' ||  
            $_GET['page'] == 'input1tambahpro' || $_GET['page'] == 'input2tambahpro' || $_GET['page'] == 'input3tambahpro' ||
            $_GET['page'] == 'input1edit' || $_GET['page'] == 'input2edit' || $_GET['page'] == 'input3edit' ||
            $_GET['page'] == 'input1editpro' || $_GET['page'] == 'input2editpro' || $_GET['page'] == 'input3editpro' ||
            $_GET['page'] == 'input1hapus' || $_GET['page'] == 'input2hapus' || $_GET['page'] == 'input3hapus' ){echo "active";} ?>">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Input</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?php if($_GET['page'] == 'input1' || $_GET['page'] == 'input1tambah' || $_GET['page'] == 'input1tambahpro' || $_GET['page'] == 'input1edit' || $_GET['page'] == 'input1editpro' || $_GET['page'] == 'input1hapus') {echo "active";} ?>"><a href="?page=input1"><i class="fa fa-circle-o"></i>Direksi Pekerjaan</a></li>
            <li class="<?php if($_GET['page'] == 'input2' || $_GET['page'] == 'input2tambah' || $_GET['page'] == 'input2tambahpro' || $_GET['page'] == 'input2edit' || $_GET['page'] == 'input2editpro' || $_GET['page'] == 'input2hapus') {echo "active";} ?>"><a href="?page=input2"><i class="fa fa-circle-o"></i>Target</a></li>
            <li class="<?php if($_GET['page'] == 'input3' || $_GET['page'] == 'input3tambah' || $_GET['page'] == 'input3tambahpro' || $_GET['page'] == 'input3edit' || $_GET['page'] == 'input3editpro' || $_GET['page'] == 'input3hapus') {echo "active";} ?>"><a href="?page=input3"><i class="fa fa-circle-o"></i>Progress</a></li>          
          </ul>


        </li>
    </ul>
</section>