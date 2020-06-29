<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class Academic_level extends MY_Controller {

    public function __construct() { 
        parent::__construct();

    }

    public function index(){
        $this->load->model("utils_model");
        
        $teacher_male = 0;
        $teacher_male = $teacher_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_underbachelor_male" ) ; 
        $teacher_male = $teacher_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_bachelor_male");
        $teacher_male = $teacher_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_diploma_male");   
        $teacher_male = $teacher_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_master_male");
        $teacher_male = $teacher_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_doctor_male");
        
        $teacher_female = 0;
        $teacher_female = $teacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_underbachelor_female");
        $teacher_female = $teacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_bachelor_female");
        $teacher_female = $teacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_diploma_female");
        $teacher_female = $teacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_master_female");
        $teacher_female = $teacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_doctor_female");
        
        $professionalteacher_male = 0; 
        $professionalteacher_male = $professionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_underbachelor_male");
        $professionalteacher_male = $professionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_bachelor_male");
        $professionalteacher_male = $professionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_diploma_male");    
        $professionalteacher_male = $professionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_master_male");
        $professionalteacher_male = $professionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_doctor_male");
        
        $professionalteacher_female = 0; 
        $professionalteacher_female = $professionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_underbachelor_female");
        $professionalteacher_female = $professionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_bachelor_female");
        $professionalteacher_female = $professionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_diploma_female");
        $professionalteacher_female = $professionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_master_female");
        $professionalteacher_female = $professionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_doctor_female");

        $seniorprefessionalteacher_male = 0;
        $seniorprefessionalteacher_male = $seniorprefessionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_underbachelor_male");
        $seniorprefessionalteacher_male = $seniorprefessionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_bachelor_male");
        $seniorprefessionalteacher_male = $seniorprefessionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_diploma_male");
        $seniorprefessionalteacher_male = $seniorprefessionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_master_male");
        $seniorprefessionalteacher_male = $seniorprefessionalteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_doctor_male");
        
        $seniorprefessionalteacher_female = 0;
        $seniorprefessionalteacher_female = $seniorprefessionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_underbachelor_female");
        $seniorprefessionalteacher_female = $seniorprefessionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_bachelor_female");
        $seniorprefessionalteacher_female = $seniorprefessionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_diploma_female");
        $seniorprefessionalteacher_female = $seniorprefessionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_master_female");
        $seniorprefessionalteacher_female = $seniorprefessionalteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_doctor_female");

        $expertteacher_male = 0;
        $expertteacher_male = $expertteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_underbachelor_male");
        $expertteacher_male = $expertteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_bachelor_male");
        $expertteacher_male = $expertteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_diploma_male");
        $expertteacher_male = $expertteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_master_male");
        $expertteacher_male = $expertteacher_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_doctor_male");
        
        $expertteacher_female = 0; 
        $expertteacher_female = $expertteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_underbachelor_female");
        $expertteacher_female = $expertteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_bachelor_female");
        $expertteacher_female = $expertteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_diploma_female");
        $expertteacher_female = $expertteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_master_female");
        $expertteacher_female = $expertteacher_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_doctor_female");
    
        $advisoryteacher_underbachelor_male = 0;
        $advisoryteacher_underbachelor_male = $advisoryteacher_underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_underbachelor_male");
        $advisoryteacher_underbachelor_male = $advisoryteacher_underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_bachelor_male");
        $advisoryteacher_underbachelor_male = $advisoryteacher_underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_diploma_male");
        $advisoryteacher_underbachelor_male = $advisoryteacher_underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_master_male");
        $advisoryteacher_underbachelor_male = $advisoryteacher_underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_doctor_male");
    
        $advisoryteacher_underbachelor_female = 0;
        $advisoryteacher_underbachelor_female = $advisoryteacher_underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_underbachelor_female");
        $advisoryteacher_underbachelor_female = $advisoryteacher_underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_bachelor_female");
        $advisoryteacher_underbachelor_female = $advisoryteacher_underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_diploma_female");
        $advisoryteacher_underbachelor_female = $advisoryteacher_underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_master_female");
        $advisoryteacher_underbachelor_female = $advisoryteacher_underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_doctor_female");        
        
        $data["teacher_male"] = $teacher_male;
        $data["teacher_female"] = $teacher_female;
        
        $data["professionalteacher_male"]   = $professionalteacher_male;
        $data["professionalteacher_female"] = $professionalteacher_female;
        
        $data["seniorprefessionalteacher_male"]   = $seniorprefessionalteacher_male;
        $data["seniorprefessionalteacher_female"]   = $seniorprefessionalteacher_female;

        $data["expertteacher_male"]   = $expertteacher_male;
        $data["expertteacher_female"]   = $expertteacher_female;

        $data["advisoryteacher_underbachelor_male"]   = $advisoryteacher_underbachelor_male;
        $data["advisoryteacher_underbachelor_female"]   = $advisoryteacher_underbachelor_female;

        $data["male"] = $teacher_male + $professionalteacher_male + $seniorprefessionalteacher_male + $expertteacher_male + $advisoryteacher_underbachelor_male;
        $data["female"] = $female = $teacher_female + $professionalteacher_female + $seniorprefessionalteacher_female + $expertteacher_female + $advisoryteacher_underbachelor_female;
        
        $data["update_date"] = $this->general_update_date; 
        

        $underbachelor_male = 0;
        $underbachelor_male = $underbachelor_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_underbachelor_male" ) ; 
        $underbachelor_male = $underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_underbachelor_male");
        $underbachelor_male = $underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_underbachelor_male");
        $underbachelor_male = $underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_underbachelor_male");
        $underbachelor_male = $underbachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_underbachelor_male");
        
        $underbachelor_female = 0;
        $underbachelor_female = $underbachelor_female + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_underbachelor_female" ) ; 
        $underbachelor_female = $underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_underbachelor_female");
        $underbachelor_female = $underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_underbachelor_female");
        $underbachelor_female = $underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_underbachelor_female");
        $underbachelor_female = $underbachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_underbachelor_female");

        $bachelor_male = 0;
        $bachelor_male = $bachelor_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_bachelor_male");
        $bachelor_male = $bachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_bachelor_male");
        $bachelor_male = $bachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_bachelor_male");
        $bachelor_male = $bachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_bachelor_male");
        $bachelor_male = $bachelor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_bachelor_male");

        $bachelor_female = 0;
        $bachelor_female = $bachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_bachelor_female");
        $bachelor_female = $bachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_bachelor_female");
        $bachelor_female = $bachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_bachelor_female");
        $bachelor_female = $bachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_bachelor_female");
        $bachelor_female = $bachelor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_bachelor_female");

        
        $diploma_male = 0;
        $diploma_male = $diploma_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_diploma_male");   
        $diploma_male = $diploma_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_diploma_male");    
        $diploma_male = $diploma_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_diploma_male");
        $diploma_male = $diploma_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_diploma_male");
        $diploma_male = $diploma_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_diploma_male");
        
        $diploma_female = 0;
        $diploma_female = $diploma_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_diploma_female");
        $diploma_female = $diploma_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_diploma_female");
        $diploma_female = $diploma_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_diploma_female");
        $diploma_female = $diploma_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_diploma_female");        
        $diploma_female = $diploma_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_diploma_female");
        
        $master_male = 0;
        $master_male = $master_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_master_male");
        $master_male = $master_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_master_male");
        $master_male = $master_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_master_male");
        $master_male = $master_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_master_male");
        $master_male = $master_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_master_male");        

        $master_female = 0; 
        $master_female = $master_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_master_female");
        $master_female = $master_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_master_female");
        $master_female = $master_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_master_female");
        $master_female = $master_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_master_female");
        $master_female = $master_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_master_female");        
        
        $doctor_male = 0; 
        $doctor_male = $doctor_male + $this->utils_model->get_sum_from_table($table = "school", $column = "school_academic_teacher_doctor_male");
        $doctor_male = $doctor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_doctor_male");
        $doctor_male = $doctor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_doctor_male");
        $doctor_male = $doctor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_doctor_male");
        $doctor_male = $doctor_male + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_doctor_male");


        $doctor_female = 0; 
        $doctor_female = $doctor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_doctor_female");
        $doctor_female = $doctor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_doctor_female");
        $doctor_female = $doctor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_doctor_female");
        $doctor_female = $doctor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_doctor_female");
        $doctor_female = $doctor_female + $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_doctor_female");        
        
        
        
        $data["underbachelor_male"] = $underbachelor_male;
        $data["underbachelor_female"] = $underbachelor_female;
        
        $data["bachelor_male"] = $bachelor_male;
        $data["bachelor_female"] = $bachelor_female;
        
        $data["diploma_male"] = $diploma_male;
        $data["diploma_female"] = $diploma_female;
        
        $data["master_male"] = $master_male;
        $data["master_female"] = $master_female;
        
        $data["doctor_male"] = $doctor_male;
        $data["doctor_female"] = $doctor_female;
        
        
        
        $this->view("index", $data);
        
    }
    
    
    public function showAcademic($level) {
        $this->load->model("school_model");

        $schools = $this->school_model->get_all_school();
        
        $new_schools = [];
        $total_male = 0;
        $total_female = 0;
        foreach( $schools as $school){
            if($level  == "teacher") {
                $level_name = "ไม่มีวิทยฐานะ";
                
                $male = 0;
                $male = $male + $school->school_academic_teacher_underbachelor_male;
                $male = $male + $school->school_academic_teacher_bachelor_male;
                $male = $male + $school->school_academic_teacher_diploma_male;
                $male = $male + $school->school_academic_teacher_master_male;
                $male = $male + $school->school_academic_teacher_doctor_male;
                
                $female = 0;
                $female = $female + $school->school_academic_teacher_underbachelor_female;
                $female = $female + $school->school_academic_teacher_bachelor_female;
                $female = $female + $school->school_academic_teacher_diploma_female;
                $female = $female + $school->school_academic_teacher_master_female;
                $female = $female + $school->school_academic_teacher_doctor_female;
                
            } elseif( $level  == "professionalteacher" ){
                $level_name = "ชำนาญการ";
                
                $male = 0;
                $male = $male + $school->school_academic_professionalteacher_underbachelor_male;
                $male = $male + $school->school_academic_professionalteacher_bachelor_male;
                $male = $male + $school->school_academic_professionalteacher_diploma_male;
                $male = $male + $school->school_academic_professionalteacher_master_male;
                $male = $male + $school->school_academic_professionalteacher_doctor_male;
                
                $female = 0;
                $female = $female + $school->school_academic_professionalteacher_underbachelor_female;
                $female = $female + $school->school_academic_professionalteacher_bachelor_female;
                $female = $female + $school->school_academic_professionalteacher_diploma_female;
                $female = $female + $school->school_academic_professionalteacher_master_female;
                $female = $female + $school->school_academic_professionalteacher_doctor_female;
                
            } elseif( $level  == "seniorprefessionalteacher" ){
                $level_name = "ชำนาญการพิเศษ";
                
                $male = 0;
                $male = $male + $school->school_academic_seniorprefessionalteacher_underbachelor_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_bachelor_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_diploma_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_master_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_doctor_male;
                
                $female = 0;
                $female = $female + $school->school_academic_seniorprefessionalteacher_underbachelor_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_bachelor_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_diploma_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_master_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_doctor_female;
                
            } elseif( $level  == "expertteacher" ){
                $level_name = "เชี่ยวชาญ";
                
                $male = 0;
                $male = $male + $school->school_academic_expertteacher_underbachelor_male;
                $male = $male + $school->school_academic_expertteacher_bachelor_male;
                $male = $male + $school->school_academic_expertteacher_diploma_male;
                $male = $male + $school->school_academic_expertteacher_master_male;
                $male = $male + $school->school_academic_expertteacher_doctor_male;
                
                $female = 0;
                $female = $female + $school->school_academic_expertteacher_underbachelor_female;
                $female = $female + $school->school_academic_expertteacher_bachelor_female;
                $female = $female + $school->school_academic_expertteacher_diploma_female;
                $female = $female + $school->school_academic_expertteacher_master_female;
                $female = $female + $school->school_academic_expertteacher_doctor_female;                
                
            } elseif( $level  == "advisoryteacher" ){
                $level_name = "เชี่ยวชาญพิเศษ";
                
                $male = 0;
                $male = $male + $school->school_academic_advisoryteacher_underbachelor_male;
                $male = $male + $school->school_academic_advisoryteacher_bachelor_male;
                $male = $male + $school->school_academic_advisoryteacher_diploma_male;
                $male = $male + $school->school_academic_advisoryteacher_master_male;
                $male = $male + $school->school_academic_advisoryteacher_doctor_male;
                
                $female = 0;
                $female = $female + $school->school_academic_advisoryteacher_underbachelor_female;
                $female = $female + $school->school_academic_advisoryteacher_bachelor_female;
                $female = $female + $school->school_academic_advisoryteacher_diploma_female;
                $female = $female + $school->school_academic_advisoryteacher_master_female;
                $female = $female + $school->school_academic_advisoryteacher_doctor_female;                
            }       
            
            $school->male = $male;
            $school->female = $female;
            
            $total_male = $total_male + $male;
            $total_female = $total_female + $female;
            
            if( ($school->male + $school->female) > 0 ){
                array_push($new_schools, $school);
            }
        }

        $data["schools"] = $new_schools; 
        $data["level_name"] = $level_name; 
        
        $data["total_male"] = $total_male; 
        $data["total_female"] = $total_female; 
        
        $data["update_date"] = $this->general_update_date; 
        
        $this->view("showAcademic", $data);
    }
    
    
    public function showEducationLevel($level){
        
        $this->load->model("school_model");

        $schools = $this->school_model->get_all_school();
        
        $new_schools = [];
        $total_male = 0;
        $total_female = 0;
        foreach( $schools as $school){
            if($level == "underbachelor"){
                $level_name = "ต่ำกว่าระดับปริญญาตรี";
                
                $male = 0;
                $male = $male + $school->school_academic_teacher_underbachelor_male;
                $male = $male + $school->school_academic_professionalteacher_underbachelor_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_underbachelor_male;
                $male = $male + $school->school_academic_expertteacher_underbachelor_male;
                $male = $male + $school->school_academic_advisoryteacher_underbachelor_male;
                
                $female = 0;
                $female = $female + $school->school_academic_teacher_underbachelor_female;
                $female = $female + $school->school_academic_professionalteacher_underbachelor_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_underbachelor_female;
                $female = $female + $school->school_academic_expertteacher_underbachelor_female;
                $female = $female + $school->school_academic_advisoryteacher_underbachelor_female;
                
            }elseif($level == "bachelor"){
                $level_name = "ระดับปริญญาตรี";
                
                $male = 0;
                $male = $male + $school->school_academic_teacher_bachelor_male;
                $male = $male + $school->school_academic_professionalteacher_bachelor_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_bachelor_male;
                $male = $male + $school->school_academic_expertteacher_bachelor_male;
                $male = $male + $school->school_academic_advisoryteacher_bachelor_male;                
                
                $female = 0;
                $female = $female + $school->school_academic_teacher_bachelor_female;
                $female = $female + $school->school_academic_professionalteacher_bachelor_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_bachelor_female;
                $female = $female + $school->school_academic_expertteacher_bachelor_female;
                $female = $female + $school->school_academic_advisoryteacher_bachelor_female;
                
            }elseif($level == "diploma"){
                $level_name = "ระดับประกาศนียบัตรบัณฑิต";

                $male = 0;
                $male = $male + $school->school_academic_teacher_diploma_male;
                $male = $male + $school->school_academic_professionalteacher_diploma_male;  
                $male = $male + $school->school_academic_seniorprefessionalteacher_diploma_male;
                $male = $male + $school->school_academic_expertteacher_diploma_male;
                $male = $male + $school->school_academic_advisoryteacher_diploma_male;

                $female = 0;    
                $female = $female + $school->school_academic_teacher_diploma_female; 
                $female = $female + $school->school_academic_professionalteacher_diploma_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_diploma_female;
                $female = $female + $school->school_academic_expertteacher_diploma_female;
                $female = $female + $school->school_academic_advisoryteacher_diploma_female;
                
            }elseif($level == "master"){
                $level_name = "ระดับปริญญาโท";

                $male = 0;
                $male = $male + $school->school_academic_teacher_master_male;
                $male = $male + $school->school_academic_professionalteacher_master_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_master_male;
                $male = $male + $school->school_academic_expertteacher_master_male;
                $male = $male + $school->school_academic_advisoryteacher_master_male;
                
                $female = 0;    
                $female = $female + $school->school_academic_teacher_master_female;
                $female = $female + $school->school_academic_professionalteacher_master_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_master_female;
                $female = $female + $school->school_academic_expertteacher_master_female;
                $female = $female + $school->school_academic_advisoryteacher_master_female;

            }elseif($level == "doctor"){
                $level_name = "ระดับปริญญาเอก";

                $male = 0;
                $male = $male + $school->school_academic_teacher_doctor_male;
                $male = $male + $school->school_academic_professionalteacher_doctor_male;
                $male = $male + $school->school_academic_seniorprefessionalteacher_doctor_male;
                $male = $male + $school->school_academic_expertteacher_doctor_male;
                $male = $male + $school->school_academic_advisoryteacher_doctor_male;

               
                $female = 0;
                $female = $female + $school->school_academic_teacher_doctor_female;
                $female = $female + $school->school_academic_professionalteacher_doctor_female;
                $female = $female + $school->school_academic_seniorprefessionalteacher_doctor_female;
                $female = $female + $school->school_academic_expertteacher_doctor_female;
                $female = $female + $school->school_academic_advisoryteacher_doctor_female;
                

            }
            
            
            
            
            $school->male = $male;
            $school->female = $female;
            
            $total_male = $total_male + $male;
            $total_female = $total_female + $female;  

            if( ($school->male + $school->female) > 0 ){
                array_push($new_schools, $school);
            }            
            
        

        
        
        
        



        }
        
        $data["level_name"] = $level_name; 
        
        $data["schools"] = $new_schools; 
        
        
        $data["total_male"] = $total_male; 
        $data["total_female"] = $total_female;         
        
        $data["update_date"] = $this->general_update_date;         
        
        $this->view("showEducationLevel", $data);
        
        
        
        
        
        

        
        
        
        
        

    }

}