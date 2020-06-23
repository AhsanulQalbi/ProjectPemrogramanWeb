<?php
	class Riwayat extends CI_Model{
		function ambil_riwayat($id)
		{
			$query = "SELECT sum(a.total) as total , group_concat(c.Nama_barang order by 1 ASC SEPARATOR '<br>') as nama, group_concat(b.jumlah order by 1 ASC SEPARATOR '<br>') as jumlah, group_concat(b.address) as alamat
            FROM riwayattransaksi a, detailriwayattransaksi b, product c
            WHERE a.Kode_transaksi = b.Kode_riwayat and b.Kode_barang = c.Kode_barang and a.Kode_user = '$id'
            GROUP BY b.Kode_riwayat 
            ";
            $hasil = $this->db->query($query);
			return $hasil;
        }
        
		
	}	

?>
