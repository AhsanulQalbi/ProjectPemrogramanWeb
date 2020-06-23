<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php
		echo $js; echo $otherjs;
       	echo $css; echo $othercss;
     ?>
     <?php
	if (isset($_POST['bayar'])) {
		$metode = $_POST['metode'];
		$jumlah = $_POST['jumlah'];
		$alamat = $_POST['Alamat'];

		$this->Konfirmasi->tambahkan_riwayat($User['id'], $jumlah);
		$cart = $this->Konfirmasi->get_cart($User['id'])->result_array();
		$hasil = $this->Konfirmasi->last()->result_array();

		foreach ($cart as $row) {
			$this->Konfirmasi->tambahkan_detail($hasil[0]['Kode_transaksi'], $row['Kode_product'], $row['Jumlah'], $alamat);
			$this->Konfirmasi->minusstock($row['Jumlah'],$row['Kode_product']);
		}


		$this->Konfirmasi->delete_cart($User['id']);

		echo "<center>";
		echo "<div class=\"container\" style=\"margin-top:50\">";
		echo "<div class=\"row justify-content-center\">";
		echo "<div class=\"col-lg-7\">";
		echo "<div class=\"card o-hidden border-0 shadow-lg my-5\">";
		echo "<div class=\"card-body p-0\">";
		echo "<!-- Nested Row within Card Body -->";
		echo "<div class=\"row\">";
		echo "<div class=\"col-lg\">";
		echo "<div class=\"p-5\">";
		echo "<div class=\"text-center\">";
		echo "<h1 class=\"h4 text-black-50 mb-4\">Payment Detail</h1>";
		echo "</div>";
		echo "<div class=\"h4 text-black-50 mb-4\">";
		if ($metode == 'atm') {
			echo "To Continue your Transaction <br> Please Transfer to BCA account  <br>";
			echo "<br>Ahsanul Qalbi Fajar Islami<br><br>";
			echo "8990743739<br><br>";
			echo "Total : Rp ";echo number_format($jumlah); echo "<br><br>";
		} else {
			echo "To Continue your Transaction Please go to the nearest Alfamart : <br>";
			echo "Transaction Code : 0232889832983<br>";
			echo "nominal : $jumlah,00<br>";
			echo "The Grocery Store will charge you Rp.2000,00 as administration fee<br>";
		}
		echo "<form action = '../Main_menu_ctrl' method='POST'>";
		echo "<input type = 'submit' value = 'Back to Main Menu' class = 'btn btn-primary'>";
		echo "</form>";
		echo "</form>";
		echo "<hr>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</center>";
		echo '<script src="../styles/bootstrap-4.1.2/popper.js"></script>';
		echo '<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>';
		echo '<script src="../plugins/greensock/TweenMax.min.js"></script>';
		echo '<script src="../plugins/greensock/TimelineMax.min.js"></script>';
		echo '<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>';
		echo '<script src="../plugins/greensock/animation.gsap.min.js"></script>';
		echo '<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>';
		echo '<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>';
		echo '<script src="../plugins/easing/easing.js"></script>';
		echo '<script src="../plugins/progressbar/progressbar.min.js"></script>';
		echo '<script src="../plugins/parallax-js-master/parallax.min.js"></script>';
		echo '<script src="../js/custom.js"></script>';
	}


	?>
</body>

</html>