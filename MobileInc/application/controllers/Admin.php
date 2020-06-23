<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_Model');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'ADMIN PAGE';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->db->get('product')->result_array();
        $data['kategori_isi'] = ['Komponen Gaming', 'Wheels', 'Game Boy', 'Joystick'];

        // $this->form_validation->set_rules('kode_barang', 'Kode_barang', 'required|is_unique[product.kode_barang]', [
        //     'required' => 'Kode Barang is required',
        //     'is_unique' => 'This code has been inputed before'
        // ]);
        $this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required', [
            'required' => 'Nama barang is required'
        ]);

        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga barang is required',
            'integer' => 'Harga barang must be number'
        ]);

        $this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
            'required' => 'Stok barang is required',
            'integer' => 'Harga barang must be number'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori barang is required'
        ]);




        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $upload_image = $_FILES['pic']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/produk';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('pic')) {
                    echo "GAGAL";
                    die();
                }
            }
            $data = [
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'harga_barang' => $this->input->post('harga'),
                'pic' => $upload_image,
                'stok' => $this->input->post('stok'),
                'kategori' => $this->input->post('kategori')
            ];
            $this->db->insert('product', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New product added!</div>');
            redirect('admin');
        }
    }

    public function edit($kode_barang)
    {
        $data['title'] = 'ADMIN PAGE';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->Produk_Model->getProductById($kode_barang);
        $data['kategori_isi'] = ['Komponen Gaming', 'Wheels', 'Game Boy', 'Joystick'];


        $this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required', [
            'required' => 'Nama barang is required'
        ]);

        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga barang is required',
            'integer' => 'Harga barang must be number'
        ]);

        $this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
            'required' => 'Stok barang is required',
            'integer' => 'Stok barang must be number'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori barang is required'
        ]);




        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $nama_barang = $this->input->post('nama_barang');
            $harga_barang = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $kategori = $this->input->post('kategori');


            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['pic']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('pic')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('pic', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('pic')) {
                    $this->db->insert('pic', $upload_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('nama_barang', $nama_barang);
            $this->db->set('harga_barang', $harga_barang);
            // $this->db->set('pic', $upload_image);
            $this->db->set('stok', $stok);
            $this->db->set('kategori', $kategori);
            $this->db->where('kode_barang', $kode_barang);
            $this->db->update('product');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Your Profile has been updated!
          </div>');
            redirect('admin');
        }
    }

    public function hapus($kode_barang)
    {
        $this->Produk_Model->deleteProduct($kode_barang);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin');
    }

    public function transaksi()
    {
        $data['title'] = 'TRANSAKSI';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['riwayattransaksi'] = $this->Produk_Model->getDetailTransaksi();
        $data['barang_transaksi'] = $this->Produk_Model->getBarangTransaksi();




        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/transaksi', $data);
        $this->load->view('templates/admin_footer');
    }
}
