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
	public $table = 'tb_kelulusan';
    public function __construct()
    {
        parent::__construct();
        $this->isLogin = $this->isLogin();
    }

	public function index()
	{
	    if ($this->isLogin) {
            $this->parseData['content'] = 'pages/dashboard';
            $data = $this->m_general->selectJoin('tb_kelulusan.*, tb_siswa.nama_siswa, tb_siswa.nama_kelas', $this->table, array('tb_siswa' => 'tb_kelulusan.nisn = tb_siswa.nisn'));
            $this->parseData['data_kelulusan'] = $data->result();

        } else {
            $this->parseData['content'] = 'pages/siswa';
            $this->parseData['data_kelulusan'] = array();

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

    public function formCreate() {
        $this->parseData['content'] = 'pages/kelulusan-create';

        $siswa = $this->m_general->getAllData('tb_siswa')->result();
        $this->parseData['data_siswa'] = $siswa;

        $this->load->view('welcome_message', $this->parseData);
    }

    public function formEdit($id) {
        $this->parseData['content'] = 'pages/kelulusan-edit';

        $siswa = $this->m_general->getAllData('tb_siswa')->result();
        $this->parseData['data_siswa'] = $siswa;
        $kelulusan = $this->m_general->getWhere($this->table, array('id' => $id))->result();
        $this->parseData['data_edit'] = $kelulusan[0];

        $this->load->view('welcome_message', $this->parseData);
    }

    public function create() {
        $total = $this->input->post('total_nilai');
        $nisn = $this->input->post('nisn');
        $status = $this->input->post('status');


        $data = array(
            'total_nilai' => $total,
            'nisn' => $nisn,
            'status' => $status
        );

        $insert = $this->m_general->insert($this->table, $data);
        if ($insert) {
            redirect(base_url());
        }
    }

    public function update($id) {
        $total = $this->input->post('total_nilai');
        $nisn = $this->input->post('nisn');
        $status = $this->input->post('status');


        $data = array(
            'id' => $id,
            'total_nilai' => $total,
            'nisn' => $nisn,
            'status' => $status
        );

        $update = $this->m_general->update($this->table, $data);
        if ($update) {
            redirect(base_url());
        }
    }

    public function delete($id) {
        $data = array(
            "id" => $id
        );

        $delete = $this->m_general->delete($this->table, $data);
        if ($delete) redirect(base_url());
    }

    public function periksa() {
        $nisn = $this->input->get('nisn', TRUE);
        $encryptNisn = $this->input->get('hash', TRUE);

        if (md5($nisn) == $encryptNisn) {
            $this->parseData['content'] = 'pages/siswa';
            $data = $this->m_general->selectJoin('tb_kelulusan.*, tb_siswa.nama_siswa, tb_siswa.nama_kelas', $this->table, array('tb_siswa' => 'tb_kelulusan.nisn = tb_siswa.nisn'), array('tb_kelulusan.nisn' => $nisn));
            $this->parseData['data_kelulusan'] = $data->result();
        }

        $this->load->view('welcome_message', $this->parseData);
    }

    public function checkKelulusan() {
        $nisn = $this->input->post('nisn');
        $path = '?data='.$this->generateHashWithSalt($nisn).'&hash='.md5($nisn).'&nisn='.$nisn.'';

        redirect(base_url('periksa'.$path));
    }
}
