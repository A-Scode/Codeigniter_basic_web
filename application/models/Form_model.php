<?php
class Form_model extends CI_Model{
    private function __contruct(){
        parent::__contruct();
    }
    public function desc_college_students(){
        $this->load->database();
        $query = "show tables;";
        $res = $this->db->query($query);
        print_r($res->result_array());
        die();
    }
}

?>