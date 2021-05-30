<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Page extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('CartModel');
    }
    public function index()
        {
            $data['produk'] = $this->CartModel->getAllProduct();
            // $data['kategori'] = $this->CartModel->get_kategori_all();
            $this->load->view('Themes/header',$data);
            // $this->load->view('Shopping/productList',$data);
            // $this->load->view('Themes/footer');
        }
    public function aboutUs()
        {
            // $data['kategori'] = $this->CartModel->get_kategori_all();
            $this->load->view('Themes/header');
            $this->load->view('Page/aboutUs');
            $this->load->view('Themes/footer');
        }
    public function petunjukBayar()
        {
            // $data['kategori'] = $this->CartModel->get_kategori_all();
            $this->load->view('Themes/header');
            $this->load->view('Page/petunjukBayar');
            $this->load->view('Themes/footer');
        }
}