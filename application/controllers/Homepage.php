<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function index()
	{
		$this->load->model('Fetch');
		$dataSend['sliders'] = $this->Fetch->fetch_homepage_caurosel();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['doctors'] = $this->Fetch->fetch_doctors();
		$dataSend['testimonials'] = $this->Fetch->fetch_testimonials();
		$dataSend['header'] = 'Home';
		$dataSend['navbar'] = 'Home';
		$this->load->view('Homepage/homepage',$dataSend);
	}
	public function map()
	{
		//$this->form_validation->set_rules('hashtag','Hashtag','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('phone','Mobile','numeric|required');
		if($this->form_validation->run() == FALSE){
			$dataSend['header'] = 'Home';
			$this->load->model('Fetch');
			$dataSend['navbar'] = 'Home';
			$dataSend['contacts'] = $this->Fetch->fetch_contact();
			$dataSend['doctors'] = $this->Fetch->fetch_doctors();
			$dataSend['abouts'] = $this->Fetch->fetch_about();
			$this->load->view('Homepage/homepage',$dataSend);
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
	        	redirect('Homepage');
	        	echo "<script type=\"text/javascript\">alert('Successfully Booked Appointment!!!');</script>";
		}
	}
}
