<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Personel_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_num_personel_by_school_id( $school_id){
        $query = $this->db->get_where('school', array('school_id' => $school_id));

        if( $query->result() ){
            $school =  $query->row();
            $number =           $school->school_num_teacher_preschool   + $school->school_num_teacher_primary ;
            $number = $number + $school->school_num_teacher_secondary   + $school->school_num_teacher_highschool ; 
            $number = $number + $school->school_num_teacher_vocational  + $school->school_num_teacher_notteach ; 
            $number = $number + $school->school_num_teacher_notselect ; 
            return $number; 
        }else{
            return 0;
        }
    }

    public function get_num_personel_all_school(){
        $this->db->select_sum('school_num_teacher_preschool');
        $query = $this->db->get('school');
        $preschool = $query->row()->school_num_teacher_preschool;

        $this->db->select_sum('school_num_teacher_primary');
        $query = $this->db->get('school');
        $primary = $query->row()->school_num_teacher_primary;

        $this->db->select_sum('school_num_teacher_secondary');
        $query = $this->db->get('school');
        $secondary = $query->row()->school_num_teacher_secondary;
        
        $this->db->select_sum('school_num_teacher_highschool');
        $query = $this->db->get('school');
        $highschool = $query->row()->school_num_teacher_highschool;

        $this->db->select_sum('school_num_teacher_vocational');
        $query = $this->db->get('school');
        $vocational = $query->row()->school_num_teacher_vocational;        

        $this->db->select_sum('school_num_teacher_notteach');
        $query = $this->db->get('school');
        $notteach = $query->row()->school_num_teacher_notteach;        

        $this->db->select_sum('school_num_teacher_notselect');
        $query = $this->db->get('school');
        $notselect = $query->row()->school_num_teacher_notselect;        

        // 

        return $preschool + $primary + $secondary + $highschool + $notteach + $notselect; 



    }





}
