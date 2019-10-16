<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {
	public function index()
	{
		$dataSend['header'] = 'Contact Us';
		$this->load->model('Fetch');
		$dataSend['navbar'] = 'Contact';
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['doctors'] = $this->Fetch->fetch_doctors();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$this->load->view('Contact/contact',$dataSend);
	}
	public function map()
	{
		//$this->form_validation->set_rules('hashtag','Hashtag','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('phone','Mobile','numeric|required');
		if($this->form_validation->run() == FALSE){
			$dataSend['header'] = 'Contact Us';
			$this->load->model('Fetch');
			$dataSend['navbar'] = 'Contact';
			$dataSend['contacts'] = $this->Fetch->fetch_contact();
			$dataSend['doctors'] = $this->Fetch->fetch_doctors();
			$dataSend['abouts'] = $this->Fetch->fetch_about();
			$this->load->view('Contact/contact',$dataSend);
		}
		else{
	        	$dataPost = array(
	        		'name' => $this->input->post('name'),
	        		'phone' => $this->input->post('phone'),
	        		'date' => $this->input->post('date'),
	        		'doctor' => $this->input->post('doctor')
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->map($dataPost);
	        	redirect('Contact_Us');
	        	echo "<script type=\"text/javascript\">alert('Successfully Booked Appointment!!!');</script>";
		}
	}
}
