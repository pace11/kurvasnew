<?php 

if (isset($_GET['page'])) $page=$_GET['page'];
else $page="dashboard";

if ($page == "dashboard") include("page/dashboard.php");
elseif ($page == "logout") include("page/logout.php");

    // -------------------------- user --------------------------
    elseif ($page == "user")                            include("page/user/user.php");
    elseif ($page == "usertambah")                      include("page/user/usertambah.php");
    elseif ($page == "usertambahpro")                   include("page/user/usertambahpro.php");
    elseif ($page == "useredit")                        include("page/user/useredit.php");
    elseif ($page == "usereditpro")                     include("page/user/usereditpro.php");
    elseif ($page == "userhapus")                       include("page/user/userhapus.php"); 

    // -------------------------- Input --------------------------
    elseif ($page == "direksipekerjaan")                include("page/direksipekerjaan/direksipekerjaan.php");
    elseif ($page == "direksipekerjaantambah")          include("page/direksipekerjaan/direksipekerjaantambah.php");
    elseif ($page == "direksipekerjaantambahpro")       include("page/direksipekerjaan/direksipekerjaantambahpro.php");
    elseif ($page == "direksipekerjaanedit")            include("page/direksipekerjaan/direksipekerjaanedit.php");
    elseif ($page == "direksipekerjaaneditpro")         include("page/direksipekerjaan/direksipekerjaaneditpro.php");
    elseif ($page == "direksipekerjaanhapus")           include("page/direksipekerjaan/direksipekerjaanhapus.php");

    // -------------------------- Input --------------------------
    elseif ($page == "target")                          include("page/target/target.php");
    elseif ($page == "targettambah")                    include("page/target/targettambah.php");
    elseif ($page == "targettambahpro")                 include("page/target/targettambahpro.php");
    elseif ($page == "targetedit")                      include("page/target/targetedit.php");
    elseif ($page == "targeteditpro")                   include("page/target/targeteditpro.php");
    elseif ($page == "targethapus")                     include("page/target/targethapus.php");
    elseif ($page == "targetgrafik")                    include("page/target/targetgrafik.php");

    // -------------------------- Input --------------------------
    elseif ($page == "progress")                        include("page/progress/progress.php");
    elseif ($page == "progresstambah")                  include("page/progress/progresstambah.php");
    elseif ($page == "progresstambahpro")               include("page/progress/progresstambahpro.php");
    elseif ($page == "progressedit")                    include("page/progress/progressedit.php");
    elseif ($page == "progressgrafik")                  include("page/progress/progressgrafik.php");
    elseif ($page == "progresseditpro")                 include("page/progress/progresseditpro.php");
    elseif ($page == "progresshapus")                   include("page/progress/progresshapus.php");

    // -------------------------- pengawas --------------------------
    elseif ($page == "pengawas")                        include("page/pengawas/pengawas.php");
    elseif ($page == "pengawastambah")                  include("page/pengawas/pengawastambah.php");
    elseif ($page == "pengawastambahpro")               include("page/pengawas/pengawastambahpro.php");
    elseif ($page == "pengawasedit")                    include("page/pengawas/pengawasedit.php");
    elseif ($page == "pengawaseditpro")                 include("page/pengawas/pengawaseditpro.php");
    elseif ($page == "pengawashapus")                   include("page/pengawas/pengawashapus.php");

else echo"Konten tidak ada";

?>