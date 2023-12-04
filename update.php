<?php
	include "connect.php";

    $no=$_POST['NoPesanan'];
    $nama=$_POST['Nama'];
    $rasa=$_POST['Rasa'];
    $ukuran=$_POST['Ukuran'];
    $jumlah=$_POST['Jumlah'];
    $tanggal=$_POST['Tanggal'];

    if ($rasa=="Pearl Milk Tea") {
    	if ($ukuran=="Medium") {
    		$harga=21000;
    	} else if ($ukuran=="Grande"){
    		$harga=24000;
    	}
    } else if ($rasa=="Oats Milk Tea") {
    	if ($ukuran=="Medium") {
    		$harga=21000;
    	} else if ($ukuran=="Grande"){
    		$harga=24000;
    	}
    } else if ($rasa=="Red Beans Milk Tea") {
    	if ($ukuran=="Medium") {
    		$harga=21000;
    	} else if ($ukuran=="Grande"){
    		$harga=24000;
    	}
    } else if ($rasa=="Coconut Jelly Milk Tea") {
    	if ($ukuran=="Medium") {
    		$harga=21000;
    	} else if ($ukuran=="Grande"){
    		$harga=24000;
    	}
    }

    $total=$jumlah*$harga;

    $sqlUpdate="UPDATE tbpesanan SET Nama='$nama',Rasa='$rasa',Ukuran='$ukuran',Harga='$harga',Jumlah='$jumlah',Total='$total',Tanggal='$tanggal'WHERE NoPesanan='$no'";

    mysqli_query($connect,$sqlUpdate);

    if (mysqli_affected_rows($connect)>0) {
        echo "<script>alert('Pesanan berhasil disimpan!!! (^u^)');
        location.href='strukpesanan.php';
        </script>";
     }else {
        echo "<script>alert('Pesanan gagal disimpan (T_T)');
        windows.history.go(-1);
        </script>";
     }

?>