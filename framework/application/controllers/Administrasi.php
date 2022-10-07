<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrasi
 *
 * @author ILHAMI ARIE FAUZI
 */
class Administrasi extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model("session_model");
        if (!$this->session_model->validate_session()) {
            redirect(base_url());
        }
    }

    
    //put your code here
    function index() {
        $username = $this->session_model->getUsername();
        $this->load->view('administrasi/header', ['username' => $username]);
        $this->load->view('administrasi/navbar', ['username' => $username]);
    }
}
