<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myfunc {
    var $CI;
    var $fn;
    function __construct(){
        $this->CI = & get_instance();
        //变量可以在这里定义，或者来自配置文件，也可以去数据库中查
        $this->fn['isLogged'] = function() {
        	$CI = & get_instance();
        	$userdata = $CI->session->userdata('account');
        	// $CI->session->unset_userdata('account');
        	if($userdata==false) {
        		return 0;
        	}
        	else {
        		return 1;
        	}
        };
        $this->CI->load->vars($this->fn);
    }
}

/* End of file global.php */