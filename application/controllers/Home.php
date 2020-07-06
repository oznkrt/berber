<?php
class home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("DB_models");
		$this->session->userdata("user");
		$this->load->library('form_validation');

	}
	public function index(){

		$money=$this->DB_models->get_make();
		$about=$this->DB_models->get_about();
		$explant=$this->DB_models->get_explant();
		$jobs=array("jobs"=>$this->DB_models->get_jobs(),"money"=>$money,"abouts"=>$about,"explants"=>$explant);
		$get_home=array('jobs'=>$jobs);

		$this->load->view('home_page',$get_home);
	}
	public function service(){

		$explant=array("explants"=>$this->DB_models->get_explant());
		$this->load->view('services',$explant);
	}
	public function about(){
		$about=array("abouts"=>$this->DB_models->get_about());
		$this->load->view('about',$about);
	}
	public function contact(){
		$contact=array("contacts"=>$this->DB_models->get_contact());
		$this->load->view('contact',$contact);
	}
	public function messages(){

	}
}
?>
