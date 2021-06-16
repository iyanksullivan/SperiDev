<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class CartModel extends CI_Model {
 
    public function getAllProduct()
    {
        $query = $this->db->get('sparepart');
        return $query->result_array();
    }

    public function getOrderDetailProduct()
    {
        $query = $this->db->get('cart');
        return $query->result_array();
    }
 
    public  function getProductId($id)
    {
        $this->db->select('sparepart.*');
        $this->db->from('sparepart');        
        $this->db->where('kode',$id);
        return $this->db->get();
    }   

    public  function getProductOrder($id)
    {
        $this->db->select('cart.*');
        $this->db->from('cart');        
        $this->db->where('kodeSparepart',$id);
        return $this->db->get();
    }      
    
    
    public function checkQty($kode, $qty){    
        $this->db->where('kode', $kode);
        $check =  $this->db->count_all_results('sparepart');
        if($check > 0){            
            $this->db->where('kode',$kode);
            $data = $this->db->get('sparepart')->row_array();
            if($data['jumlah'] >= $qty){
                $stat =  true;
            }
            else{
                $stat =  false;
            }            
        }
        else{ 
          
            $stat = false;
        }

        return $stat; 
    }
 
    public function addOrder($data)
    {
        $this->db->insert('orders', $data);
    }
 
    public function addDetailOrder($data)
    {
        $this->db->insert('cart', $data);
    }

    //ini fungsi update data dalam database dengan id cart spesifik
    public function updateOrder($id,$data){       
        $this->db->where('id', $id)->update('cart', $data);
    }

    public function delete($id){
        $this->db->where('id', $id)->delete('cart');
    }

    public function deleteAllCart(){
        $this->db->empty_table('cart');
    }
}
?>