<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
		if(!$this->myfunc->fn['isLogged']()) {
			redirect('/', 'refresh');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('newEmail', 'NewEmail', 'required');
		$this->form_validation->set_rules('newPhone', 'NewPhone', 'required');
		$this->form_validation->set_rules('newFax', 'NewFax', 'required');
		$this->form_validation->set_rules('newpwd', 'NewPassword', 'required');
		
		$accountId = $this->session->userdata('account_id');
		$header["wrongPwd"] = "";
		$header['warning'] = "";
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
		$this->load->view($this->_view_url.'main');
		$this->load->view('footer');
	}

	public function updateUserMessage() {
		$newEmail = $this->input->post('newEmail');
		$newPhone = $this->input->post('newPhone');
		$newFax = $this->input->post('newFax');
		$uId = $this->input->post('uId');
		$newData = array(
			'email' => $newEmail,
			'telephone' => $newPhone,
			'fax' => $newFax);
		if($this->employee_model->update_message($newData, $uId)) {
			redirect('/main/', 'refresh');
		}
	}

	public function editPassword() {
		$uId = $this->input->post('uId');
		$pwd = md5($this->input->post('newpwd'));
		$newPwd = array(
			'password' => $pwd);
		if($this->user_model->update_password($newPwd, $uId)) {
			$header["wrongPwd"] = "";
			$this->session->unset_userdata('account');

			redirect('/', 'refresh');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */