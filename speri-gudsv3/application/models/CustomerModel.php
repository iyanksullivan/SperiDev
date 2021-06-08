<?php
class CustomerModel extends CI_Model{

    //fungsi untuk mengembalikan data dari customer
    public function getDataCust($key,$value){
        return $this->db->get_where('customer', [$key => $value])->row_array();
    }

    //fungsi untuk mengembalikan semua data customer 
    public function getAllData(){
        $query = $this->db->get('customer');
        return $query->result_array();
    }

    //fungsi untuk melakukan pengecekan credential untuk login admin
    public function checkAuth($data){
        //disini kita akan memanggilkan fungsi diatas dimana dia akan mengecek username 
        $this->db->where('username', $data['username']);
        $check =  $this->db->count_all_results('customer'); 
        if($check > 0){
            //jika nik valid selanjutnya melakukan pengecekan password
            $this->db->where('username',$data['username']);
            $pass = $this->db->get('customer')->row_array();
            if($pass['password'] == $data['password'] ){
                return true;
            }
            else{
                return false;
            }            
        }
        else{
            //Jika nik tidak ada maka otomatis invalid
            return false;
        }
    }

    // fungsi untuk melakukan penyimpanan admin kedalam database
    public function create($data){
        $this->db->insert('customer', $data);
    }

    //ini fungsi update data dalam database dengan username spesifik
    public function update($data){       
        $this->db->where('username', $data['username'])->update('customer', $data);
    }

    //ini fungsi untuk menghapus data dengan username spesifik dalam database
    public function delete($username){
        $this->db->where('username', $username)->delete('customer');
    }


}