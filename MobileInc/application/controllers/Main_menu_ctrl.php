<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

		class Main_menu_ctrl extends CI_Controller 
		{
			
			public function index()
			{
				$this->load->model('Main_menu');
				$data['js'] = $this->load->view('include/javascript.php',NULL,TRUE);
				$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
				$data['mainjs'] =   $this->load->view('include/mainjs.php',NULL,TRUE);
				$data['maincss'] =   $this->load->view('include/maincss.php',NULL,TRUE);
				$data['productlaptop'] = $this->Main_menu->ambil_product();
				$data['productautomotive'] = $this->Main_menu->ambil_product_motor();
				$data['productgaming'] = $this->Main_menu->ambil_product_gaming();
				$data['productmakanan'] = $this->Main_menu->ambil_product_makanan();
				$data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
				$this->load->view('main_menu', $data);
				
				
			}


		}
?>