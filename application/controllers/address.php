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

		public function editAddress() {
			$newDestination = $this->input->post('newDestination');
			$newPhone = $this->input->post('newPhone');
			$newPerson = $this->input->post('newPerson');
			$newMailnumber = $this->input->post('newMailnumber');
			$aId = $this->input->post('aId');
			$newMessage = array('destination' => $newDestination,
				'phone' => $newPhone,
				'person' => $newPerson,
				'mailnumber' => $newMailnumber);
			if($this->address_model->edit_address($newMessage, $aId)) {
				$header['pagename'] = '送货信息管理';
				$header['allAddressMessage'] = $this->address_model->get_allAddressMessage();

				$this->load->view('header',$header);
				$this->load->view($this->_view_url.'address');
				$this->load->view('footer');
			}
		}

		public function addAddress() {
			$destination = $this->input->post('destination');
			$phone = $this->input->post('phone');
			$person = $this->input->post('person');
			$mailnumber = $this->input->post('mailnumber');
			$message = array('destination' => $destination,
				'phone' => $phone,
				'person' => $person,
				'mailnumber' => $mailnumber);
			if($this->address_model->add_address($message)) {
				$header['pagename'] = '送货信息管理';
				$header['allAddressMessage'] = $this->address_model->get_allAddressMessage();

				$this->load->view('header',$header);
				$this->load->view($this->_view_url.'address');
				$this->load->view('footer');
			}
		}
	}