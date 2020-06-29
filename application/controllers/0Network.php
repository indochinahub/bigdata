<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class Network extends MY_Controller {

    public function __construct() { 
        parent::__construct();
    }

    public function index(){
        $data["utils"] = $this->utils ;
        $this->load->model("network_model");
        $this->load->model("school_model");
        $this->load->model("student_model");

        $networks = $this->network_model->get_all_network();
        $new_networks = [] ; 

        foreach( $networks as $network){
            $network->num_school = count($this->network_model->get_school_by_network_id($network->network_id));
            $network->num_student = $this->network_model->get_num_student_by_network_id($network->network_id) ;
            array_push($new_networks, $network);
        }

        $data["networks"] = $new_networks;


        $all_schools = $this->school_model->get_all_school(); 
        $data["num_all_school"] = count($all_schools); 
        $data["num_all_student"] = $this->student_model->get_num_student(); 

        $this->view("index", $data);
    }

    public function showNetworkView($network_id) {
        $this->load->model("network_model");

        $data["network"]        = $this->network_model->get_network_by_id($network_id);
        $data["num_school"]     = count($this->network_model->get_school_by_network_id($network_id));
        $data["num_student"]    = $this->network_model->get_num_student_by_network_id($network_id);
        $data["num_teacher"]    = $this->network_model->get_num_teacher_by_network_id($network_id);

        $data["schools"]    = $this->network_model->get_school_by_network_id($network_id);
        $data["student_update_time"]    =  $data["schools"][0]->school_studentupdatetime ; 
        $data["teacher_update_time"]    =  $data["schools"][0]->school_studentupdatetime ; 

        $this->view("showNetworkView", $data);
        


    }



}