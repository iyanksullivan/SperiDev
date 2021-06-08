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
        $data['order_detail'] = $this->CartModel->getOrderDetailProduct();
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/productList',$data);      
        $this->load->view('Themes/footer');  
    }
    public function viewCart()
    {   
        if(isset($this->session->username)){
            $data['order_detail'] = $this->CartModel->getOrderDetailProduct();
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
        $data['order_detail'] = $this->CartModel->getOrderDetailProduct();
        $data['customer'] = $this->CustomerModel->getDataCust('username',$this->session->username);
        $this->load->view('Themes/header2');
        $this->load->view('Shopping/checkout',$data);
        $this->load->view('Themes/footer');
    }
 
    public function productDetail()
    {
        
        $id=($this->uri->segment(3))?$this->uri->segment(3):0;            
        $data['detail'] = $this->CartModel->getProductId($id)->row_array();
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
                                'foto' =>$this->input->post('foto')
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
                $this->CartModel->deleteAll();
            }
        else
            {
                $this->CartModel->delete($id);
            }
        redirect('Shopping/viewCart');
    }
 
    function edit()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $harga = $cart['harga'];
            $foto = $cart['foto'];
            $total = $harga * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                            'harga' => $harga,
                            'gambar' => $gambar,
                            'total' => $total,
                            'qty' => $qty);
            $this->cart->update($data);
        }
        redirect('Shopping/viewCart');
    }
 
    public function order()
    {
        //-------------------------Input data pelanggan--------------------------
        // $data_pelanggan = array('nama' => $this->input->post('nama'),                            
        //                     'alamat' => $this->input->post('alamat'),
        //                     'telp' => $this->input->post('telp'));
        // $idCustomer = $this->CartModel->addCustomer($data_pelanggan);
        //-------------------------Input data order------------------------------
        $data_order = array('tanggal' => date('Y-m-d'),
                            'username' => $this->session->username);
        $kodeBayar = $this->CartModel->addOrder($data_order);
        //-------------------------Input data detail order-----------------------
        // if ($cart = $this->cart->contents())
        //     {
        //         foreach ($cart as $item)
        //             {
        //                 $data_detail = array('order_id' =>$idOrder,
        //                                 'produk' => $item['id'],
        //                                 'qty' => $item['qty'],
        //                                 'harga' => $item['harga']);
        //                 $proses = $this->CartModel->addDetailOrder($data_detail);
        //             }
        //     }
        //-------------------------Hapus Shopping cart--------------------------        
        $this->CartModel->deleteAll();
        $data['order'] = $kodeBayar;
        $this->load->view('Themes/header2');
        $this->load->view('Shopping/orderComplete',$data);
        $this->load->view('Themes/footer');
    }

    public function test(){
        $this->load->view('Themes/header');
        $this->load->view('Shopping/orderComplete');
        $this->load->view('Themes/footer');
    }
}
?>