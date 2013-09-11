<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Address extends CI_Controller {
		private $_view_url = "system/";
		private $_pagesize = 5;

		public function __construct() {
			parent::__construct();

			$this->load->model('address_model');
			$this->load->model('user_model');
			$this->load->library('pagination');
			$this->load->helper('url');
			date_default_timezone_set('PRC');
		}

		public function index() {
			if(!$this->myfunc->fn['isLogged']()) {
				redirect('/', 'refresh');
			}
			$this->page();
		}

		public function page() {
			$header['pagename'] = '送货信息管理';
			$page = $this->uri->segment(3);
			$config['base_url'] = site_url('address/page/');
			$config['total_rows'] = $this->address_model->get_addressnum();
			$config['per_page'] = $this->_pagesize;
			$config['first_link'] = '首页';
			$config['last_link'] = '尾页';
			$config['use_page_numbers'] = TRUE;
			$this->pagination->initialize($config);
			$header['page'] = $this->pagination->create_links();
			$header['allAddressMessage'] = $this->address_model->get_allAddressMessage($page, $config['per_page']);
			$header['totalPages'] = $this->address_model->get_totalPages($this->_pagesize);

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'address');
			$this->load->view('footer');
		}

		public function deleteOneAddress() {
			$pageNum = $this->uri->segment(3);
			echo $aId = $this->uri->segment(4);
			if($this->address_model->del($aId)) {
				$newPageNums = $this->address_model->get_totalPages($this->_pagesize);
				if($newPageNums < $pageNum) {
					$pageNum--;
				}
				redirect('/address/page/'.$pageNum, 'refresh');
			}
		}

		public function editAddress() {
			$newDestination = $this->input->post('newDestination');
			$newPhone = $this->input->post('newPhone');
			$newPerson = $this->input->post('newPerson');
			$newMailnumber = $this->input->post('newMailnumber');
			$pageNum = $this->input->post('pageNum');
			$aId = $this->input->post('aId');
			$newMessage = array('destination' => $newDestination,
				'phone' => $newPhone,
				'person' => $newPerson,
				'mailnumber' => $newMailnumber);
			if($this->address_model->edit_address($newMessage, $aId)) {
				redirect('/address/page/'.$pageNum, 'refresh');
			}
		}

		public function addAddress() {
			$destination = $this->input->post('destination');
			$phone = $this->input->post('phone');
			$person = $this->input->post('person');
			$mailnumber = $this->input->post('mailnumber');
			$pageNum = $this->input->post('pageNum');
			$message = array('destination' => $destination,
				'phone' => $phone,
				'person' => $person,
				'mailnumber' => $mailnumber);
			if($this->address_model->add_address($message)) {
				$newPageNums = $this->address_model->get_totalPages($this->_pagesize);
				if($newPageNums > $pageNum) {
					$pageNum = $pageNum + 1;
				}
				redirect('/address/page/'.$pageNum, 'refresh');
			}
		}
	}