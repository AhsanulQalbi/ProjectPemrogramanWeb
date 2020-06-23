<?php
	class Konfirmasi extends CI_Model
	{
		function minusstock($stock, $id)
		{
			$query = "UPDATE product set Stok = Stok - $stock where Kode_barang = $id";
			$hasil = $this->db->query($query);
			return $hasil;
		}
		
		function delete_cart($id)
		{
			
			$query = "DELETE FROM transaksi WHERE ID_user = '$id' ";
			$hasil = $this->db->query($query);
			return $hasil;
		}
		function tambahkan_riwayat($id,$total)
		{
			
			$query = "INSERT INTO riwayattransaksi VALUES (NULL,'$id','$total')";
			$hasil = $this->db->query($query);
			return $hasil;
		}

		function last()
		{
			$query = "SELECT Kode_transaksi FROM riwayattransaksi ORDER BY 1 DESC LIMIT 1";
			$hasil = $this->db->query($query);
			return $hasil;
		}

		function tambahkan_detail($kode_detail,$id,$jumlah,$address)
		{
			
			$query = "INSERT INTO detailriwayattransaksi VALUES (NULL,'$kode_detail','$id','$jumlah','$address')";
			$hasil = $this->db->query($query);
			return $hasil;

		}

		function get_cart($id)
		{
			$query = "SELECT * from transaksi WHERE ID_user = '$id'";
			$hasil = $this->db->query($query);
			return $hasil;

		}

	}	

?>
