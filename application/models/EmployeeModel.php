<?php
class employeeModel extends CI_Model{
        public function getemployee(){
                $query=$this->db->get('employee');
                return $query->result();
           }
           public function getCompmantyemployee(){
                $this->db->where('pwd',$pwd);
                   $query=$this->db->get('employee');
                   return $query->result();
              }
              public function get($id){
                $this->db->where('id',$id);
                   $query=$this->db->get('employee');
                   return $query->row();
              }
        public function store($data){
        
            $this->db->insert('employee',$data);
            return $this->db->insert_id();
        }
        
        public function updateLoginToken($token,$userid){
                $this->db->query("UPDATE users SET logintoken='$token' WHERE id=$userid");
        }

        public function checkemployee($mobile,$pwd){
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
        public function update($data,$id){
          $this->db->where('id',$id);
             $this->db->update('employee',$data);
             return $this->db->affected_rows();
        }
}