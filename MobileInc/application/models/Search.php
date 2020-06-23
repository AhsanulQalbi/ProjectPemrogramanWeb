<?php
	class Search extends CI_Model{
		function ambil_product($search)
		{
			$query = "SELECT * FROM product WHERE Nama_barang LIKE '%$search%'";
			$hasil = $this->db->query($query);
			return $hasil;
        }
        function favorite($id,$product)
		{
			$query1 = "SELECT * from favorite WHERE ID_user = '$id' and Kode_product = '$product'";
			$hasil1 = $this->db->query($query1);
			
			if ($hasil1->num_rows() == 0)
			{
				$query = "INSERT INTO favorite VALUES('$id','$product')";
				$hasil = $this->db->query($query);
				return $hasil;
			}

		}
		function ambil_favorite($id)
        {
        	$query = "SELECT * FROM favorite where ID_user = '$id' ";
        	$hasil = $this->db->query($query);
			return $hasil;
        }
		
	}	

?>
