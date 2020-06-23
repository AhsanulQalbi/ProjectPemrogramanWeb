<?php

class Produk_Model extends CI_model
{
    public function getProductById($kode_barang)
    {
        return  $this->db->get_where('product', ['kode_barang' => $kode_barang])->row_array();
    }

    public function deleteProduct($kode_barang)
    {
        // $this->db->where('id', $id);
        $this->db->delete('product', ['kode_barang' => $kode_barang]);
    }

    // public function getDetailTransaksi()
    // {
    //     return $this->db->get('detailriwayattransaksi')->result_array();
    // }

    public function getBarangTransaksi()
    {
        $query = $this->db->query('Select p.kode_barang, p.nama_barang, drt.jumlah, p.harga_barang*drt.jumlah pemasukan
        FROM product p, detailriwayattransaksi drt 
        WHERE p.kode_barang = drt.kode_barang
        ORDER BY 3 DESC');
        return $query->result_array();
    }
}
