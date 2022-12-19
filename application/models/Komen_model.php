<?php
class Komen_model extends CI_Model{

    private $table = "komentar";

    public function getAll(){
        //SELECT * FROM komentar
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function findById($id){
        //SELECT * FROM komentar WHERE id=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        // INSERT INTO 
        $sql = "INSERT INTO komentar(id_user, nama, email, komentar) VALUES (?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        // UPDATE
        $sql = "UPDATE komentar SET id_user=?,nama=?,email=?,komentar=? WHERE id_user=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        // DELETE FROM sewa WHERE id=$id;
        $sql = "DELETE FROM komentar WHERE id_user=?";
        $this->db->query($sql,array($id));
    }

    // public function getMobil()
    // {
    //     $sql = "SELECT mobil.id as id, merk.nama, mobil.nopol FROM mobil join merk ON merk.id = mobil.merk_id";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }


    
// class Mahasiswa_models extends CI_Model {
//     public $id;
//     public $nama;
//     public $nim;
//     public $gender;
//     public $tmp_lahir;
//     public $tgl_lahir;
//     public $ipk;

//     public function predikat(){
//         $predikat = ($this->ipk >= 3.75)? "Cumlaude" : "Baik";
//         return $predikat;
//     }
}