<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	public function about_us()
	{
		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');
	}
	
	
	public function contact_us()
	{
		$this->load->view('header');
		$this->load->view('contact_us');
		$this->load->view('footer');
	}
	
	public function telecom_implementation()
	{
		$this->load->view('header');
		$this->load->view('telecom_implementation');
		$this->load->view('footer');
	}
	
	public function operations_and_maintenance()
	{
		$this->load->view('header');
		$this->load->view('operations_and_maintenance');
		$this->load->view('footer');
	}
	
	
	public function technial_services()
	{
		$this->load->view('header');
		$this->load->view('technial_services');
		$this->load->view('footer');
	}
	
	
	public function our_work()
	{
		$this->load->view('header');
		$this->load->view('our_work');
		$this->load->view('footer');
	}
	
	public function headquater()
	{
		$this->load->view('header');
		$this->load->view('headquater');
		$this->load->view('footer');
	}
	
	
	public function advantage()
	{
		$this->load->view('header');
		$this->load->view('advantage');
		$this->load->view('footer');
	}
	
	
	public function professional_services()
	{
		$this->load->view('header');
		$this->load->view('professional_services');
		$this->load->view('footer');
	}
	
	
	public function design_planning()
	{
		$this->load->view('header');
		$this->load->view('design_planning');
		$this->load->view('footer');
	}
	public function network_maintenance()
	{
		$this->load->view('header');
		$this->load->view('network_maintenance');
		$this->load->view('footer');
	}
	public function engineering_services()
	{
		$this->load->view('header');
		$this->load->view('engineering_services');
		$this->load->view('footer');
	}
	public function implementation()
	{
		$this->load->view('header');
		$this->load->view('implementation');
		$this->load->view('footer');
	}
	public function outside_plant()
	{
		$this->load->view('header');
		$this->load->view('outside_plant');
		$this->load->view('footer');
	}
	
	
}
