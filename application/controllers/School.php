<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class School extends MY_Controller {

    public function __construct() { 
        parent::__construct();
    }

    public function index(){
        $data["utils"] = $this->utils ;
        $this->load->model("school_model");

        $data["schools"] = $this->school_model->get_all_school();
        $this->view("index", $data);
    }


    public function showSchoolDetailView($school_id){
        $data["utils"] = $this->utils ;
        $this->load->model("school_model");

        $school = $this->school_model->get_school_by_id($school_id);
        $network = $this->school_model->get_network_by_school_id($school_id);
        $educationlevel = $this->school_model->get_educationlevel_by_school_id($school_id);

        $school->network_name = $network->network_name;
        $school->educationlevel = $educationlevel->educationlevel_name ;

        
        $levels = [];
        $sum_all_level = 0;
        
        foreach( $this->personel_by_level_comlumns as $column_name => $level_name){
            if($school->$column_name){
                $level = new stdClass();
                $level->name = $level_name ;
                $level->number = $school->$column_name;
                $sum_all_level = $sum_all_level + $level->number;
                
                array_push($levels, $level);
            }

        }

        $data["levels"] = $levels;
        $data["sum_all_level"] = $sum_all_level;
        $data["school"] = $school;

        $this->view("showSchoolDetailView", $data);

    }


}