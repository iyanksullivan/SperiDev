<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CustomerModel');
		$this->load->library('form_validation');
		// $this->load->library('upload',$config);
	}

	public function index()
	{

		if(isset($this->session->username)){
			$data['data'] = $this->CustomerModel->getDataCust('username',$this->session->username);
			$this->load->view('Customer/userEdit',$data);			

		}
		else{
			redirect('Customer/login');
		}
	}

	public function login()
	{
		
		//pembuatan rules untuk form yg wajib diisi
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','Password','required');		
		//jika data tidak full maka akan dikembalikan ke form login
		if($this->form_validation->run() == false){
			$this->load->view('Customer/userLogin');		
		}

		//jika data full maka akan melakukan pengecekan data ke database
		else{
			
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			if(!$this->CustomerModel->checkAuth($data)){						
				redirect('Customer/userLogin');
			}
			else{
				$this->session->set_userdata('username',$data['username']);
				redirect('Customer/index');
			}			
		}			
	}

	//fungsi untuk register user.    
	public function register(){   
		
		//pembuatan aturan dalam pengisian form 
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');	
		$this->form_validation->set_rules('alamat','Alamat','required');	

		//jika form tidak terisi maka akan di redirect kembali
		if($this->form_validation->run() == false){
			$this->load->view('Customer/userRegister');						
		}
		//jika form terisi sesuai dengan ketentuan maka data akan di push ke database
		else{                    
            $data['username'] = $this->input->post('username');
			$data['nama'] = $this->input->post('nama');
			$data['password'] = $this->input->post('password');
			$data['alamat'] = $this->input->post('alamat');
			if(!$this->CustomerModel->checkAuth($data)){
				//jika pengecekan username tidak ada di dalam database maka dia akan di save ke database.
					$this->CustomerModel->create($data);
					$this->session->set_userdata('username',$data['username']);
					redirect('Customer/index');
			}
			else{
				//jika pengecekan username  ada di dalam database maka dia akan di redirect ke page login dan data tidak di save ke database
				site_url('Customer/login');
			}			
		}
    }

	public function editProfile(){

		//ini fungsi update data dalam database dengan nik spesifik
		$this->form_validation->set_rules('nama','Nama','required');	
		$this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');
		$this->form_validation->set_rules('alamat','alamat','required');

		//untuk mengambil data yang sudah ada di dalam database
		$data['data'] = $this->CustomerModel->getDataCust('username',$this->session->username);
		if($this->form_validation->run() == false){
			$this->load->view('Customer/userEdit',$data);
		}
		else{
			//untuk update .
			if($this->input->post('password') == $this->input->post('re-password')){	
				$data = [              
					'username' => $this->session->username,
					'nama' => $this->input->post('nama',true),
					'password' => $this->input->post('password',true),
					'alamat' => $this->input->post('alamat',true),
				];			
				$this->CustomerModel->update($data);
				//jika sudah success maka akan di redirect ke page index.
				redirect('Customer/index');
			}
			$this->load->view('Customer/userEdit',$data);
		}
		
	}

	//ini fungsi untuk menghapus data dengan username spesifik dalam database	
	 public function delete(){	
		$this->CustomerModel->delete($this->session->username);
		$this->session->sess_destroy();	
		redirect('Customer/index');
    }
	public function logout(){
		//ini fungsi untuk melogout user.
		$this->session->sess_destroy();
		redirect('Customer/index');
	}
}
