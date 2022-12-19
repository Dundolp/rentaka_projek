<?php
class Sewa_model extends CI_Model{

    private $table = "sewa";

    public function getAll(){
        //SELECT * FROM sewa
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    public function findById($id){
        //SELECT * FROM sewa WHERE id=$id;
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        // INSERT INTO sewa (id, tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id)
        $sql = "INSERT INTO sewa
        (id, tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        // UPDATE
        $sql = "UPDATE sewa SET id=?,tanggal_mulai=?,tanggal_akhir=?,tujuan=?,
        noktp=?,users_id=?,mobil_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        // DELETE FROM sewa WHERE id=$id;
        $sql = "delete from sewa where id=?";
        $this->db->query($sql,array($id));
    }

    public function getMobil()
    {
        $sql = "SELECT mobil.id as id, merk.nama, mobil.nopol FROM mobil join merk ON merk.id = mobil.merk_id";
        $query = $this->db->query($sql);
        return $query->result();
    }


    
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