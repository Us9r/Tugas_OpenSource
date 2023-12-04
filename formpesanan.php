<!-- Pramauladi Mukrim
2130803132 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan</title>
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
<body>
	<form name="pesanan" method="post" action="input.php">
		<table  align="center" cellpadding="6">
			<tr>
				<th bgcolor="#F3EDE3" align="center" colspan="2"><h1>Formulir Pesanan Minuman</h1></th>
			</tr>
			<tr>
				<td>No Pesanan</td>
				<td><input type="text" name="NoPesanan" value=""></td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td><input type="text" name="Nama"  value="" placeholder=""></td>
			</tr>
			<tr>
				<td>Pilih Menu</td>
				<td><input list="Rasa" name="Rasa">
					<datalist id="Rasa">
						<option value="Pearl Milk Tea"></option>
						<option value="Oats Milk Tea"></option>
						<option value="Red Beans Milk Tea"></option>
						<option value="Coconut Jelly Milk Tea"></option>
					</datalist>
				</td>
			</tr>
			<tr>
				<td>Pilih Ukuran</td>
				<td><input list="Ukuran" name="Ukuran">
					<datalist id="Ukuran">
						<option value="Medium">Medium</option>
						<option value="Grande">Grande</option>
					</datalist>
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="Jumlah" style="width: 20%"></td>
			</tr>
			<tr>
				<td>Tanggal Pesan</td>
				<td><input type="Date" name="Tanggal"></td>
			</tr>
			<tfoot style="background-color: #cdc2b2">
			<tr>
				<td colspan="10" align="center">
					<button>Pesan!</button>
				</td>
			</tr>
		</tfoot>
		</table>
	</form>
</body>
</html>