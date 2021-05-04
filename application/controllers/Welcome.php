<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $isLogin;
    public function __construct()
    {
        parent::__construct();
        $this->isLogin = $this->isLogin();
    }

	public function index()
	{
	    if ($this->isLogin) {
            $this->parseData['content'] = 'pages/dashboard';
        } else {
            $this->parseData['content'] = 'pages/siswa';
        }

		$this->load->view('welcome_message', $this->parseData);
	}

	public function checkLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $isLogin = $this->m_general->statusLogin($username, $password);
        if ($isLogin) {
            $this->setLogin(array('username'=>$username));
            redirect(base_url());
        } else {
            redirect(base_url('gagal'));
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
