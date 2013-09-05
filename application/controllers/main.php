<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	private $_view_url = "system/";

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('PRC');		//默认设置时区(修正时间与本地时间对不上问题)
	}

	private function loadview($view) {
		$this->load->view('header');
		$this->load->view($this->_view_url.$view);
		$this->load->view('footer');
	}

	public function index()
	{
		$this->loadview('main');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */