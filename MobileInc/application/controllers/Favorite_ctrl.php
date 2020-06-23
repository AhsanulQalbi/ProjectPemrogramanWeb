<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

		class Favorite_ctrl extends CI_Controller 
		{
			
			public function index()
			{
				$this->load->model('Favorite');
				$data['js'] = $this->load->view('include/javascript.php',NULL,TRUE);
				$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
				$data['otherjs'] =   $this->load->view('include/otherjs.php',NULL,TRUE);
				$data['othercss'] =   $this->load->view('include/othercss.php',NULL,TRUE);
				$data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
				if($data['user']>0){
					$this->load->view('favorite', $data);
				} else{
					redirect('Auth');
				}
				
			}


		}
?>