<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostData extends CI_Model {
	public function upload_homepage_caurosel($data){
		$this->db->insert('tbl_homepage_caurosel',$data);
	}
	public function upload_testimonials($data){
		$this->db->insert('tbl_testimonials',$data);
	}
	public function upload_blogs($data){
		$this->db->insert('tbl_blogs',$data);
	}
	public function update_services($data){
		$this->db->insert('tbl_services',$data);
	}
	public function update_events($data){
		$this->db->insert('tbl_events',$data);
	}
	public function update_work($data){
		$this->db->insert('tbl_works',$data);
	}
	public function update_doctor($data){
		$this->db->insert('tbl_doctors',$data);
	}
	public function map($data){
		$this->db->insert('tbl_map',$data);
	}
	public function update_about($data){
		$this->db->set('data',$data['Homepage']);
		$this->db->where('item','Homepage');
		$this->db->update('tbl_about');
		$this->db->set('data',$data['About']);
		$this->db->where('item','About');
		$this->db->update('tbl_about');
		$this->db->set('data',$data['Footer']);
		$this->db->where('item','Footer');
		$this->db->update('tbl_about');
	}
	public function update_contact($data){
		$this->db->set('data',$data['Phone']);
		$this->db->where('item','Phone');
		$this->db->update('tbl_contact');
		$this->db->set('data',$data['Mobile']);
		$this->db->where('item','Mobile');
		$this->db->update('tbl_contact');
		$this->db->set('data',$data['Address']);
		$this->db->where('item','Address');
		$this->db->update('tbl_contact');
		$this->db->set('data',$data['Email']);
		$this->db->where('item','Email');
		$this->db->update('tbl_contact');
	}
	public function update_doctor_one($data){
		$this->db->set('name',$data['name']);
		$this->db->set('speciality',$data['speciality']);
		$this->db->set('bio',$data['bio']);
		$this->db->where('id',1);
		$this->db->update('tbl_doctors');
	}
	public function update_doctor_dp($path,$in){
		$this->db->set('dplink',$path);
		$this->db->where('id',$in);
		$this->db->update('tbl_doctors');
	}
	public function update_doctor_two($data){
		$this->db->set('name',$data['name']);
		$this->db->set('speciality',$data['speciality']);
		$this->db->set('bio',$data['bio']);
		$this->db->where('id',2);
		$this->db->update('tbl_doctors');
	}
}