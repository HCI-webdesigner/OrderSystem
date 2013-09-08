<?php
	class User_model extends CI_Model {
		private $account_id;
		private $account;
		private $admin;

		public function __construct() {
			$this->load->database();
		}

		public function set_account($account) {
			$this->account = $account;
		}

		public function set_accountId($account_id) {
			$this->account_id = $account_id;
		}

		public function set_isAdmin($admin) {
			$this->admin = $admin;
		}

		public function get_account() {
			return $this->account;
		}

		public function get_accountId() {
			return $this->account_id;
		}

		public function get_isAdmin() {
			return $this->admin;
		}

		public function get_password($uId) {
			$query = $this->db->get_where('user', array('id' => $uId));
			$result_array = $query->result_array();
			return $result_array[0]['password'];
		}

		public function get_md5Pwd($pwd) {
			$pwd = md5($pwd);
			$pwd = $pwd + 'HCI';
			return md5($pwd);
		}

		public function get_user($account=FALSE, $password=FALSE) {
			if($account === FALSE) {
				$query = $this->db->get('user');
				return $query->result_array();
			}

			$query = $this->db->query('SELECT id,account,password,admin FROM `user`');
			return $query;
		}

		public function validateAccount($account, $password) {
			$result = $this->user_model->get_user($account, $password);
			$resultArray = $result->result_array();

			foreach ($resultArray as $row) {
				if($row['account'] == $account && $row['password'] == $password) {
					$this->set_accountId($row['id']);
					$this->set_account($row['account']);
					$this->set_isAdmin($row['admin']);
					$flag = 1;
					break;
				}
			}

			if(isset($flag) && $flag == 1)
				return TRUE;
			else
				return FALSE;
		}

		public function update_password($password, $uId) {
			if($this->db->update('user', $password, array('id' => $uId)))
				return TRUE;
		}

	}