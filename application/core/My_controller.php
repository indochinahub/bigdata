<?php
    
class MY_Controller extends CI_Controller{

    protected $utils ;
    
    var $personel_by_level_comlumns;

    public function __construct()
    {
		parent::__construct();
		$this->utils = new stdClass; 
		$this->utils->className = $this->router->fetch_class();
        $this->utils->methodName = $this->router->fetch_method();
        
        $this->general_update_date = "10 มิ.ย.2562" ; 
        
        $this->personel_by_level_comlumns =     [    
            "school_num_teacher_preschool"  =>  "ก่อนวัยเรียน",
            "school_num_teacher_primary"    =>  "ระดับประถม",
            "school_num_teacher_secondary"  =>  "ระดับมัธยมต้น",
            "school_num_teacher_highschool" =>  "ระดับมัธยมปลาย",
            "school_num_teacher_vocational" =>  "ระดับปวช.",
            "school_num_teacher_notteach"   =>  "ไม่ได้ปฏิบัติการสอน",
            "school_num_teacher_notselect"  =>  "ไม่ได้เลือก"
                                                ] ;         
	}
    
	
    public function viewTop($fileName, $data = []){
        $this->load->view("mainSection/0100head", $data);
        $this->load->view("mainSection/0200navbar", $data);
        $this->load->view("mainSection/0300sidebar", $data);
        $this->load->view("mainSection/0400contentHeader", $data);
    }    

    public function view($fileName, $data = []){
        $this->viewTop($fileName, $data);
        $this->load->view($this->utils->className."/".$fileName, $data);
        $this->viewBottom($fileName, $data);

    }

    public function viewBottom($fileName, $data = []){
        $this->load->view("mainSection/0500showinform", $data);
        $this->load->view("mainSection/0600footer", $data);
    }

    public function viewCenter($fileName, $data){
        $this->load->view($this->utils->className."/".$fileName, $data);
    }

}