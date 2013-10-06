<?php

	// backend layout
	function loadLayout($view, $data=false)
	{
		$ci =& get_instance();
		$ci->load->view('layout/mainheader', $data);
		$ci->load->view('layout/nav', $data);
		$ci->load->view('layout/sidebar', $data);
		$ci->load->view('layout/header', $data);
		$ci->load->view('layout/breadcrumbs', $data);
		$ci->load->view($view);
		$ci->load->view('layout/footer');
		$ci->load->view('layout/mainfooter');
	}

	function loadLoginLayout($view, $data=false)
	{
		$ci =& get_instance();
		$ci->load->view('layout/headerlogin', $data);
		$ci->load->view('layout/nav', $data);
		$ci->load->view($view);
		$ci->load->view('layout/footerlogin');
	}

	function assets_url()
	{
		echo base_url().'assets/';
	}
	
	function admin_url()
	{
		$ci =& get_instance();		
		return $ci->config->base_url().'admin/';
	}
?>