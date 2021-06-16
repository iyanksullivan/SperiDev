<?php

class SparepartModel extends CI_Model{
    
    public function checkAuth($data){
        //disini kita akan memanggilkan fungsi diatas dimana dia akan mengecek username 
        $this->db->where('kode', $data['kode']);
        $check = $this->db->count_all_results('sparepart');
        if($check>0){
            return false;
        }else{
            return true;
        }
    }
    public function getAlldata(){
        $query = $this->db->get('sparepart');
        return $query->result_array();
    }

    public function getDataSparepart($kode){
        return $this->db->get_where('sparepart',['kode'=>$kode])->row_array();
    }

    public function create($data){
        $this->db->insert('sparepart',$data);
    }

    public function update($data){
        $this->db->where('kode',$data['kode'])->update('sparepart',$data);
    }

    public function delete($kode){
        $this->db->where('kode',$kode)->delete('sparepart');
    }
}
