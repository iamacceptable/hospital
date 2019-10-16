<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
		$dataSend['header'] = 'Services';
		$dataSend['navbar'] = 'Gallery';
		$this->load->model('Fetch');
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['services'] = $this->Fetch->fetch_services();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$this->load->view('Gallery/gallery',$dataSend);
	}
}
