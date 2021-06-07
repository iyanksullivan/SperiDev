<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 
class Shopping extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('CartModel');
    }
 
    public function index()
    {       
        $data['sparepart'] = $this->CartModel->getAllProduct();
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/productList',$data);      
        $this->load->view('Themes/footer');  
    }
    public function viewCart()
    {        
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/viewCart',$data);
        $this->load->view('Themes/footer');
    }
 
    public function checkout()
    {        
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/checkout',$data);
        $this->load->view('Themes/footer');
    }
 
    public function productDetail()
    {
        $id=($this->uri->segment(3))?$this->uri->segment(3):0;
        // $data['kategori'] = $this->CartModel->get_kategori_all();
        $data['detail'] = $this->CartModel->getProductId($id)->row_array();
        $this->load->view('Themes/header',$data);
        $this->load->view('Shopping/productDetail',$data);
        $this->load->view('Themes/footer');
    }
 
    function add()
    {
        $data_produk= array('id' => $this->input->post('id'),
                             'nama' => $this->input->post('nama'),
                             'harga' => $this->input->post('harga'),
                             'foto' => $this->input->post('foto'),
                             'qty' =>$this->input->post('qty')
                            );
        $this->cart->insert($data_produk);
        redirect('Shopping/index');
    }
 
    function delete($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
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
        $data_pelanggan = array('nama' => $this->input->post('nama'),                            
                            'alamat' => $this->input->post('alamat'),
                            'telp' => $this->input->post('telp'));
        $idCustomer = $this->CartModel->addCustomer($data_pelanggan);
        //-------------------------Input data order------------------------------
        $data_order = array('tanggal' => date('Y-m-d'),
                            'pelanggan' => $idCustomer);
        $idOrder = $this->CartModel->tambah_order($data_order);
        //-------------------------Input data detail order-----------------------
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('order_id' =>$idOrder,
                                        'produk' => $item['id'],
                                        'qty' => $item['qty'],
                                        'harga' => $item['harga']);
                        $proses = $this->CartModel->addDetailOrder($data_detail);
                    }
            }
        //-------------------------Hapus Shopping cart--------------------------
        $this->cart->destroy();
        // $data['kategori'] = $this->CartModel->get_kategori_all();
        $this->load->view('Themes/header',$data);
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