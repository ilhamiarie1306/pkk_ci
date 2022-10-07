<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Autentikasi
 *
 * @author Arik
 */
class Autentikasi extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model("session_model");
    }

        //put your code here
    public function index() {
        if ($this->session_model->validate_session()) {
            redirect(base_url('administrasi'));
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Kode Agen', 'required|trim|min_length[3]');
            $this->form_validation->set_rules('password', 'Pin', 'required|trim|min_length[4]');

            if ($this->form_validation->run() == false) {
                $this->load->view('autentikasi/loginview');
            } else {
                //redirect("user");
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $res = $this->session_model->saveSession($username, $password);
                if ($res) {
                    redirect(base_url("administrasi"));
                } else {
                    $this->load->view('autentikasi/loginview', ["login_fail" => "Login Gagal, Username Password tidak valid, mohon masukkan data yang benar. error code:44212"]);
                }
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
