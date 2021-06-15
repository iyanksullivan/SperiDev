<?php

class StaffModel extends CI_Model{
    
    public function getDataStaff($key,$value){
        return $this->db->get_where('staff_gudang',[$key=>$value])->row_array();
    }

    public function auth_staff($data){
        $this->db->where('nama',$data['NAMA']);
        $check = $this->db->count_all_results('staff_gudang');
        if($check>0){
            $this->db->where('nama',$data['NAMA']);
            $pass = $pass = $this->db->get('staff_gudang')->row_array();
            if($pass['passwords'] == $data['Password']){
                return true;
            }else{
                return false;
            }
        }
        
    }
    public function create($data){
       $this->db->insert('staff_gudang', $data);
    }

    public function update($data,$old){       
        $this->db->where('nama', $old['OLD_UNAME'])->update('staff_gudang', $data);
    }

    public function delete($username){
        $this->db->where('nama', $username)->delete('staff_gudang');
    }

}