<?php


class Kelas extends My_Controller
{
    public $isLogin;
    private $table = 'tb_kelas';
    public function __construct()
    {
        parent::__construct();
        $this->isLogin = $this->isLogin();
    }

    public function index() {
        $this->parseData['content'] = 'pages/kelas';
        $this->parseData['data_kelas'] = $this->m_general->getAllData($this->table)->result();

        $this->load->view('welcome_message', $this->parseData);
    }

    public function formCreate() {
        $this->parseData['content'] = 'pages/kelas-create';

        $this->load->view('welcome_message', $this->parseData);
    }

    public function formEdit($id) {
        $this->parseData['content'] = 'pages/kelas-edit';

        $kelas = $this->m_general->getWhere($this->table, array('id' => $id))->result();
        $this->parseData['data_edit'] = $kelas[0];

        $this->load->view('welcome_message', $this->parseData);
    }

    public function create() {
        $nama = $this->input->post('nama_kelas');

        $data = array(
            'kode_kelas' => 'KLS-'.$this->generateRandomString(5),
            'nama_kelas' => $nama
        );

        $insert = $this->m_general->insert($this->table, $data);
        if ($insert) {
            redirect(base_url('kelas'));
        }
    }

    public function update($id) {
        $nama = $this->input->post('nama_kelas');
        $kode = $this->input->post('kode_kelas');


        $data = array(
            'id' => $id,
            'nama_kelas' => $nama,
            'kode_kelas' => $kode
        );

        $update = $this->m_general->update($this->table, $data);
        if ($update) {
            redirect(base_url('kelas'));
        }
    }

    public function delete($id) {
        $data = array(
            "id" => $id
        );

        $delete = $this->m_general->delete($this->table, $data);
        if ($delete) redirect(base_url('kelas'));
    }
}