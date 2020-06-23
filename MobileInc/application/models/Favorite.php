<?php
	class Favorite extends CI_Model
	{
        function get_favorite($id)
        {
            $query = "SELECT b.Nama_barang as nama, b.pic as pic, b.Rating as rating, b.detail as detail, a.Kode_product as id
            FROM favorite a, product b
            WHERE a.Kode_product = b.Kode_barang and a.ID_user = '$id'";
            $hasil = $this->db->query($query);
			return $hasil;
        }

        function delete_favorite($id,$kodeproduct)
        {
            $query = "DELETE FROM favorite where Kode_product = '$kodeproduct' and ID_user = '$id'";
            $hasil = $this->db->query($query);
			return $hasil;
        }

	}	

?>
