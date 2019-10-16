<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index()
	{
		$dataSend['header'] = 'Events';
		$dataSend['navbar'] = 'Events';
		$this->load->model('Fetch');
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['events'] = $this->Fetch->fetch_events();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$this->load->view('Events/events',$dataSend);
	}
	public function our_works(){
		$dataSend['header'] = 'Our Works';
		$dataSend['navbar'] = 'Works';
		$this->load->model('Fetch');
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['works'] = $this->Fetch->fetch_work();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$this->load->view('Work/events',$dataSend);
	}
}
