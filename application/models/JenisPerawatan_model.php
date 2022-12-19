<?php
//class
class JenisPerawatan_model extends CI_Model{
   public $tabel = 'jenis_perawatan';

  public function getAll(){
    //select * from perawatan
    $query = $this->db->get($this->tabel);
    return $query->result();
  }

  public function findById($id){
    //select * from perawatan where id = ?
    $this->db->where('id', $id);
    $query = $this->db->get($this->tabel);
    return $query->row();
  }

  public function autoNumber($tabel=NULL, $field=NULL){
    $this->db->select_max($field);
    return $this->db->get($tabel)->row_array()[$field];
  }

  public function save($data){
    //insert into perawatan values (default, tanggal, biaya, km_mobil, deskripsi, mobil_id, jenis_perawatan_id);
    $query = 'INSERT INTO jenis_perawatan VALUES (?, ?, ?, ?, ?, ?, ?)';
    $this->db->query($query, $data);
  }

  public function update($data){
    //update perawatan set ()
    $query = 'UPDATE jenis_perawatan SET id=?, tanggal=?, biaya=?, km_mobil=?, deskripsi=?, mobil_id=?, jenis_perawatan_id=? WHERE id=?';
    $this->db->query($query, $data);
  }

  public function delete($id){

    $query = 'DELETE FROM perawatan WHERE id=?';
    $this->db->query($query, array($id));
  }

}

?>