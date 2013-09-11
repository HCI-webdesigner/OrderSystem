<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {
	private $_view_url = "system/";

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('employee_model');
		$this->load->model('department_model');
		$this->load->helper('url');
		date_default_timezone_set('PRC');		//默认设置时区(修正时间与本地时间对不上问题)
	}

	public function index()
	{
		echo $this->myfunc->fn['isLogged']();
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
			$employee_id = $this->employee_model->get_employeeId($sessionData['account_id']);
			$sessionData['employee_id'] = $employee_id;
			$this->session->set_userdata($sessionData);
			
			
			redirect('/main/', 'refresh');
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
		$this->session->unset_userdata('account');

		redirect('/', 'refresh');	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */