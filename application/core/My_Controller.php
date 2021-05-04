<?php


class My_Controller extends CI_Controller
{
    public array $parseData = [
        'content' => 'errors/index',
        'title_tab' => 'Not Found!',
        'app_name' => 'SISTEM KELULUSAN',
        'isLogin'=> false
    ];

    function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();
    }

    /***
     * @return bool
     */
    public function isLogin() : bool
    {
        $isLogin = false;
        if ($this->session->userdata('userIsLogin')) $isLogin = true;

        return $isLogin;
    }

    public function setLogin($dataSession) {
        $session = array(
            'data' => $dataSession,
            'userIsLogin' => true
        );
        $this->session->set_userdata($session);
    }

    public function generateRandomString($length = 10) : string {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}