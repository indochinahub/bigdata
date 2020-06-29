<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class Educationlevel extends MY_Controller {

    public function __construct() { 
        parent::__construct();
    }

    public function index(){
        $this->load->model("educationlevel_model");
        
        $educationlevels = $this->educationlevel_model->get_all_educationlevel();
        $temp_educationlevels  = [];
        foreach( $educationlevels as $level){
            $level->num_student = $this->educationlevel_model->get_num_student_by_educationlevel_id($level->educationlevel_id);
            $level->schools = $this->educationlevel_model->get_school_by_educationlevel_id($level->educationlevel_id);


            
            $level->num_school = count($level->schools);
            $level->num_classroom = $this->educationlevel_model->get_num_room_by_educationlevel_id($level->educationlevel_id) ;
            $level->num_teacher = $this->educationlevel_model->get_num_teacher_by_educationlevel_id($level->educationlevel_id);

            array_push( $temp_educationlevels, $level );
        }


        $data["student_update_time"] = $temp_educationlevels[0]->schools[0]->school_studentupdatetime ;
        $data["room_update_time"] = $temp_educationlevels[0]->schools[0]->school_roomupdatetime ;
        $data["educationlevels"] =  $temp_educationlevels;
        $this->view("index", $data);
        
    }

}