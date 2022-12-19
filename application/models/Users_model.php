<?php 
 class Users_model extends CI_Model{

     private $table = "users";
     
     public function getAll(){
         //SELECT * FROM users
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         // SELECT * FROM users WHERE id=$id;
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function save($data){
         // INSERT INTO users (id, username, password)
         $sql = "INSERT INTO users 
         (id, username, password, email, created_at, last_login, status, role)
           VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);

     }

     public function update($data){
        // UPDATE
        $sql = "UPDATE users SET id=?,username=?,password=?,email=?,created_at=?,last_login=?,status=?,role=? WHERE id=?";
         $this->db->query($sql,$data);
     }

     public function delete($id){
        // DELETE FROM users WHERE id=$id;
        $sql = "delete from users where id=?";
        $this->db->query($sql,array($id));
     }

     public function login($uname, $pw){
        $sql = "SELECT * FROM users WHERE username=? AND password=MD5(?)";
        $data = [$uname, $pw];
        $query = $this->db->query($sql, $data);
        return $query->row();
     }

     public function regis($data){
        $sql = "INSERT INTO users(username, password, email, created_at, last_login, status, role) VALUES (?,MD5(?),?,now(),now(),1,'public')";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->findById($insert_id);
    }

 }

?>