<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Address extends CI_Controller {
		private $_view_url = "system/";

		public function __construct() {
			parent::__construct();

			$this->load->model('address_model');
			$this->load->model('user_model');
			date_default_timezone_set('PRC');
		}

		public function index() {
			$header['pagename'] = '送货信息管理';
			$header['allAddressMessage'] = $this->address_model->get_allAddressMessage();

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'address');
			$this->load->view('footer');
		}

		public function deleteOneAddress($aId) {
			if($this->db->delete('address', array('id' => $aId))) {
				$header['pagename'] = '送货信息管理';
				$header['allAddressMessage'] = $this->address_model->get_allAddressMessage();

				$this->load->view('header',$header);
				$this->load->view($this->_view_url.'address');
				$this->load->view('footer');
			}
		}

		public function editAddressPage($aId) {
			
		}
	}