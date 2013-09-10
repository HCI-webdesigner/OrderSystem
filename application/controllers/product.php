<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Product extends CI_Controller {
		private $_view_url = "system/";

		public function __construct() {
			parent::__construct();
			$this->load->model('product_model');
			date_default_timezone_set('PRC');
		}

		public function index() {
			$producttype1 = $this->product_model->get_lv1AllNames();

			$header['pagename'] = '送货信息管理';
			$header['producttype1'] = $producttype1;

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'product');
			$this->load->view('footer');
		}

		public function getLv2Names() {
			$lv1Id = $this->uri->segment(3);
			$producttype2 = $this->product_model->get_lv2Names($lv1Id);

			$producttype1 = $this->product_model->get_lv1AllNames();

			$header['pagename'] = '送货信息管理';
			$header['producttype1'] = $producttype1;
			$header['producttype2'] = $producttype2;

			$this->load->view('header',$header);
			$this->load->view($this->_view_url.'product');
			$this->load->view('footer');
		}

	}