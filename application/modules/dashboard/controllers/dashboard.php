<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
	private $controller = 'Dashboard';
	function __construct(){
		parent::__construct();
		is_logged_in();
	}

	function index()
	{
		$data = array(
						'module' 	=> $this->controller,
					  	'title'		=> 'Dashboard'
					 );

		loadLayout('dashboard',$data);
	}
}
?>