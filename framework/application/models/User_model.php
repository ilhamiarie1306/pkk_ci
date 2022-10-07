<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author ILHAMI ARIE FAUZI
 */
class User_model  extends CI_Model {
    
    private $conn = null;

    function __construct() {
        parent::__construct();
        $this->load->library('koneksi_database');
        $this->conn = $this->koneksi_database->connect();
    }
    
    function validateUserLogin($username, $password){
        $result = false;
        $query = "SELECT username, `password`, email FROM t_user WHERE username = ? AND `password` = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $password);
        try{
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (is_array($user)) {
                $result = true;
            }
        } catch (Exception $e){ }
        
        return $result;
    }
    
    function getAlluser(){
        
    }
    
    function getUserByUsername($username){
        
    }
    
    function getUserByEmail($email){
        
    }
    
    function saveOrUpdateUser($username, $password, $email){
        
        
    }
    
    function deleteUser($username){
        
        
    }
    
    
    
    
}
