<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	private $_view_url = "system/";

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		date_default_timezone_set('PRC');		//默认设置时区(修正时间与本地时间对不上问题)
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->load->view('index');
	}

	public function checkLogin()
	{
		$account = $this->input->post('user');
		$pass = md5($this->input->post('pwd'));
		$result = $this->user_model->get_user($account, $pass);
		$resultArray = $result->result_array();

		foreach ($resultArray as $row) {
			if($row['account'] == $account && $row['password'] == $pass) {
				$accountId = $row['id'];
				$nowAccount = $row['account'];
				$flag = 1;
				break;
			}
		}

		if(isset($flag) && $flag == 1) {
			$sessionData = array(
				'account' => $nowAccount);
			$this->session->set_userdata($sessionData);
			$header["pagename"] = "Usercenter";
			$header['account'] = $this->session->userdata('account');
			$header['username'] = $this->user_model->get_username($accountId);
			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'main',$header);
			$this->load->view('footer');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */