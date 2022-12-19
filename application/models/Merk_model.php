<?php 
 class Merk_model extends CI_Model{

     private $table = "merk";
     
     public function getAll(){
         //SELECT * FROM merk
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         // SELECT * FROM merk WHERE id=$id;
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function save($data){
         // INSERT INTO merk (id, nama, produk)
         $sql = "INSERT INTO merk 
         (id, nama, produk)
           VALUES (?,?,?)";
        $this->db->query($sql,$data);

     }

     public function update($data){
        // UPDATE
        $sql = "UPDATE merk SET id=?,nama=?,produk=? WHERE id=?";
         $this->db->query($sql,$data);
     }

     public function delete($id){
        // DELETE FROM merk WHERE id=$id;
        $sql = "delete from merk where id=?";
        $this->db->query($sql,array($id));
     }


     /*
     public $id;
     public $nama;
     public $gender;
     public $tmp_lahir;
     public $tgl_lahir;
     public $ipk;
     public $prodi;
     public function predikat(){
         $predikat = ($this->ipk >= 3.75)?"Cumlaude":"Baik";
         return $predikat;
     }
     public function getAll(){
         $result  = $this->db->get('mahasiswa')->result();
         return $result;
     }
     */
 }

?>