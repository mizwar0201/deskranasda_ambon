<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_market extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan/market');
	}
}
