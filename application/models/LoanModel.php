<?php
class LoanModel extends CI_Model{
        public function getall(){
                $query=$this->db->get('loantypes');
                return $query->result();
           }

        public function store($data){
        
            $this->db->insert('loantypes',$data);
            return $this->db->insert_id();
        }
        
        public function updateLoginToken($token,$userid){
                $this->db->query("UPDATE users SET logintoken='$token' WHERE id=$userid");
        }

        public function checkcomapany($mobile,$pwd){
                $this->db->where('contact', $mobile);
                $this->db->where('pwd',$pwd);
                $query=$this->db->get('users');
                return $query->row();
        }
        
        public function getMember($userid){
                $this->db->where('id',$userid);
                $query=$this->db->get('users');
                return $query->row();
        }
}