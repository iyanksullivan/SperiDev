<?php
class CustomerModel extends CI_Model{

  //   //fung untuk mengecek nik
  //   public function checkUnameAdm($nik){
  //       //ini melakukan pengecekan kedalam database untuk menentukan apakah nik sudah ada dalam database
		// $this->db->where('NIK', $nik);
  // 		$check =  $this->db->count_all_results('staff_gudang'); 
  //       //disini mengecek apakah pemilik nik tersebut lebih dari 0, jika 0 maka nik dapat digunakan dan jika tidak maka nik tidak dapat digunakan
		// if($check > 0) return true;	
		// else return false;

    // }

    //fungsi untuk mengembalikan data dari customer
    public function getDataCust($key,$value){
        return $this->db->get_where('customer', [$key => $value])->row_array();
    }

    //fungsi untuk mengembalikan data dari customer 
    public function getAllData($key,$value){
        return $this->db->get_where('customer', [$key => $value])->row_array();
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

    public function delete($username){
        //ini fungsi untuk menghapus data dengan username spesifik dalam database
        $this->db->where('username', $username)->delete('customer');
    }


}