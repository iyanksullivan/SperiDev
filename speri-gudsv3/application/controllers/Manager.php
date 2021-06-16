<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('StaffModel');
        $this->load->model('ManagerModel');
        $this->load->library('form_validation');
    }

    public function index(){
        if (isset($this->session->username)){
            $data['data'] = $this->ManagerModel->getDataManager('nama',$this->session->username);
            $this->load->view('Manager/dashboard',$data);
        }else{
            redirect('Manager/Login');
        }
    }

    public function Login(){
        $this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','Password','required');	
		if($this->form_validation->run() == false){
			$this->load->view('Manager/ManagerLogin');		
		}
		else{
			$data['NAMA'] = $this->input->post('username');
			$data['Password'] = $this->input->post('password');
			if(!$this->ManagerModel->auth_mgr($data)){						
				redirect('Manager/Login');
			}
			else{
				$this->session->set_userdata('username',$data['NAMA']);
				redirect('Manager/index');
			}			
		}			
    }

    public function edit_manager(){

		$this->form_validation->set_rules('nama','Nama','required');	
		$this->form_validation->set_rules('password','Password','required');	
		$this->form_validation->set_rules('re-password','Re-password','required');

		$data['data'] = $this->ManagerModel->getDataManager('nama',$this->session->username);
		if($this->form_validation->run() == false){
			$this->load->view('Manager/ManagerEdit',$data);
		}
		else{
			//untuk update .
			if($this->input->post('password') == $this->input->post('re-password')){	
				$data = [              
					'NAMA' => $this->session->username,
					'PASSWORDS' => $this->input->post('password',true),
				];			
				$this->ManagerModel->update($data);
				//jika sudah success maka akan di redirect ke page index.
				redirect('Manager/index');
			}
			$this->load->view('Manager/ManagerEdit',$data);
		}
		
	}

    public function tambah_staff(){
        $this->form_validation->set_rules('nik','nik','required');	
		$this->form_validation->set_rules('nama','nama','required');	
		$this->form_validation->set_rules('password','password','required');

		if($this->form_validation->run() == false){
			$this->load->view('Manager/ManagerAddStaff');
        }else{
            $hak_akses = 1;
            $data = [              
                'nik' => $this->input->post('nik',true),
                'nama' => $this->input->post('nama',true),
                'passwords' => $this->input->post('password',true),
                'hak_akses' => $hak_akses,
            ];
            $this->ManagerModel->addstaff($data);
            redirect('Manager/index');
        }
        // $this->load->view('Manager/ManagerEdit');
    }

	//ini fungsi untuk menghapus data dengan username spesifik dalam database	
	 public function delete(){	
		$this->ManagerModel->delete($this->session->username);
		$this->session->sess_destroy();	
		redirect('Manager/index');
    }
	public function logout(){
		//ini fungsi untuk melogout user.
		$this->session->sess_destroy();
		redirect('Manager/index');
	}

}