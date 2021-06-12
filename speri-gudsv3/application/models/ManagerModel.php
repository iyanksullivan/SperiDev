<?php

class ManagerModel extends CI_Model{
    
    public function getDataManager($key,$value){
        return $this->db->get_where('manager',[$key=>$value])->row_array();
    }

    public function auth_mgr($data){
        $this->db->where('nama',$data['NAMA']);
        $check = $this->db->count_all_results('manager');
        if($check>0){
            $this->db->where('nama',$data['NAMA']);
            $pass = $pass = $this->db->get('manager')->row_array();
            if($pass['passwords'] == $data['Password']){
                return true;
            }else{
                return false;
            }
        }
        
    }
    public function create($data){
       $this->db->insert('manager', $data);
    }
    public function addstaff($data){
        $this->db->insert('staff_gudang', $data);
     }

    public function update($data){       
        $this->db->where('nama', $data['NAMA'])->update('manager', $data);
    }

    public function delete($username){
        $this->db->where('nama', $username)->delete('manager');
    }

}