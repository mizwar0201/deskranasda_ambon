<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_religi extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan/religi');
	}
}
