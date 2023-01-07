<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('adminlogin') && $this->uri->segment(2) && $this->uri->segment(2) != "login"){
			redirect('admin');
		} 
    }

    public function index()
	{
		if($this->session->userdata('adminlogin')){
			redirect('admin/panel');
		}
		$this->load->view('admin/login');
		
	}

	# giriş #
    public function login(){
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		
		$exist = Yonetim::find(['mail'=>$email,'password'=>$pass]);
		if($exist){
			$this->session->set_userdata('adminlogin',true);
			$this->session->set_userdata('admininfo',$exist);
			redirect('admin/panel');
		}else{
			$error = "E-Posta veya Şifre Hatalı";
			$this->session->set_flashdata('error',$error);
			redirect('admin');
		}
	}
	# giriş #

	# PANEL #
	public function panel(){
		$data['head'] = "Site Ayarları";
		$data['config']=Ayarlar::find(1);
		$this->load->view('admin/panel',$data);
	}
	public function ayarlarpost(){
		$config = Ayarlar::find(1);

		$data = ['baslik'=>postvalue('baslik'),
				 'adres'=>postvalue('adres'),
				 'saat'=>postvalue('saat'),
				 'aciklama'=>postvalue('aciklama'),
				 'facebook'=>postvalue('facebook'),
				 'twitter'=>postvalue('twitter'),
				 'instagram'=>postvalue('instagram'),
				 'telefon'=>postvalue('telefon')
				];
		if($_FILES['logo']['size']>0){
			$data['logo']=imageupload('logo','config');
			unlink($config->logo);
		}
		if($_FILES['icon']['size']>0){
			$data['icon']=imageupload('icon','config');
			unlink($config->icon);
		}
		Ayarlar::update(1,$data);
		flash('success','check','İşlem Başarılı');
		back();
	} 
	# PANEL #

	# YEMEK #
    public function yemek(){
		$data['head'] = "Yemek Ekle";
		$data['config']=Yemek::query("select * from yemekler");
		$this->load->view('admin/yemek',$data);
	}
	public function yemekpost(){

		$data = ['title'=>postvalue('title'),
				 'info'=>postvalue('info'),
				 'price'=>postvalue('price'),
				];
		if($_FILES['image']['size']>0){
			$data['image']=imageupload('image','product');
		}

		Yemek::insert($data);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function yemeksil($id){
		$config = Yemek::find(['id'=>$id]);
		unlink($config->image);
		Yemek::delete($id);
		flash('success','check','İşlem Başarılı');
		back();
	}
	# YEMEK #

	# TATLI #
	public function tatli(){
		$data['head'] = "Tatlı Ekle";
		$data['config']=Tatli::query("select * from tatlilar");
		$this->load->view('admin/tatli',$data);
	}
	public function tatlipost(){

		$data = ['title'=>postvalue('title'),
				 'info'=>postvalue('info'),
				 'price'=>postvalue('price'),
				];
		if($_FILES['image']['size']>0){
			$data['image']=imageupload('image','product');
		}

		Tatli::insert($data);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function tatlisil($id){
		$config = Tatli::find(['id'=>$id]);
		unlink($config->image);
		Tatli::delete($id);
		flash('success','check','İşlem Başarılı');
		back();
	}
	# TATLI #

	# İÇECEK #
	public function icecekpost(){

		$data = ['title'=>postvalue('title'),
				 'info'=>postvalue('info'),
				 'price'=>postvalue('price'),
				];
		if($_FILES['image']['size']>0){
			$data['image']=imageupload('image','product');
		}

		Icecek::insert($data);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function iceceksil($id){
		$config = Icecek::find(['id'=>$id]);
		unlink($config->image);
		Icecek::delete($id);
		flash('success','check','İşlem Başarılı');
		back();
	}
    public function icecek(){
		$data['head'] = "İçecek Ekle";
		$data['config']=Icecek::query("select * from icecekler");
		$this->load->view('admin/icecek',$data);
	}
	# İÇECEK #

	# ŞİFRE #
    public function sifre(){
		$data['head'] = "Şifre Değiştirme";
		$this->load->view('admin/sifre',$data);
	}
	public function sifrepost(){
		$pass = $this->input->post('oldpass');
		$exist = Yonetim::find(['password'=>$pass]);
		if($exist){
			$data = ['password'=>postvalue('newpass')];

			Yonetim::update(1,$data);
			flash('success','check','İşlem Başarılı');
			back();
		} else {
			flash('danger','ban','İşlem Başarısız');
			back();
		}

	}
	# ŞİFRE #

	# ÇIKIŞ #
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
	# ÇIKIŞ #
}