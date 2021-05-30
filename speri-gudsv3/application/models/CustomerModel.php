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
        return $this->db->get_where('CUSTOMER', [$key => $value])->row_array();
    }

    //fungsi untuk mengembalikan data dari customer 
    public function getAllData($key,$value){
        return $this->db->get_where('CUSTOMER', [$key => $value])->row_array();
    }

    //fungsi untuk melakukan pengecekan credential untuk login admin
    public function checkAuth($data){
        //disini kita akan memanggilkan fungsi diatas dimana dia akan mengecek username 
        $this->db->where('username', $data['username']);
        $check =  $this->db->count_all_results('CUSTOMER'); 
        if($check > 0){
            //jika nik valid selanjutnya melakukan pengecekan password
            $this->db->where('username',$data['username']);
            $pass = $this->db->get('CUSTOMER')->row_array();
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
        
        /* Defined Data */
        // $data = [
        //     'username' => $this->input->post('username',true),
        //     'nama' => $this->input->post('nama',true),
        //     'password' => $this->input->post('password',true),
        //     'alamat' => $this->input->post('alamat',true)
        // ];
       /* Inserting Data */
       $this->db->insert('CUSTOMER', $data);
    }

    //ini fungsi update data dalam database dengan username spesifik
    public function update($data){       
        $this->db->where('username', $data['username'])->update('CUSTOMER', $data);
    }

    public function delete($username){
        //ini fungsi untuk menghapus data dengan username spesifik dalam database
        $this->db->where('username', $username)->delete('CUSTOMER');
    }


}