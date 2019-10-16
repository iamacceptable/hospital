<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diaries extends CI_Controller {
	public function index()
	{
		$dataSend['header'] = 'Blogs';
		$this->load->model('Fetch');
		$dataSend['navbar'] = 'Diaries';
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$dataSend['blogs'] = $this->Fetch->fetch_blogs();
		$this->load->view('Diaries/diaries',$dataSend);
	}
}
