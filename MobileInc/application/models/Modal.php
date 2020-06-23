<?php
	class Modal extends CI_Model
	{
		function ambil_product($id)
		{
			$query = "SELECT * FROM product WHERE Kode_barang = '$id'";
			$hasil = $this->db->query($query);
			return $hasil;
		}
		function addtocart($id,$jumlah,$user)
		{
			$query = "INSERT INTO transaksi VALUES(NULL,'$id','$jumlah','$user')";
			$simpan = $this->db->query($query);
			if ($simpan)redirect('Main_menu_ctrl');
		}

	}	

?>
