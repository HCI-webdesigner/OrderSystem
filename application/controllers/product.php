<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Product extends CI_Controller {
		private $_view_url = "system/";

		public function __construct() {
			parent::__construct();
			$this->load->model('product_model');
			date_default_timezone_set('PRC');
		}

		public function index() {
			if(!$this->myfunc->fn['isLogged']()) {
				redirect('/', 'refresh');
			}

			$producttype1 = $this->product_model->get_lv1AllNames();
			$producttype2 = array();
			foreach ($producttype1 as $row) {
				$result = $this->product_model->get_lv2Names($row['id']);
				array_push($producttype2, $result);
			}
			$header['pagename'] = '送货信息管理';
			$header['producttype1'] = $producttype1;
			$header['producttype2'] = $producttype2;

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'product');
			$this->load->view('footer');
		}

		

	}