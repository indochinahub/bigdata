<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Utils_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_sum_from_table($table, $column){
        $this->db->select_sum($column);
        $query = $this->db->get($table);
        return $query->row()->$column;


    }


}
