<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Student_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_num_student(){ 
        $this->db->select_sum('school_numofstudent');
        $query = $this->db->get('school');

        if($query->row()->school_numofstudent ){
            return $query->row()->school_numofstudent;
        }else{
            return 0;
        }        
    }




}
