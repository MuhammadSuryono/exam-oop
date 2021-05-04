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
        $this->parseData['data_kelas'] = $this->m_general->getAllData('tb_kelas')->result();

        $this->load->view('welcome_message', $this->parseData);
    }

    public function formEdit($id) {
        $this->parseData['content'] = 'pages/siswa-edit';

        $siswa = $this->m_general->getWhere($this->table, array('id' => $id))->result();
        $this->parseData['data_edit'] = $siswa[0];
        $this->parseData['data_kelas'] = $this->m_general->getAllData('tb_kelas')->result();

        $this->load->view('welcome_message', $this->parseData);
    }

    public function create() {
        $nisn = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa,
            'nama_kelas' => $nama_kelas
        );

        $insert = $this->m_general->insert($this->table, $data);
        if ($insert) {
            redirect(base_url('siswa'));
        }
    }

    public function update($id) {
        $nisn = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'id' => $id,
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa,
            'nama_kelas' => $nama_kelas
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