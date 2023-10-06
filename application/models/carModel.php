<?php
class employeeModel extends CI_Model{
        public function getcar(){
                $query=$this->db->get('car');
                return $query->result();
           }
           
              public function get($id){
                $this->db->where('id',$id);
                   $query=$this->db->get('car');
                   return $query->row();
              }
        public function storecar($data){
        
            $this->db->insert('car',$data);
            return $this->db->insert_id();
        }
        
        public function updateLoginToken($token,$userid){
                $this->db->query("UPDATE users SET logintoken='$token' WHERE id=$userid");
        }
        
        public function update($data,$id){
          $this->db->where('id',$id);
             $this->db->update('car',$data);
             return $this->db->affected_rows();
        }
}