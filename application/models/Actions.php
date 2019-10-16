<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Model {
	public function delete_homepage_caurosel($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_homepage_caurosel');
	}
	public function delete_services($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_services');
	}
	public function delete_events($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_events');
	}
	public function delete_work($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_works');
	}
	public function delete_doctors($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_doctors');
	}
	public function delete_testimonials($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_testimonials');
	}
	public function delete_blogs($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_blogs');
	}
	public function map($id){
		$this->db->set('flag', '1');
		$this->db->where('id',$id);
		$this->db->update('tbl_map');
	}
	public function chkAuth($username, $password){
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('a_username',$username);
		$this->db->where('a_password',$password);
		$res = $this->db->get();
		if($res->num_rows() == 1)
			return $res->result_array();
		else
			return FALSE;
	}
}