<!-- Pramauladi Mukrim
2130803132 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pesan Ulang</title>
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
    width: 400px;
    height: 450px;
    border-radius: 20px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;
    	}
    	th {
    		padding: 10px;
    		border-radius: 20px;
    	}
    	td {
    		border-radius: 20px;
    	}
    	button {
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    	}
    </style>
</head>
<body background="retro12.jpg">
	<?php
	include "connect.php";
	$no=$_REQUEST['NoPesanan'];
    $sqltampil="SELECT * FROM `tbpesanan` WHERE NoPesanan='$no'";
    $query=mysqli_query($connect,$sqltampil);
    $panggildata=mysqli_fetch_array($query);
	?>
	<form name="pesanan" method="post" action="update.php">
		<table align="center" cellpadding="6">
			<tr>
				<th bgcolor="#F3EDE3" align="center" colspan="2"><h1>Formulir Edit Pesanan</h1></th>
			</tr>
			<tr>
				<td>No Pesanan</td>
				<td><input type="text" name="NoPesanan" readonly="" value="<?php echo $panggildata['NoPesanan'];?>"></td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td><input type="text" name="Nama" value="<?php echo $panggildata['Nama'];?>"></td>
			</tr>
			<tr>
				<td>Pilih Menu</td>
				<td><select name="Rasa">
						<option value="Pearl Milk Tea"<?php if($panggildata["Rasa"]=="Pearl Milk Tea"){echo "selected=selected";}?>>Pearl Milk Tea</option>
						<option value="Oats Milk Tea"<?php if($panggildata["Rasa"]=="Oats Milk Tea"){echo "selected=selected";}?>>Oats Milk Tea</option>
						<option value="Red Beans Milk Tea"<?php if($panggildata["Rasa"]=="Red Beans Milk Tea"){echo "selected=selected";}?>>Red Beans Milk Tea</option>
						<option value="Coconut Jelly Milk Tea"<?php if($panggildata["Rasa"]=="Coconut Jelly Milk Tea"){echo "selected=selected";}?>>Coconut Jelly Milk Tea</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pilih Ukuran</td>
				<td><select name="Ukuran">
						<option value="Medium"<?php if($panggildata["Ukuran"]=="Medium"){echo "selected=selected";}?>>Medium</option>
						<option value="Grande"<?php if($panggildata["Ukuran"]=="Grande"){echo "selected=selected";}?>>Grande</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="Jumlah" style="width: 20%" value="<?php echo $panggildata["Jumlah"]; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Pesan</td>
				<td><input type="Date" name="Tanggal" value="<?php echo $panggildata['Tanggal']; ?>"></td>
			</tr>
			<tfoot style="background-color: #cdc2b2">
			<tr>
				<td colspan="10" align="center">
					<input type="submit" value="Pesan Ulang">
				</td>
			</tr>
		</tfoot>
		</table>
	</form>
</body>
</html>