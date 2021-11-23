<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		check_not_login();
		$this->load->model('item_m');

		$data['row'] = $this->item_m->stock_all();
		$data['top'] = $this->item_m->top_stsock();
		$this->template->load('template', 'dashboard', $data);
	}
}
