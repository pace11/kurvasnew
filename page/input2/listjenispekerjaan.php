<?php
include("../../lib/koneksi.php");
$no = $_GET['no'];
$get = mysqli_query($conn, "SELECT * FROM tbl_input4 WHERE nomer_pjn_spj='$no'");
while($row = mysqli_fetch_array($get)){
  echo $row['jenis_pekerjaan'];
}
?>