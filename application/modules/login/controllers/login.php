<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MX_Controller
{
	private $controller = 'Login';

	function __construct(){
		parent::__construct();

		$this->load->model("login_model");
	}

	function index(){
		$data = array(
						 'module'	=> $this->controller
					  	,'title'	=> 'Login'
				  	 );

		if( $this->input->post() ){
			if( !$this->authenticate() ) {
				$data['msg'] = 'Invalid username or password.';
			}
		}

		loadLoginLayout('login', $data);
	}

	function authenticate() {
		if( $this->input->is_ajax_request() ){
			$auth = $this->login_model->authenticate(
														 $this->input->post( 'username' )
														,$this->input->post( 'password' )
													);

			if( $auth->num_rows() ){
				$this->session->set_userdata( array( 'logged_in' => true ) );
				$this->session->set_userdata( $auth->row_array() );

				echo base_url().'dashboard';
			}else
				echo false;
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect( base_url() );
	}
}
?>