<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Educationlevel_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_educationlevel(){
        $query = $this->db->get('educationlevel');
        return $query->result();
    }

    public function get_school_by_educationlevel_id($educationlevel_id){
        $query = $this->db->get_where('school', array('id_educationlevel' => $educationlevel_id));
        return $query->result();
    }

    public function get_num_student_by_educationlevel_id($educationlevel_id){
        $this->db->select_sum('school_numofstudent');
        $this->db->where('id_educationlevel =', $educationlevel_id);
        $query = $this->db->get('school');

        if($query->row()->school_numofstudent ){
            return $query->row()->school_numofstudent;
        }else{
            return 0;
        }
    }

    public function get_num_room_by_educationlevel_id($educationlevel_id){
        
        $this->db->select_sum('school_numofclassroom');
        $this->db->where('id_educationlevel =', $educationlevel_id);
        $query = $this->db->get('school');

        if($query->row()->school_numofclassroom ){
            return $query->row()->school_numofclassroom;
        }else{
            return 0;
        }        

    }

    public function get_num_teacher_by_educationlevel_id($educationlevel_id){

        $this->db->select_sum('school_numofpersonel');
        $this->db->where('id_educationlevel =', $educationlevel_id);
        $query = $this->db->get('school');

        if($query->row()->school_numofpersonel ){
            return $query->row()->school_numofpersonel;
        }else{
            return 0;
        }                
        
    }




}
