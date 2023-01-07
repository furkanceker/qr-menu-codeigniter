<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$items = Kategori::query("SELECT * FROM kategoriler");
    
        $viewData = array(
            "kategoriler" => $items,
        );

		$this->load->view('onyuz/home',$viewData);
	}
	public function yemekler()
	{
		$items = Yemek::query("SELECT * FROM yemekler");
    
        $viewData = array(
            "yemekler" => $items,
        );

		$this->load->view('onyuz/yemekler',$viewData);
	}
	public function icecekler()
	{
		$items = Icecek::query("SELECT * FROM icecekler");
    
        $viewData = array(
            "icecekler" => $items,
        );

		$this->load->view('onyuz/icecekler',$viewData);
	}
	public function tatlilar()
	{
		$items = Tatli::query("SELECT * FROM tatlilar");
    
        $viewData = array(
            "tatlilar" => $items,
        );

		$this->load->view('onyuz/tatlilar',$viewData);
	}
	public function wifi()
	{

		$this->load->view('onyuz/wifi');
	}
	public function iletisim()
	{

		$this->load->view('onyuz/iletisim');
	}
}
