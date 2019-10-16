<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch extends CI_Model {
	public function fetch_homepage_caurosel(){
		$this->db->select('*');
		$this->db->from('tbl_homepage_caurosel');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_about(){
		$this->db->select('*');
		$this->db->from('tbl_about');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_contact(){
		$this->db->select('*');
		$this->db->from('tbl_contact');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_doctors(){
		$this->db->select('*');
		$this->db->from('tbl_doctors');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_services(){
		$this->db->select('*');
		$this->db->from('tbl_services');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_events(){
		$this->db->select('*');
		$this->db->from('tbl_events');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_work(){
		$this->db->select('*');
		$this->db->from('tbl_works');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_testimonials(){
		$this->db->select('*');
		$this->db->from('tbl_testimonials');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_blogs(){
		$this->db->select('*');
		$this->db->from('tbl_blogs');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_map(){
		$this->db->select('*');
		$this->db->from('tbl_map');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetch_umap(){
		$this->db->select('*');
		$this->db->from('tbl_map');
		$this->db->where('flag','0');
		$result = $this->db->get();
		return $result->result_array();
	}public function fetch_cmap(){
		$this->db->select('*');
		$this->db->from('tbl_map');
		$this->db->where('flag','0');
		$result = $this->db->get();
		return $result->num_rows();
	}
}