<?php
	include 'connect.php';
	$no=$_REQUEST['NoPesanan'];
	$sqlHapus="DELETE FROM tbpesanan WHERE NoPesanan='$no'";
	$query=mysqli_query($connect, $sqlHapus);

	if ($query) {
        echo "<script>alert('Data berhasil dihapus');
        location.href='strukpesanan.php'; </script>";
    } else {
        echo "<script>alert('Data gagal dihapus');
        windows,history.go(-1); <script>";
    }	
?>