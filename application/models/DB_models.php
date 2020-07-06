<?php
class DB_models extends CI_Model{
	public  function  saveuser($data=array()){
		$this->db->insert("adminuser", $data);
	}
	public  function  get_user($da =array()){
		return $this->db->where($da)->get("adminuser")->result();
	}
	public  function  get_jobs($data=array()){

		return $this->db->get("jobs")->result();
	}
	public function   jobs_update($data=array()){
		return $this->db->where('id',$data['id'])->get("jobs")->result();
	}
	public  function  get_make(){
		return $this->db->get("makemoney")->result();
	}
	public  function  get_explant(){
		return $this->db->get("makexplant")->result();
	}
	public  function  get_about(){
		return $this->db->get("about")->result();
	}
	public  function  get_contact(){
		return $this->db->get("contact")->result();
	}
	public  function  set_cash($data=array()){
		$this->db->insert('makemoney',$data);
	}
	public  function  set_about($data=array()){
		if($this->db->get('about')) {
			return $this->db->update('about',$data);
		}else{
			return false;
		}
	}
	public  function  set_services($data=array()){
		$this->db->insert('makexplant',$data);
	}
	public 	function  set_contact($data=array()){
		return $this->db->update('contact',$data);
	}
	public  function  set_message($data=array()){
		return $this->db->insert('message',$data);
	}
	public function   get_message(){
		return $this->db->where('bool',1)->get('message')->result();
	}
	public function   cache_message($data=array()){
		$cahce=array('bool'=>0);
		return $this->db->where($data)->update('message',$cahce);
	}
	public function   set_jobs($data=array()){
		return $this->db->insert('jobs',$data);
	}
}
?>
