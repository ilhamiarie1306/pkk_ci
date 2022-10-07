<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session_model
 *
 * @author ILHAMI ARIE FAUZI
 */
class Session_model extends CI_Model {

    function validate_session() {
        $result = false;
        $userData = $this->session->userdata();
        if (array_key_exists('username', $userData) && array_key_exists('password', $userData)) {
            $username = $userData['username'];
            $password = $userData['password'];
            $this->load->model("user_model");
            $result = $this->user_model->validateUserLogin($username, $password);
        }
        return $result;
    }

    function saveSession($username, $password) {
        $result = false;
        //$this->session->set_userdata(["token"=>$token]);
        $this->load->model("user_model");
        $res = $this->user_model->validateUserLogin($username, $password);
        if ($res) {
            $this->session->set_userdata(["username"=>$username, "password"=>$password]);
            $result=true;
        }

        return $result;
    }

    function deleteSession(){
        $this->session->sess_destroy();
    }
}
