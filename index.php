<?php 
   session_start();
   if (!empty($_SESSION['username']) && !empty($_SESSION['password']))
   {
      date_default_timezone_set('Asia/Jakarta');
      include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Monitoring Proyek</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
  <?php 
    include "header.php";
  ?>
  </header>
  <aside class="main-sidebar">
  <?php
    include "sidebar.php";
  ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php 
    include "content.php";
  ?>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 </strong> | Administrator PLN Bulungan.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#table1').DataTable()
  })
</script>
<script>
  $(function () {
    $("#datepicker,#datepicker2").datepicker({
      dateFormat: "mm/dd/yy",
      showOtherMonths: true,
      selectOtherMonths: true,
      autoclose: true,
      changeMonth: true,
      changeYear: true,
      todayHighlight: true,
      orientation: "bottom" 
    });
  });
</script>
<script>
    $(document).ready(function(){
      $('#tblsktm,#tblsipil,#btninput2').hide();
      $("#nopjn").change(function(){
        var no  = $("#nopjn").val();
          $.ajax({
            url:"page/input2/listjenispekerjaan.php",
            data:"no=" + no,
            success:function(data){
              $("#jenispekerjaan").val(data);
              $("#btninput2").show();
              if ($("#jenispekerjaan").val() == 'SKTM'){
                $('.fieldsktm').attr('required',true);
                $('.fieldsipil').removeAttr('required');
                $('#tblsktm').show(500);
                $('#tblsipil').hide();
              } else {
                $('.fieldsipil').attr('required',true);
                $('.fieldsktm').removeAttr('required');
                $('#tblsipil').show(500);
                $('#tblsktm').hide();
              }
            }
          });
      });

    });
  </script>
</body>
</html>
<?php
}
else { ?>
<div class="col-md-12" align="center">
  <button type="button" name="button" class="btn btn-primary">Login Terlebih dahulu</button>
</div>

<?php echo"<meta http-equiv='refresh' content='1;
url=login.php'>";
} ?>