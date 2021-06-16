<?php
class CustomerModel extends CI_Model{

    //fungsi untuk mengembalikan data dari customer
    public function getDataCust($key,$value){
        return $this->db->get_where('customer', [$key => $value])->row_array();
    }

    //fungsi untuk mengembalikan data dari order
    public function getAllOrders($uname){
        $this->db->where('username',$uname);
        $pass = $this->db->get('orders')->result_array();
        return $pass;
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
        $check =  $this->db->count_all_results('customer'); //1
        if($check > 0){ //2
            //jika nik valid selanjutnya melakukan pengecekan password
            $this->db->where('username',$data['username']); //3
            $pass = $this->db->get('customer')->row_array();
            if($pass['password'] == $data['password'] ){ //4
                $stat =  true; //5
            }
            else{ //6
                $stat =  false;//7
            }            
        }
        else{ //8
            //Jika nik tidak ada maka otomatis invalid
            $stat = false; //9
        }

        return $stat; //10
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