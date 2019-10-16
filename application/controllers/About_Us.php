<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Us extends CI_Controller {
	public function index()
	{
		$dataSend['header'] = 'About Us';
		$this->load->model('Fetch');
		$dataSend['navbar'] = 'About';
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['doctors'] = $this->Fetch->fetch_doctors();
		$dataSend['testimonials'] = $this->Fetch->fetch_testimonials();
		$this->load->view('About/about',$dataSend);
	}
}
