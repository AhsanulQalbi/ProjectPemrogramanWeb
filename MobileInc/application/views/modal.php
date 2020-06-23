<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Data-Base-Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/modal.css">
</head>
<body>
	<?php

		if(isset($_POST['Submit']))
		{
			$id = $_POST['Submit'];
			$q =  $this->Modal->ambil_product($id);
			foreach ($q->result_array() as $row) {
				$var_img = $row['Pic'];
				$var_qty = $row['Stok'];
				$var_nama = $row['Nama_barang'];
				$var_harga = $row['Harga_barang'];
				$var_detail = $row['detail'];
				echo"<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">";
				echo"<div class=\"modal-dialog\">";
			    echo"<div class=\"modal-content\">";
			    echo"<div class=\"modal-header\">";
			    echo"<h2 class=\"modal-title\">Tambahkan ke cart</h2>";
			    echo"</div>";
			    echo"<div class=\"modal-body\">";
			    echo"<form  method =\"POST\">";
				echo"<div class = \"form-group\">";
				echo "<center><img src='../assets/img/$var_img' style ='width : 300px;'><br/></center>";
				echo "<center><br/>$var_nama</center>";
				echo "<br>";
				echo "<h3><center><b>Rp "; echo number_format($var_harga);echo "</b></center></h3>";
			
				echo "<h5><center><b>$var_qty Stock</b><center></h5>";
				echo "<br>";
				echo "<p align='justify'>$var_detail</p>";
				// echo"<label for=\"email\">Email :</label>";
				// echo"<input type = \"text\" class=\"form-control\"  name ='email'> <br>";
				echo"</div>";
				echo"<div class = \"form-group\">";
				// echo"<label for=\"password\">Password :</label>";
				// echo"<input type = \"text\" class=\"form-control\" name = 'password'> <br>";
				echo"</div>";
				echo "<label for='Qty'>Quantity</label>";
				echo "<input type=\"number\" style='margin-right: 350px;' name = 'Qty' min=1 max=$var_qty >";
				echo "<input type = 'hidden' name = 'idproduct' value = '$id'>";
				echo"<input type=\"submit\" class=\"btn btn-primary\"  name = 'addtocart' value=\" Add to Cart\">";
				echo"</form>";
			    echo"</div>";
			    echo"</div>";
			    echo"</div>";
			    echo"</div>";
			}

		}
		if (isset($_POST['addtocart']))
		{
			$id_product = $_POST['idproduct'];
			$jumlah = $_POST['Qty'];
			$this->Modal->addtocart($id_product,$jumlah,$User['id']);

		}
	  ?>
	  <script type="text/javascript">
		$(document).ready(function()
		{
			 $('#myModal').modal({
			 keyboard: false,
			 show: true,
			 backdrop: 'static'
			 });
		});
	</script>
</body>
</html>


