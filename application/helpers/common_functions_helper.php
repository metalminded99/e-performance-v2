<?php

	if(!function_exists('print_pre')){
		function print_pre($array = array()){
			echo "<pre>"; print_r($array); echo "</pre>"; exit();
		}
	}

	if(!function_exists('is_logged_in')){
		function is_logged_in(){
			$CI = & get_instance();
			if (!$CI->session->userdata('logged_in')){
				redirect(base_url().'login/');
			}
		}
	}

	function isAdmin() {
		$ci =& get_instance();
		if($ci->session->userdata('user_type') == 1)
			return TRUE;
		else
			return FALSE;
	}

?>