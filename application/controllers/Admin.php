<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        
      }
	public function index(){
			if(isset($_SESSION['user']) && $_SESSION['session'] == 'active'){
	        	redirect('Admin/homepage_caurosel');
	        }
	        else{
	        	$this->load->model('Fetch');
				$data['cmap'] = $this->Fetch->fetch_cmap();
				$data['header'] = 'Authentication';
				$this->load->view('Admin/auth',$data);			
			}
	}
	public function authentication(){
		$this->form_validation->set_rules('username','Username','required'); 
		$this->form_validation->set_rules('password','Password','required|max_length[12]|min_length[8]'); 
		if($this->form_validation->run() == FALSE){
			$data['header'] = 'Authentication';
			$this->load->view('Admin/auth',$data);		
		}
		else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Actions');
			$res = $this->Actions->chkAuth($username, md5($password));
			if($res!= FALSE){
				$sessionData = array(
					'session' => 'active',
					'user' => 'admin',
					'id' => $res[0]['id']
				);
				$this->session->set_userdata($sessionData);
				redirect('Admin/homepage_caurosel');
			}
			else{
				$data['header'] = 'Authentication';
				$data['error'] = 'Wrong Credentials!!! Please Try Again!!!';
				$this->load->view('Admin/auth',$data);
			}
		}
	}
	//Calling View to Homepage Slider
	public function homepage_caurosel()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['sliders'] = $this->Fetch->fetch_homepage_caurosel();
		$dataSend['header'] = 'Homepage Slider';
		$dataSend['sidebar'] = 'HC';
		$this->load->view('Admin/homepage_caurosel',$dataSend);
	}
	//updating the Homepage Image
	public function upload_homepage_caurosel()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('hashtag','Hashtag','required');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		$config['upload_path'] = './assets/uploads/homepage_caurosel/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20480000;
        $this->load->library('upload',$config);
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['sliders'] = $this->Fetch->fetch_homepage_caurosel();
			$dataSend['header'] = 'Homepage Slider';
			$dataSend['sidebar'] = 'HC';
			$this->load->view('Admin/homepage_caurosel',$dataSend);
		}
		else{
			if(!$this->upload->do_upload('cauroselimg')){
				$this->load->model('Fetch');
				$dataSend['umap'] = $this->Fetch->fetch_umap();
				$dataSend['cmap'] = $this->Fetch->fetch_cmap();
				$dataSend['sliders'] = $this->Fetch->fetch_homepage_caurosel();
				$dataSend['header'] = 'Homepage Slider';
				$dataSend['sidebar'] = 'HC';
	        	$dataSend['error'] = $this->upload->display_errors();
				$this->load->view('Admin/homepage_caurosel',$dataSend);
			}
			else{
				$fu = $this->upload->data();
        		$path = base_url().'assets/uploads/homepage_caurosel/'.$fu['file_name'];
	        	$dataPost = array(
	        		'hashtag' => $this->input->post('hashtag'),
	        		'description' => $this->input->post('description'),
	        		'title' => $this->input->post('title'),
	        		'link' => $path
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->upload_homepage_caurosel($dataPost);
	        	redirect('Admin/homepage_caurosel');
			}
		}
	}
	//deleting the caurosel image
	public function delete_homepage_caurosel($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_homepage_caurosel($id);
		redirect('Admin/homepage_caurosel');
	}
	//calling view to about
	public function about()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['abouts'] = $this->Fetch->fetch_about();
		$dataSend['header'] = 'About';
		$dataSend['sidebar'] = 'About';
		$this->load->view('Admin/about',$dataSend);
	}
	//updating about 
	public function update_about()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('Homepage','Homepage','required');
		$this->form_validation->set_rules('About','About','required');
		$this->form_validation->set_rules('Footer','Footer','required');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['abouts'] = $this->Fetch->fetch_about();
			$dataSend['header'] = 'About';
			$dataSend['sidebar'] = 'About';
			$this->load->view('Admin/about',$dataSend);
		}
		else{
			$dataPost = array(
				'Homepage' => $this->input->post('Homepage'),
				'About' => $this->input->post('About'),
				'Footer' => $this->input->post('Footer')
			);
			$this->load->model('PostData');
			$this->PostData->update_about($dataPost);
			redirect('Admin/about');
		}
	}
	//calling view Contact
	public function contact()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['contacts'] = $this->Fetch->fetch_contact();
		$dataSend['header'] = 'Contact Details';
		$dataSend['sidebar'] = 'Contact';
		$this->load->view('Admin/contact',$dataSend);
	}
	//updating contact
	public function update_contact()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('Phone','Phone','required|numeric');
		$this->form_validation->set_rules('Mobile','Mobile','required|numeric');
		$this->form_validation->set_rules('Address','Address','required');
		$this->form_validation->set_rules('Email','Email','required|valid_email');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['contacts'] = $this->Fetch->fetch_contact();
			$dataSend['header'] = 'Contact Details';
			$dataSend['sidebar'] = 'Contact';
			$this->load->view('Admin/contact',$dataSend);
		}
		else{
			$dataPost = array(
				'Phone' => $this->input->post('Phone'),
				'Mobile' => $this->input->post('Mobile'),
				'Address' => $this->input->post('Address'),
				'Email' => $this->input->post('Email')
			);
			$this->load->model('PostData');
			$this->PostData->update_contact($dataPost);
			redirect('Admin/contact');
		}
	}
	//calling view doctors
	public function doctors()
	{	if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['doctors'] = $this->Fetch->fetch_doctors();
		$dataSend['header'] = 'Doctors';
		$dataSend['sidebar'] = 'Doctors';
		$this->load->view('Admin/doctors',$dataSend);
	}
	//updating doctor 1 
	public function update_doctor_one(){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('dnone','Name','required');
		$this->form_validation->set_rules('dsone','Speaciality','required');
		$this->form_validation->set_rules('dbone','Bio','required');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['doctors'] = $this->Fetch->fetch_doctors();
			$dataSend['header'] = 'Doctors';
			$dataSend['sidebar'] = 'Doctors';
			$this->load->view('Admin/doctors',$dataSend);
		}
		else{
			$config['upload_path'] = './assets/uploads/doctors/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['overwrite'] = TRUE;
	        $config['max_size'] = 20480000;
	        $this->load->library('upload',$config);
	        if(!$this->upload->do_upload('dpone')){
				$this->load->model('Fetch');
				$dataSend['umap'] = $this->Fetch->fetch_umap();
				$dataSend['cmap'] = $this->Fetch->fetch_cmap();
				$dataSend['doctors'] = $this->Fetch->fetch_doctors();
				$dataSend['header'] = 'Doctors';
				$dataSend['sidebar'] = 'Doctors';
				$this->load->view('Admin/doctors',$dataSend);
	        	$dataSend['error'] = $this->upload->display_errors();
	  		}
			else{
				$fu = $this->upload->data();
	    		$path = base_url().'assets/uploads/doctors/'.$fu['file_name'];
	    		$dataPost = array(
					'name' => $this->input->post('dnone'),
					'bio' => $this->input->post('dbone'),
					'speciality' => $this->input->post('dsone'),
					'dplink' => $path
				);
	        	$this->load->model('PostData');
	        	$this->PostData->update_doctor($dataPost);
	        	redirect('Admin/doctors');
			}
		}
	}
	//updating doctor 2 
	public function update_doctor_two(){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('dntwo','Name','required');
		$this->form_validation->set_rules('dstwo','Speaciality','required');
		$this->form_validation->set_rules('dbtwo','Bio','required');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['doctors'] = $this->Fetch->fetch_doctors();
			$dataSend['header'] = 'Doctors';
			$dataSend['sidebar'] = 'Doctors';
			$this->load->view('Admin/doctors',$dataSend);
		}
		else{
			$dataPost = array(
				'name' => $this->input->post('dntwo'),
				'bio' => $this->input->post('dbtwo'),
				'speciality' => $this->input->post('dstwo')
			);
			$this->load->model('PostData');
			$this->PostData->update_doctor_two($dataPost);
			redirect('Admin/doctors');
		}
	}
	//updating dp doctor 1
	public function update_doctor_dp_one(){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$config['upload_path'] = './assets/uploads/doctors/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20480000;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('dpone')){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['doctors'] = $this->Fetch->fetch_doctors();
			$dataSend['header'] = 'Doctors';
			$dataSend['sidebar'] = 'Doctors';
			$this->load->view('Admin/doctors',$dataSend);
        	$dataSend['error'] = $this->upload->display_errors();
  		}
		else{
			$fu = $this->upload->data();
    		$path = base_url().'assets/uploads/doctors/'.$fu['file_name'];
        	$this->load->model('PostData');
        	$this->PostData->update_doctor_dp($path,1);
        	redirect('Admin/doctors');
		}
	}
	//updating dp doctor 2
	public function update_doctor_dp_two(){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$config['upload_path'] = './assets/uploads/doctors/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20480000;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('dptwo')){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['doctors'] = $this->Fetch->fetch_doctors();
			$dataSend['header'] = 'Doctors';
			$dataSend['sidebar'] = 'Doctors';
			$this->load->view('Admin/doctors',$dataSend);
        	$dataSend['error'] = $this->upload->display_errors();
  		}
		else{
			$fu = $this->upload->data();
    		$path = base_url().'assets/uploads/doctors/'.$fu['file_name'];
        	$this->load->model('PostData');
        	$this->PostData->update_doctor_dp($path,2);
        	redirect('Admin/doctors');
		}
	}
	//calling view services
	public function services()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['services'] = $this->Fetch->fetch_services();
		$dataSend['header'] = 'Services';
		$dataSend['sidebar'] = 'Services';
		$this->load->view('Admin/services',$dataSend);
	}
	//updating the services
	public function update_services()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		//$this->form_validation->set_rules('hashtag','Hashtag','required');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['services'] = $this->Fetch->fetch_services();
			$dataSend['header'] = 'Services';
			$dataSend['sidebar'] = 'Services';
			$this->load->view('Admin/services',$dataSend);
		}
		else{
	        	$dataPost = array(
	        		'hashtag' => $this->input->post('hashtag'),
	        		'description' => $this->input->post('description'),
	        		'title' => $this->input->post('title')
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->update_services($dataPost);
	        	redirect('Admin/services');
		}
	}
	// delete services
	public function delete_services($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_services($id);
		redirect('Admin/services');
	}
	//view testimonials
	public function testimonials()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['testimonials'] = $this->Fetch->fetch_testimonials();
		$dataSend['header'] = 'Testimonials';
		$dataSend['sidebar'] = 'Testimonials';
		$this->load->view('Admin/testimonials',$dataSend);
	}
	//update testimonials
	public function upload_testimonials()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('Name','Name','required');
		$this->form_validation->set_rules('Designation','Designation','required');
		$this->form_validation->set_rules('Comment','Comment','required');
		$config['upload_path'] = './assets/uploads/testimonials/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20480000;
        $this->load->library('upload',$config);
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['testimonials'] = $this->Fetch->fetch_testimonials();
			$dataSend['header'] = 'Testimonials';
			$dataSend['sidebar'] = 'Testimonials';
			$this->load->view('Admin/testimonials',$dataSend);
		}
		else{
			if(!$this->upload->do_upload('timg')){
				$this->load->model('Fetch');
				$dataSend['umap'] = $this->Fetch->fetch_umap();
				$dataSend['cmap'] = $this->Fetch->fetch_cmap();
				$dataSend['testimonials'] = $this->Fetch->fetch_testimonials();
				$dataSend['header'] = 'Testimonials';
				$dataSend['sidebar'] = 'Testimonials';
	        	$dataSend['error'] = $this->upload->display_errors();
				$this->load->view('Admin/testimonials',$dataSend);
			}
			else{
				$fu = $this->upload->data();
        		$path = base_url().'assets/uploads/testimonials/'.$fu['file_name'];
	        	$dataPost = array(
	        		'name' => $this->input->post('Name'),
	        		'designation' => $this->input->post('Designation'),
	        		'comment' => $this->input->post('Comment'),
	        		'link' => $path
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->upload_testimonials($dataPost);
	        	redirect('Admin/testimonials');
			}
		}
	}
	// delete testinials
	public function delete_testimonials($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_testimonials($id);
		redirect('Admin/testimonials');
	}
	//view blogs
	public function blogs()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['blogs'] = $this->Fetch->fetch_blogs();
		$dataSend['header'] = 'Blogs';
		$dataSend['sidebar'] = 'Blogs`';
		$this->load->view('Admin/blogs',$dataSend);
	}
	//update blogs
	public function upload_blogs()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('comment','Comment','required');
		$config['upload_path'] = './assets/uploads/blogs/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20480000;
        $this->load->library('upload',$config);
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['blogs'] = $this->Fetch->fetch_blogs();
			$dataSend['header'] = 'Blogs';
			$dataSend['sidebar'] = 'Blogs`';
			$this->load->view('Admin/blogs',$dataSend);
		}
		else{
			if(!$this->upload->do_upload('bimg')){
				$this->load->model('Fetch');
				$dataSend['umap'] = $this->Fetch->fetch_umap();
				$dataSend['cmap'] = $this->Fetch->fetch_cmap();
				$dataSend['blogs'] = $this->Fetch->fetch_blogs();
				$dataSend['header'] = 'Blogs';
				$dataSend['sidebar'] = 'Blogs';
	        	$dataSend['error'] = $this->upload->display_errors();
				$this->load->view('Admin/blogs',$dataSend);
			}
			else{
				$fu = $this->upload->data();
        		$path = base_url().'assets/uploads/blogs/'.$fu['file_name'];
	        	$dataPost = array(
	        		'title' => $this->input->post('title'),
	        		'comment' => $this->input->post('comment'),
	        		'link' => $path
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->upload_blogs($dataPost);
	        	redirect('Admin/blogs');
			}
		}
	}
	// delete blogs
	public function delete_blogs($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_blogs($id);
		redirect('Admin/blogs');
	}
	public function map()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['map'] = $this->Fetch->fetch_map();
		$dataSend['header'] = 'Appointments';
		$dataSend['sidebar'] = 'Map`';
		$this->load->view('Admin/map',$dataSend);
	}
	public function map_mar($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->map($id);
		redirect('Admin/map');
	}
	public function logout(){
		$this->session->sess_destroy();
		$array_items = array('session' => '', 'user' => '');
		$this->session->unset_userdata($array_items);
        redirect('Admin');
	}
	//calling view events
	public function events()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['events'] = $this->Fetch->fetch_events();
		$dataSend['header'] = 'Events';
		$dataSend['sidebar'] = 'Events';
		$this->load->view('Admin/events',$dataSend);
	}
	//updating the events
	public function update_events()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		//$this->form_validation->set_rules('hashtag','Hashtag','required');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['events'] = $this->Fetch->fetch_events();
			$dataSend['header'] = 'Events';
			$dataSend['sidebar'] = 'Events';
			$this->load->view('Admin/events',$dataSend);
		}
		else{
			$config['upload_path'] = './assets/uploads/events/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['overwrite'] = TRUE;
	        $config['max_size'] = 20480000;
	        $this->load->library('upload',$config);
	        if(!$this->upload->do_upload('eimg')){
				$this->load->model('Fetch');
				$dataSend['umap'] = $this->Fetch->fetch_umap();
				$dataSend['cmap'] = $this->Fetch->fetch_cmap();
				$dataSend['events'] = $this->Fetch->fetch_events();
				$dataSend['header'] = 'Events';
				$dataSend['sidebar'] = 'Events';
	        	$dataSend['error'] = $this->upload->display_errors();
				$this->load->view('Admin/events',$dataSend);
	  		}
			else{
				$fu = $this->upload->data();
	    		$path = base_url().'assets/uploads/events/'.$fu['file_name'];
	    		$dataPost = array(
	        		'edate' => $this->input->post('edate'),
	        		'description' => $this->input->post('description'),
	        		'title' => $this->input->post('title'),
	        		'link' => $path
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->update_events($dataPost);
	        	redirect('Admin/events');
			}
		}
	}
	// delete events
	public function delete_events($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_events($id);
		redirect('Admin/events');
	}
	public function delete_doctor($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_doctors($id);
		redirect('Admin/doctors');
	}
	public function work()
	{	
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Fetch');
		$dataSend['umap'] = $this->Fetch->fetch_umap();
		$dataSend['cmap'] = $this->Fetch->fetch_cmap();
		$dataSend['works'] = $this->Fetch->fetch_work();
		$dataSend['header'] = 'Our Works';
		$dataSend['sidebar'] = 'Works';
		$this->load->view('Admin/work',$dataSend);
	}
	//updating the events
	public function update_work()
	{
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		//$this->form_validation->set_rules('hashtag','Hashtag','required');
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run() == FALSE){
			$this->load->model('Fetch');
			$dataSend['umap'] = $this->Fetch->fetch_umap();
			$dataSend['cmap'] = $this->Fetch->fetch_cmap();
			$dataSend['works'] = $this->Fetch->fetch_work();
			$dataSend['header'] = 'Events';
			$dataSend['sidebar'] = 'Events';
			$this->load->view('Admin/work',$dataSend);
		}
		else{
			$config['upload_path'] = './assets/uploads/works/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['overwrite'] = TRUE;
	        $config['max_size'] = 20480000;
	        $this->load->library('upload',$config);
	        if(!$this->upload->do_upload('wimg')){
				$this->load->model('Fetch');
				$dataSend['umap'] = $this->Fetch->fetch_umap();
				$dataSend['cmap'] = $this->Fetch->fetch_cmap();
				$dataSend['works'] = $this->Fetch->fetch_work();
				$dataSend['header'] = 'Events';
				$dataSend['sidebar'] = 'Events';
	        	$dataSend['error'] = $this->upload->display_errors();
				$this->load->view('Admin/work',$dataSend);
	  		}
			else{
				$fu = $this->upload->data();
	    		$path = base_url().'assets/uploads/works/'.$fu['file_name'];
	    		$dataPost = array(
	        		'description' => $this->input->post('description'),
	        		'title' => $this->input->post('title'),
	        		'link' => $path
	        	);
	        	$this->load->model('PostData');
	        	$this->PostData->update_work($dataPost);
	        	redirect('Admin/work');
			}
		}
	}
	// delete events
	public function delete_work($id){
		if(!isset($_SESSION['user']) && $_SESSION['session'] != 'active'){
	       	redirect('Admin');
		}
		$this->load->model('Actions');
		$this->Actions->delete_work($id);
		redirect('Admin/work');
	}
}
