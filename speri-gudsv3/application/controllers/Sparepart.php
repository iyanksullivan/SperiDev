<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sparepart extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('SparepartModel');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('Sparepart/dashboard');
    }
    public function dashboardedit(){
        $data['sparepart'] = $this->SparepartModel->getAlldata();
        $this->load->view('Sparepart/editsparepart',$data);
    }
    public function AddSparepart(){
        $this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('jenis','Jenis','required');	
		$this->form_validation->set_rules('manufaktur','Manufaktur','required');	
		$this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('harga','Harga','required');

        if($this->form_validation->run() == false){
            $this->load->view('Sparepart/Sparepartadd');
        }else{
            $data['kode'] = $this->input->post('kode');
            $data['nama'] = $this->input->post('name');
            $data['jenis'] = $this->input->post('jenis');
            $data['manufaktur'] = $this->input->post('manufaktur');
            $data['jumlah'] = $this->input->post('jumlah');
            $data['harga'] = $this->input->post('harga');

            if($this->SparepartModel->checkAuth($data)){
                $this->SparepartModel->create($data);
                redirect('Sparepart/index');
            }else{
                redirect('Sparepart/index');
            }
        }
    }
    public function delete($kode){
        $this->SparepartModel->delete($kode);
		redirect('Sparepart/index');
    }
    public function editSparepart($kode){
        $temp["sparepart"] = $this->SparepartModel->getDataSparepart($kode);
        $this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('jenis','Jenis','required');	
		$this->form_validation->set_rules('manufaktur','Manufaktur','required');	
		$this->form_validation->set_rules('jumlah','Jumlah','required');
        $this->form_validation->set_rules('harga','Harga','required');
        if($this->form_validation->run() == false){
            $this->load->view('Sparepart/sparepartedit',$temp);
        }else{
            $data['kode'] = $this->input->post('kode');
            $data['nama'] = $this->input->post('name');
            $data['jenis'] = $this->input->post('jenis');
            $data['manufaktur'] = $this->input->post('manufaktur');
            $data['jumlah'] = $this->input->post('jumlah');
            $data['harga'] = $this->input->post('harga');
            $this->SparepartModel->update($data);
            redirect('Sparepart/index');
        }
    }
    
}
