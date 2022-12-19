<?php
class Registrasi_model extends CI_Model{
    // Buat Property atau variable
    public $id, $email, $username, $password, $created_at, $last_at, $status, $role;

    public function getALL(){
        // menampilkan seluruh data yang ada di table users menggunakan query builder
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO users(username, password, email, created_at, last_login, status, role) VALUES (?,?,?,now(),now(),1,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
}
?>