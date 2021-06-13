<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 
class Shopping extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('CartModel');
        $this->load->model('CustomerModel');
    }
 
    public function index()
    {       
        $data['sparepart'] = $this->CartModel->getAllProduct();
        $data['cart'] = $this->CartModel->getOrderDetailProduct();
        $data['username'] = $this->session->username;
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/productList',$data);      
        $this->load->view('Themes/footer');  
    }
    public function viewCart()
    {   
        if(isset($this->session->username)){
            $data['cart'] = $this->CartModel->getOrderDetailProduct();
            $data['username'] = $this->session->username;            
            $this->load->view('Themes/header2',$data);
            $this->load->view('Shopping/viewCart',$data);
            $this->load->view('Themes/footer');
        }
        
        else{
			redirect('Customer/login');
		}
    }
 
    public function checkout()
    {        
        $data['cart'] = $this->CartModel->getOrderDetailProduct();
        $data['customer'] = $this->CustomerModel->getDataCust('username',$this->session->username);
        $data['username'] = $this->session->username;
        $this->load->view('Themes/header2',$data);
        $this->load->view('Shopping/checkout',$data);
        $this->load->view('Themes/footer');
    }
 
    public function productDetail()
    {
        
        $id=($this->uri->segment(3))?$this->uri->segment(3):0;            
        $data['detail'] = $this->CartModel->getProductId($id)->row_array();
        $data['username'] = $this->session->username;
        $this->load->view('Themes/header2',$data);
        $this->load->view('Shopping/productDetail',$data);
        $this->load->view('Themes/footer');       
    }
 
    function add()
    {        
        if(isset($this->session->username)){
            $uname = $this->session->username;
            $data_produk= array( 'username' => $uname,  
                                'namaSparepart' => $this->input->post('nama'),
                                'harga' => $this->input->post('harga'),                             
                                'qty' =>$this->input->post('qty'),
                                'foto' =>$this->input->post('foto'),
                                'kodeSparepart' =>$this->input->post('kodeSparepart')
                                );
            // $this->cart->insert($data_produk);
            $this->CartModel->addDetailOrder($data_produk);
            redirect('Shopping/index');
        }
        else{
			redirect('Customer/login');
		}
    }
 
    function delete($id)
    {
        if ($id=="all")
            {
                $this->CartModel->deleteAllCart();
            }
        else
            {
                $this->CartModel->delete($id);
            }
        redirect('Shopping/viewCart');
    }
 
    public function edit($id)
    {                
        $this->form_validation->set_rules('qty','qty','required');
        
        $data['username'] = $this->session->username;
        $data['detail'] = $this->CartModel->getProductOrder($id)->row_array();            
        if($this->form_validation->run() == false){
            $this->load->view('Themes/header2',$data);
            $this->load->view('Shopping/editOrder',$data);
            $this->load->view('Themes/footer');		
        }
        else{
            
            $qty = $this->input->post('qty');
            if($qty){
                $data = array('qty' =>$qty);
                $this->CartModel->updateOrder($id,$data);                
            }
            redirect('Shopping/viewCart');
            
        }	
        
    }    
 
    public function order()
    {        
        $kodeBayar = rand();
        $data_order = array('tanggal' => date('Y-m-d'),
                            'username' => $this->session->username,
                            'kodeBayar' => $kodeBayar,
                            'total' => $this->input->post('total'),
                            'bank' => $this->input->post('bank'),
                            'status' => 'Belum Lunas');
        $this->CartModel->addOrder($data_order);
        $this->CartModel->deleteAllCart();
        
        $data['order'] = $kodeBayar;
        $data['username'] = $this->session->username;
        $this->load->view('Themes/header2',$data);
        $this->load->view('Shopping/orderComplete',$data);
        $this->load->view('Themes/footer');
    }

    public function test(){
        $data['username'] = $this->session->username;
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/orderComplete');
        $this->load->view('Themes/footer');
    }
}
?>