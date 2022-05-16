<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getUsers() {
        $this->db->select('*');
        return $this->db->get('users')->result();
    }
}
