<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class Personel extends MY_Controller {

    public function __construct() { 
        parent::__construct();

    }

    public function index(){
        $this->load->model("school_model");
        $this->load->model("personel_model");

        $my_schools = $this->school_model->get_all_school();

        $schools = [];
        foreach($my_schools as $school) {
            $school->num_personel = $this->personel_model->get_num_personel_by_school_id($school->school_id);
            array_push($schools, $school);
        }

        $data["update_time"] = $schools[0]->school_studentupdatetime; 
        $data["schools"] = $schools;
        $this->view("index", $data);
    }

}