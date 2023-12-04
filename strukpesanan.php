<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
*{/*
    margin: 0;
    padding: 0;*/
    font-family: 'poppins',sans-serif;
}
body {
    		display: flex;
    		justify-content: center;
    		align-items: center;
   			min-height: 100vh;
    		width: 100%;

    		background: url('bg-image.jpeg')no-repeat;
   			background-position: center;
    		background-size: cover;
    	}
form {
    		padding: 20px;
    position: relative;
/*    width: 400px;
    height: 450px;*/
    border-radius: 20px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    backdrop-filter: blur(15px);
    /*display: flex;*//*
    justify-content: center;*/
    /*align-items: center;*/
    	}
    	button{
    	display: flex;
    	text-align: center;
    	margin:20px auto;

    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    	}
    	a {
    		color: #fff;
    		text-decoration: none;
    	
    	}
    	button a{
    		color: black;
    		text-decoration: none;
    	}
    	p {
    		color: #fff;
    		text-decoration: none;
    	}
    </style>
</head>
<body>
	<?php
		include "connect.php";
		$sqltampil="SELECT * FROM tbpesanan ORDER BY NoPesanan ASC";
		$query=mysqli_query($connect,$sqltampil);
	?>
	<form method="post" name="strukpesanan">
	<table align="center" cellpadding="6">
		<thead>
			<tr bgcolor="#cdc2b2">
				<th colspan="9"><h1>Struk Pesanan</h1></th>
			</tr>
		</thead>
		<tbody>
			<tr bgcolor="#F3EDE3">
				<td>No Pesanan</td>
				<td>Nama Pemesan</td>
				<td>Rasa</td>
				<td>Ukuran</td>
				<td>Harga</td>
				<td>Jumlah</td>
				<td>Total</td>
				<td>Tanggal Pesanan</td>
				<td>Keterangan</td>
			</tr>
			<?php
				while($panggildata=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $panggildata['NoPesanan']; ?></td>
				<td><?php echo $panggildata['Nama']; ?></td>
				<td><?php echo $panggildata['Rasa']; ?></td>
				<td><?php echo $panggildata['Ukuran']; ?></td>
				<td><?php echo $panggildata['Harga']; ?></td>
				<td><?php echo $panggildata['Jumlah']; ?></td>
				<td><?php echo $panggildata['Total']; ?></td>
				<td><?php echo $panggildata['Tanggal']; ?></td>
				<td><a href="edit.php?NoPesanan=<?php echo $panggildata['NoPesanan']; ?>">Edit</a> | <a href="hapus.php?NoPesanan=<?php echo $panggildata['NoPesanan']; ?>">Hapus</a></td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="9"><button><a href="formpesanan.php">Tambah Pesanan</a></button></td>
			</tr>
			<tr><td colspan="9"><p>* tunjukkan struk ke kasir, ingin kembali ke <a href="Beranda.html">Beranda ?</a> </p></td></tr>
		</tfoot>
	</table>
	</form>
</body>
</html>