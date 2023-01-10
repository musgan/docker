<?php

class People_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getall(){
        $query = $this->db->get("person");
        return $query->result();
    }
}