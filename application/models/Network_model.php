<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Network_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_network(){
        $query = $this->db->get('network');
        return $query->result();
    }

    public function get_school_by_network_id($network_id){
        $query = $this->db->get_where('school', array('id_network' => $network_id));
        return $query->result();

    }

    public function get_num_student_by_network_id($network_id){
        $this->db->select_sum('school_numofstudent');
        $this->db->where('id_network =', $network_id);
        $query = $this->db->get('school');

        if($query->row()->school_numofstudent ){
            return $query->row()->school_numofstudent;
        }else{
            return 0;
        }
    }

    public function get_network_by_id($network_id){
        $query = $this->db->get_where('network', array('network_id' => $network_id));
        if($query->result()){
            return $query->row();
        }else{
            return FALSE;
        }
    }

    public function get_num_teacher_by_network_id($network_id){
        $this->db->select_sum('school_numofpersonel');
        $this->db->where('id_network =', $network_id);
        $query = $this->db->get('school');

        if($query->row()->school_numofpersonel ){
            return $query->row()->school_numofpersonel;
        }else{
            return 0;
        }        

    }



    




}
