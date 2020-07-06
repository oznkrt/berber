<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("DB_models");
		$this->session->userdata("user");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$sess=$this->session->userdata("user");
		if($sess!=null)
		{
			$this->load->view('panel/home_page');
		}
		else
		{
			$this->load->view('panel/sing_in');
		}
	}
	public function sing_up_page(){
		$this->load->view('panel/sing_up');
	}
	public function sing_up(){

		$this->form_validation->set_rules("name","Ad Soyad","required|trim");
		$this->form_validation->set_rules("email","Email","required|trim|is_unique[adminuser.email]|valid_email");
		$this->form_validation->set_rules("username","Kullanıcı Adı","required|trim|is_unique[adminuser.username]");
		$this->form_validation->set_rules("pass","Şifre","required|trim|min_length[6]|max_length[10]");
		$this->form_validation->set_rules("repeat-pass","Tekrar Şifre","required|trim|matches[pass]");
		$error_mesage=array(
			'required'=>'Lütfen {field} alanını doldurunuz..',
			'is_unique'=>'Bu {field} zaten kayıtlı..',
			'valid_email'=>'Lütfen geçerli bir {field} giriniz..',
			'matches'=>'Şifreler birbirleri ile uyuşmamaktadır..',
			'min_length'=>'{field} en az 6 karakter olmalıdır..',
			'max_length'=>'{field} en fazla 10 karakter olmalıdır..',
		);
		$this->form_validation->set_message($error_mesage);
		if($this->form_validation->run()==false){
			$datas=array(
				'hata_mesajı'=>form_error('email'),
			);
			$this->load->view('panel/sing_up',$datas);
		}else{
			$fullname= 	$this->input->post('name');
			$email= 	$this->input->post('email');
			$username= 	$this->input->post('username');
			$pass= 		$this->input->post('pass');
			$data=array(
				"fullname"	=>$fullname,
				"email"		=>$email,
				"username"  =>$username,
				"pass"		=>$pass,
			);
			if($fullname!="" and $email!="" and $username!="" and $pass!="" )
			{
				$this->DB_models->saveuser($data);
				$this->load->view('panel/home_page');
			}
			else
			{
				$this->load->view("panel/sing_up");
			}
		}




	}
	public function sing_in(){
		$name=$this->input->post("username");
		$pass=$this->input->post("pass");
		if($name!="" and $pass!="")
		{
			$da=array("username"=>$name,"pass"=>$pass);
			$data=$this->DB_models->get_user($da);
			if($data)
			{
				$this->session->set_userdata("user",$data[0]);
				$this->load->view('panel/home_page');
			}
			else
			{
				$errormessage=array("error"=>"Bu bilgilere ait kullanıcı yoktur.");
				$error=array("error"=>$errormessage);
				$this->load->view('panel/sing_in',$error);
			}
		}	else if($this->session->userdata("user")!=null)
		{
			$this->load->view('panel/home_page');
		}
		else
		{
			$this->load->view('panel/sing_in');
		}

	}
	public function sing_out(){
		$this->session->unset_userdata("user");
		$this->load->view('panel/sing_in');
	}
	public function jobs_page(){
		$id=$this->input->get('id');
		echo $id;
		if($id>0) {
			$jobs = array('jobs' => $this->DB_models->get_jobs(), 'update' => 1);
			$this->load->view('panel/jobs_add', $jobs);
		}else{
			$jobs = array('jobs' => $this->DB_models->get_jobs(), 'update' => 0);
			$this->load->view('panel/jobs_add', $jobs);
		}
	}
	public function jobs_update($id){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('upload');
		$upload_data=	$this->upload->data();
		$file_name= 	$upload_data['file_name'];
		$status=		$this->input->post('status');
		$name=			$this->input->post('name');
		$data=array(
			'images'	=>$file_name,
			'jobsname'	=>$name,
			'status'	=>$status,
			'id'		=>$id);
		$this->DB_models->jobs_update($data);
		redirect(base_url('welcome/jobs_page/'.$data['id']));

	}
	public function cash_page(){
		$this->load->view('panel/cash_add');
	}
	public function about_page(){
		$message=array('messages'=>"");
		$this->load->view('panel/about_add',$message);
	}
	public function services_page(){
		$this->load->view('panel/services_add');
	}
	public function contact_page(){
		$contact=array("contacts"=>$this->DB_models->get_contact());

		$this->load->view('panel/contact_add',$contact);
	}
	public function messages_page(){
		$message=array('messages'=>$this->DB_models->get_message());
		$this->load->view('panel/messages',$message);
	}
	public function cash_add(){
		$make=$this->input->post('make');
		$money=$this->input->post('money');
		$data=array('make'=>$make,'money'=>$money);
		$this->form_validation->set_rules("make","Yaptığınız İş","required|trim");
		$this->form_validation->set_rules("money","Fiyat","required|trim|numeric");
		$error_mesage=array(
			'required'=>'Lütfen {field} alanını doldurunuz..',
			'numeric'=>'Lütfen {field}ı sayı giriniz..'
			);
		$this->form_validation->set_message($error_mesage);
		if($this->form_validation->run()==false){
			$datas=array(
				'hata_mesajı'=>form_error('make'),

			);
			$this->load->view('panel/cash_add',$datas);
		}
		else{

				$result=$this->DB_models->set_cash($data);
			if($result){
				redirect(base_url('welcome/cash_page'));
			}else{
				$error="Ekleme Yaparken Hata oldu Tekrar Deneyin";
				$this->load->view('panel/cash_add',$error);
			}
		}

	}
	public function about_add(){
		$text=$this->input->post('example');

		$this->form_validation->set_rules("example","Açıklama","required");
		$error_mesage=array(
			'required'=>'Lütfen {field} alanını doldurunuz..',
		);
		$this->form_validation->set_message($error_mesage);
		if($this->form_validation->run()==false){
			$datas=array(
				'hata_mesajı'=>form_error('example'),
				'messages'=>"",
			);
			$this->load->view('panel/about_add',$datas);
		}else{
			$data=array('aboutexplant'=>$text);
			$result=$this->DB_models->set_about($data);
			if($result){
				$message=array('messages'=>"Başarıyla Güncellendi.");
				$this->load->view('panel/about_add',$message);
			}else{
				$message=array('messages'=>"Güncellenemedi Lütfen Tekrar Deneyin");
				$this->load->view('panel/about_add',$message);
			}
		}


	}
	public function services_add(){
		$makename=$this->input->post('makename');
		$explant=$this->input->post('explant');
		$data=array('makename'=>$makename,'explant'=>$explant);
		$this->form_validation->set_rules("makename","Hizmetiniz","required|trim");
		$this->form_validation->set_rules("explant","Açıklama","required|trim");
		$error_mesage=array(
			'required'=>'Lütfen {field} alanını doldurunuz..',

		);
		$this->form_validation->set_message($error_mesage);
		if($this->form_validation->run()==false){
			$datas=array(
				'hata_mesajı'=>form_error('makename'),

			);
			$this->load->view('panel/services_add',$datas);
		}
		else{

			$result=$this->DB_models->set_services($data);
			if($result){
				redirect(base_url('welcome/services_page'));
			}else{
				$error="Ekleme Yaparken Hata oldu Tekrar Deneyin";
				$this->load->view('panel/services_add',$error);
			}
		}
	}
	public function contact_add(){
		$iframe=	$this->input->post('iframe');
		$phone =	$this->input->post('phone');
		$email =	$this->input->post('email');
		$emailtext=	$this->input->post('emailtext');
		$country=	$this->input->post('country');
		$location=	$this->input->post('location');
		$date=		DateTime::ATOM;
		$data=array(
			'iframe'	=>$iframe,
			'phone'		=>$phone,
			'email'		=>$email,
			'emailtext'	=>$emailtext,
			'country'	=>$country,
			'location'	=>$location,
			'phoneDate'	=>$date
		);
		$this->DB_models->set_contact($data);
		$this->load->view('panel/contact_add');
	}
	public function messages_add(){
		$this->form_validation->set_rules("message","Mesaj","required|trim");
		$this->form_validation->set_rules("email","Email","required|trim|valid_email");
		$this->form_validation->set_rules("name","Adınız","required|trim");
		$this->form_validation->set_rules("subject","Konu","required|trim");

		$error_mesage=array(
			'required'=>	'Lütfen {field} alanını doldurunuz..',
			'valid_email'=>	'Lütfen geçerli bir {field} giriniz..',

		);
		$this->form_validation->set_message($error_mesage);
		if($this->form_validation->run()==false) {
			$datas = array(
				'hata_mesajı' => form_error('message'),
				"contacts"=>$this->DB_models->get_contact()
			);
			$this->load->view('contact', $datas);
		}else {
			$message = 	$this->input->post('message');
			$name = 	$this->input->post('name');
			$email = 	$this->input->post('email');
			$subjet = 	$this->input->post('subject');
			$date = DateTime::ATOM;
			$bool= 1;
			$data = array(
				'message' 	=>$message,
				'name' 		=>$name,
				'email' 	=>$email,
				'subjet'	=>$subjet,
				'date' 		=>$date,
				'bool'		=>$bool
			);
			$this->DB_models->set_message($data);
			redirect(base_url('home/contact'));
		}


	}
	public function message_chache($id){
		$data=array('id'=>$id);
		$this->DB_models->cache_message($data);
		redirect(base_url('welcome/messages_page'));
	}
	public function jobs_add(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('upload');
		$upload_data=	$this->upload->data();
		$file_name= 	$upload_data['file_name'];
		$status=		$this->input->post('status');
		$name=			$this->input->post('name');
		$data=array(
			'images'	=>$file_name,
			'jobsname'	=>$name,
			'status'	=>$status);
		$this->DB_models->set_jobs($data);
		redirect(base_url('welcome/jobs_page'));
	}
}
