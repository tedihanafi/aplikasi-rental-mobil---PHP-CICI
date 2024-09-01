<?php
// WWW.AKADEMIKITA.COM === Author : Fabio Junior
// Model yang terstruktur. agar bisa digunakan berulang kali untuk membuat CRUD.
// Sehingga proses pembuatan CRUD menjadi lebih cepat dan efisien.
class M_rental extends CI_Model{
function edit_data($where,$table){
return $this->db->get_where($table,$where);
}
function get_data($table){
return $this->db->get($table);
}
function insert_data($data,$table){
$this->db->insert($table,$data);
}
function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
function delete_data($where,$table){
$this->db->where($where);
$this->db->delete($table);
}
}
