<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_barang extends CI_Model
{
	public function get_barang(){
		return $this->db->get('tbl_barang');
	}
	public function get_detail_barang($id){
		return $this->db->get_where('tbl_barang', array('id' => $id));
	}

	public function update_barang($data,$id){
		$this->db->update("tbl_barang",$data,$id);
	}
	public function delete_barang($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_barang'); 
	}

	public function insert_barang($data){
		$this->db->insert('tbl_barang', $data); 
	}

	
}