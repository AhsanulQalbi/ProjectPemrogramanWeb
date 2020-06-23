<?php
	class Cart extends CI_Model
	{
		function ambil_transaksi($id)
		{
			$query = "SELECT a.Kode_cart as Kode_cart,a.Jumlah as Jumlah, a.Jumlah * b.Harga_barang as Total, b.Nama_barang as Nama_barang, b.Pic as Pic
			FROM transaksi a, product b 
			WHERE ID_user = '$id' and a.Kode_product = b.Kode_barang";
			$hasil = $this->db->query($query);
			return $hasil;
		}
		function hapus_transaksi($id)
		{
			$query = "DELETE FROM transaksi where Kode_cart = '$id'";
			$hasil = $this->db->query($query);
			return $hasil;
		}

	}	

?>
