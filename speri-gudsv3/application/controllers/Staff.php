<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('StaffModel');
        $this->load->library('form_validation');
    }

    public function index(){
        if (isset($this->session->username)){
            $data['data'] = $this->StaffModel->getDataStaff('NAMA',$this->session->username);
            $this->load->view('Staff/staffEdit',$data);
        }else{
            redirect('Staff/Login');
        }
    }

    public function Login(){
        $this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','Password','required');	
		if($this->form_validation->run() == false){
			$this->load->view('Staff/staffLogin');		
		}
		//jika data full maka akan melakukan pengecekan data ke database
		else{
			
			$data['NAMA'] = $this->input->post('username');
			$data['Password'] = $this->input->post('password');
			if(!$this->StaffModel->auth_staff($data)){						
				redirect('Staff/Login');
			}
			else{
				$this->session->set_userdata('username',$data['NAMA']);
				redirect('Staff/index');
			}			
		}			
    }

    public function edit_staff(){

		//ini fungsi update data dalam database dengan nik spesifik
		$this->form_validation->set_rules('nama','Nama','required');	
		$this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');

		//untuk mengambil data yang sudah ada di dalam database
		$data['data'] = $this->StaffModel->getDataStaff('NAMA',$this->session->username);
		if($this->form_validation->run() == false){
			$this->load->view('Staff/staffEdit',$data);
		}
		else{
			//untuk update .
			if($this->input->post('password') == $this->input->post('re-password')){	
				$data = [              
					'NAMA' => $this->session->username,
					'PASSWORDS' => $this->input->post('password',true),
				];			
				$this->StaffModel->update($data);
				//jika sudah success maka akan di redirect ke page index.
				redirect('Staff/index');
			}
			$this->load->view('Staff/staffEdit',$data);
		}
		
	}

	//ini fungsi untuk menghapus data dengan username spesifik dalam database	
	 public function delete(){	
		$this->StaffModel->delete($this->session->username);
		$this->session->sess_destroy();	
		redirect('Staff/index');
    }
	public function logout(){
		//ini fungsi untuk melogout user.
		$this->session->sess_destroy();
		redirect('Staff/index');
	}
}