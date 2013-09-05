<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('PRC');		//默认设置时区(修正时间与本地时间对不上问题)
	}

	public function index()
	{
		$this->load->view('index');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */