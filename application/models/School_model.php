<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class School_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_school(){
        $query = $this->db->get('school');
        return $query->result();
    }

    public function get_school_by_id($school_id){
        $query = $this->db->get_where('school', array('school_id' => $school_id));

        if( $query->result() ){
            return $query->row();
        }else{
            return FALSE;
        }

    } 


    public function get_network_by_school_id($school_id){
        if ( !($school = $this->get_school_by_id($school_id))) { return FALSE;   }

        $query = $this->db->get_where('network', array('network_id' => $school->id_network));

        if( $query->result() ){
            return $query->row();
        }else{
            return FALSE;
        }
    }

    public function get_educationlevel_by_school_id($school_id){
        $this->load->model("educationlevel_model");

        if( !($school = $this->get_school_by_id($school_id)) ){ return FALSE;}
        
        $query = $this->db->get_where('educationlevel', array('educationlevel_id' => $school->id_educationlevel));

        if( $query->result() ){
            return $query->row();
        }else{
            return FALSE;
        }

    }




}
