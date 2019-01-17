<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function dashboard($nama)
	{
		$data['nama_lengkap']=$nama;
		$this->load->view('beranda',$data);
	}
	public function profil(){
		$this->load->view('profil');
	}
	public function utama(){
		$this->load->view('utama');
	}
	public function event(){
		$this->load->view('event');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function gallery(){
		$this->load->view('gallery');
	}
}
