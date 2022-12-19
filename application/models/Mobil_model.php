<?php 
 class Mobil_model extends CI_Model{

     private $table = "mobil";
     
     public function getAll(){
         //SELECT * FROM mobil
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         // SELECT * FROM mobil WHERE id=$id;
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function save($data){
         // INSERT INTO mobil (id, nopol, warna, biaya_sewa, deskripsi, cc, tahun, merk_id, foto)
         $sql = "INSERT INTO mobil 
         (id, nopol, warna, biaya_sewa, deskripsi, cc, tahun, merk_id, foto)
           VALUES (?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql,$data);

     }

     public function update($data){
        // UPDATE
        $sql = "UPDATE mobil SET id=?,nopol=?,warna=?,biaya_sewa=?,deskripsi=?,cc=?,tahun=?,merk_id=?,foto=? WHERE id=?";
         $this->db->query($sql,$data);
     }

     public function delete($id){
        // DELETE FROM mobil WHERE id=$id;
        $sql = "delete from mobil where id=?";
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