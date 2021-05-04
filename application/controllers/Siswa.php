<?php


class Siswa extends My_Controller
{
    public $isLogin;
    private $table = 'tb_siswa';

    public function __construct()
    {
        parent::__construct();
        $this->isLogin = $this->isLogin();
    }

    public function index() {
        $this->parseData['content'] = 'pages/peserta-didik';
        $this->parseData['data_siswa'] = $this->m_general->getAllData($this->table)->result();

        $this->load->view('welcome_message', $this->parseData);
    }

    public function formCreate() {
        $this->parseData['content'] = 'pages/siswa-create';

        $this->load->view('welcome_message', $this->parseData);
    }

    public function formEdit($id) {
        $this->parseData['content'] = 'pages/siswa-edit';

        $kelas = $this->m_general->getWhere($this->table, array('id' => $id))->result();
        $this->parseData['data_edit'] = $kelas[0];

        $this->load->view('welcome_message', $this->parseData);
    }

    public function create() {
        $nisn = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');

        $data = array(
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa
        );

        $insert = $this->m_general->insert($this->table, $data);
        if ($insert) {
            redirect(base_url('siswa'));
        }
    }

    public function update($id) {
        $nisn = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');

        $data = array(
            'id' => $id,
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa
        );

        $update = $this->m_general->update($this->table, $data);
        if ($update) {
            redirect(base_url('siswa'));
        }
    }

    public function delete($id) {
        $data = array(
            "id" => $id
        );

        $delete = $this->m_general->delete($this->table, $data);
        if ($delete) redirect(base_url('siswa'));
    }

}