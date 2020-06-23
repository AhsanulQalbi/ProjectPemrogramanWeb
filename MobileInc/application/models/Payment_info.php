<?php
	class Payment_info extends CI_Model{
		function get_bill($id)
		{
			$query = "SELECT SUM(a.Jumlah*b.Harga_barang) as total
			FROM transaksi a, product b
			WHERE a.Kode_product = b.Kode_barang and ID_user = '$id'
			GROUP BY a.ID_user";
			$hasil = $this->db->query($query);
			return $hasil;
		}

	}	

?>
