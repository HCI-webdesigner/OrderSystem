<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {
	private $_view_url = "system/";

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('employee_model');
		$this->load->model('department_model');
		date_default_timezone_set('PRC');		//默认设置时区(修正时间与本地时间对不上问题)
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$header["wrongPwd"] = "";
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->load->view('index', $header);
	}

	public function checkLogin()
	{
		$account = $this->input->post('user');
		$password = md5($this->input->post('pwd'));

		if($this->user_model->validateAccount($account, $password)) {
			$sessionData = array(
				'account' => $this->user_model->get_account(),
				'account_id' => $this->user_model->get_accountId(),
				'isAdmin' => $this->user_model->get_isAdmin());
			$this->session->set_userdata($sessionData);
			$accountId = $sessionData['account_id'];
			$header["wrongPwd"] = "";
			$header["pagename"] = "Usercenter";
			$header['account'] = $this->session->userdata('account');
			$header['username'] = $this->employee_model->get_username($accountId);
			$departmentId = $this->employee_model->get_departmentId($accountId);
			$header['department'] = $this->department_model->get_departmentname($departmentId);
			$header['role'] = $this->employee_model->get_role($accountId);
			$header['email'] = $this->employee_model->get_email($accountId);
			$header['phone'] = $this->employee_model->get_phone($accountId);
			$header['fax'] = $this->employee_model->get_fax($accountId);
			$header['uId'] = $accountId;
			$header['warning'] = "";
			$header['oldpassword'] = $this->user_model->get_password($accountId);
			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'main',$header);
			$this->load->view('footer');
		}
		else {
			$header["wrongPwd"] = "帐号或密码不正确！！";

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->load->view('index', $header);
		}
	}

	public function logout() {
		$header["wrongPwd"] = "";

		$this->session->unset_userdata('account');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->load->view('index', $header);		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */