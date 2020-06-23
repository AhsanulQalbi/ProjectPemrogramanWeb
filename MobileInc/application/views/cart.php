<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cart</title>
	<?php
	echo $js;
	echo $otherjs;
	echo $css;
	echo $othercss;
	?>
</head>

<body>
	<div class="super_container">
		<header class="header">
			<div class="header_overlay"></div>
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo">
					<form method="POST">
						<button type="submit" name="kembali" style="border-style: none; background-color: transparent;">
							<a>
								<div class="d-flex flex-row align-items-center justify-content-start">
									<div><img src="../images/logo_1.png" alt=""></div>


									<div>Mobile.Inc</div>

								</div>
							</a>
						</button>
					</form>
					<?php
					if (isset($_POST['kembali'])) {
						redirect('Main_menu_ctrl');
					}
					?>
				</div>
				<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
					<!-- Search -->
					<div class="header_search">
						<form action="Search_ctrl" method="POST">
							<input type="text" name="carivalue" class="search_input" placeholder="Search Item" required="required">
							<button name="cari" type="submit" class="header_search_button"><img src="../images/search.png" alt=""></button>
						</form>
					</div>
					<form action="Riwayat_ctrl" method="POST">
						<button class='glyphicon glyphicon-th-list' type="submit" name="submit" style="background-color: white;border-style: none;"></button>
						<label for='submit' style='margin-left : 5px; margin-top:5px'>History</label>
					</form>
					<form action="Favorite_ctrl" method="POST">
						<button type="submit" name="submit" style="background-color: white;border-style: none;">
							<div><img src="../images/heart_2.svg" alt="https://www.flaticon.com/authors/freepik" style="width:50px; height:30px; "></div>
						</button>
						<label for='submit'>MyFavorite</label>
					</form>
					<div class="user">
						<?php
						if ($user > 0) {
							echo "<form action = 'Auth/logout' method = 'POST'>";
							echo "<button type=\"submit\" name = \"submit\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/logout.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
							echo "<label for = 'submit'>Logout</label>";
							echo "</form></div>";
						} else {
							echo "<form  method = 'POST'>";
							echo "<button type=\"submit\" name = \"login\" style = \"background-color: white;border-style: none;\"><div><img src=\"../images/user.svg\" alt=\"https://www.flaticon.com/authors/freepik\" style = \"width:50px; height:30px; \"></div></button>";
							echo "<label for = 'login'>Login</label>";
							echo "</form></div>";
							if (isset($_POST['login'])) {
								redirect('Auth');
							}
						}
						$id = $user['id'];
						?>
					</div>
				</div>
				</a>
			</div>
	</div>
	</div>
	</header>
	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
						<div class="cart_info_col cart_info_col_delete">Delete</div>
					</div>
				</div>
			</div>
			<?php
			$cart = $this->Cart->ambil_transaksi($user['id']);
			$indeks = 1;
			if ($cart->num_rows() > 0) {
				foreach ($cart->result_array() as $baris) {
					$jumlah = $baris['Jumlah'];
					$nama = $baris['Nama_barang'];
					$img = $baris['Pic'];
					$id_transaksi = $baris['Kode_cart'];
					$hargaTotal = $baris['Total'];
					echo "<div class=\"row cart_items_row\">";
					echo "<div class=\"col\">";
					echo "<!-- Cart Item -->";
					echo "<div class=\"cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start\">";
					echo "<!-- Name -->";
					echo "<div class=\"cart_item_product d-flex flex-row align-items-center justify-content-start\">";
					echo "<div class=\"cart_item_image\">";
					echo "<div><img src='../assets/img/$img' alt=\"\"></div>";
					echo "</div>";
					echo "<div class=\"cart_item_name_container\">";
					echo "<div class=\"cart_item_name\">$nama</div>";
					echo "</div>";
					echo "</div>";
					echo "<!-- Quantity -->";
					echo "<div class=\"cart_item_quantity\">";
					echo "<div class=\"product_quantity_container\">";
					echo "<div class=\"product_quantity clearfix\">";
					echo "<span>Qty</span>";
					echo "<input id=\"quantity_input\" type=\"text\"  value='$jumlah'>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					echo "<!-- Total -->";
					echo "<div class=\"cart_item_total\">Rp ";
					echo number_format($hargaTotal);
					echo "</div>";
					echo "<!-- Delete Button -->";
					echo "<div class='w3-padding w3-xlarge w3-text-orange'>";
					echo "<form method = 'POST'>";
					echo "<input type = 'hidden' value = '$id_transaksi' name = 'id'>";
					echo " <button type='submit' name = 'hapus' class='glyphicon glyphicon-trash' style = 'border: none; padding-left: 72px; background-color: white'></button>";
					echo "</form>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
				}
				if (isset($_POST['hapus'])) {
					$id = $_POST['id'];
					$delete = $this->Cart->hapus_transaksi($id);
					redirect('index.php/Cart_ctrl');
				}
				echo "<div class='col' style='width:100%; text-align:right;'>";
				echo "<form action = 'Payment_info_ctrl' method = 'POST'> ";
				echo "<input type='submit' name = 'hapus' class='btn btn-primary' style = 'border:none;' value = 'Continue to Payment Method'>";
				echo "</form>";
				echo "</div>";
			} else {
				echo "Your Cart Is Empty";
			}
			echo "<div class='col' style='width:100%; text-align:right;'>";

			?>
		</div>
	</div>
	</div>
</body>

</html>