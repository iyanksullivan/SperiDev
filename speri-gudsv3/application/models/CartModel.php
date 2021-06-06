<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class CartModel extends CI_Model {
 
    public function getAllProduct()
    {
        $query = $this->db->get('sparepart');
        return $query->result_array();
    }
 
    public  function getProductId($id)
    {
        $this->db->select('sparepart.*,nama_kategori');
        $this->db->from('sparepart');        
        $this->db->where('id_produk',$id);
        return $this->db->get();
    }   
 
    public function addCustomer($data)
    {
        $this->db->insert('tbl_pelanggan', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
 
    public function addOrder($data)
    {
        $this->db->insert('tbl_order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
 
    public function addDetailOrder($data)
    {
        $this->db->insert('tbl_detail_order', $data);
    }
}
?>