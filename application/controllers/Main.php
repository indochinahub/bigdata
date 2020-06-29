<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class Main extends MY_Controller {

    public function __construct() { 
        parent::__construct();
    }

    public function index(){
        $data["utils"] = $this->utils ;
        $this->load->model("school_model");
        $this->load->model("network_model");
        $this->load->model("personel_model");

        $data["school_number"]  = count($this->school_model->get_all_school());
        $data["network_number"] = count($this->network_model->get_all_network());
        $data["num_personel"]   = $this->personel_model->get_num_personel_all_school();
        

        $this->view("index", $data);
    }


}