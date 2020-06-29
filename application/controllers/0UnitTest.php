<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/My_controller.php';

class UnitTest extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->unit->use_strict(TRUE);
    }

    public function index(){
        echo "Using Unit Test Library <hr>";
        
        $this->preparation();
        $this->testUser_model();
        $this->showReport($this->unit->result(), $this->unit->report());
    }
    
    
    public function preparation(){
        
    }

    public function testUser_model(){
        $this->load->model("school_model");
        $this->load->model("network_model");
        $this->load->model("student_model");
        $this->load->model("educationlevel_model");
        $this->load->model("personel_model");
        $this->load->model("utils_model");
    
    /*******************************************************************/
        $testName = "School_model::get_all_school()_getNoParameter_returnAllSchoolObject";    
        $note = "";
        unset($result);
        unset($expectedResult);

        $schools = $this->school_model->get_all_school();
        
        $result = [ $schools[0]->school_id, $schools[0]->school_engname];
        $expectedResult = ["1032650001", "Anubarnsurin"];
        
        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "School_model::get_school_by_id(schoolId)_getValidId_returnSchoolObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $school = $this->school_model->get_school_by_id($school_id = "1032650001");

        $result = [$school->school_id, $school->school_engname];
        $expectedResult = ["1032650001", "Anubarnsurin"];
        
        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_all_network()_NoParameter_returnArrayOfObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $networks = $this->network_model->get_all_network();

        $result = count($networks);
        $expectedResult = 16;
        
        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_school_by_network_id(network_id)_getValidParameter__returnArrayOfObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $schools = $this->network_model->get_school_by_network_id($network_id = 1);

        $result = [ $schools[0]->school_id, $schools[0]->school_engname];

        $expectedResult = ["1032650108", "bankamin(reaungratrungsan)"];
    
        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_school_by_network_id(network_id)_getInValidParamerter__returnBlankArray";
        $note = "";
        unset($result);
        unset($expectedResult);

        $schools = $this->network_model->get_school_by_network_id($network_id = 0);

        $result = count($schools);

        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_num_student_by_network_id(network_id)_getValidParamerter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $number = $this->network_model->get_num_student_by_network_id($network_id = 1);

        $result = $number;

        $expectedResult = "2617";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_num_student_by_network_id(network_id)_getInValidParamerter__returnZero";
        $note = "";
        unset($result);
        unset($expectedResult);

        $number = $this->network_model->get_num_student_by_network_id($network_id = 0);

        $result = $number;

        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Student_model::get_num_student()_NoParamerter__returnNUmber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_student = $this->student_model->get_num_student();

        $result = $num_student;

        $expectedResult = "53849";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Student_model::get_network_by_id(network_id))_getValidParamerter__returnObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $network = $this->network_model->get_network_by_id($network_id = 1);

        $result = $network->network_name;

        $expectedResult = "จอมพระ 1";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_network_by_id(network_id)_getInvalidParamerter__returnFalse";
        $note = "";
        unset($result);
        unset($expectedResult);

        $network = $this->network_model->get_network_by_id($network_id = 0);

        $result = $network;

        $expectedResult = FALSE;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_num_teacher_by_network_id(network_id)_getValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_teacher = $this->network_model->get_num_teacher_by_network_id($network_id = 1);

        $result = $num_teacher;

        $expectedResult = "248";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Network_model::get_num_teacher_by_network_id(network_id)_getInValidParameter__returnZero";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_teacher = $this->network_model->get_num_teacher_by_network_id($network_id = 0);

        $result = $num_teacher;

        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);
    
    /*******************************************************************/
        $testName = "School_model::get_network_by_school_id(school_id)_getValidParameter__returnObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $network = $this->school_model->get_network_by_school_id($school_id = "1032650001");

        $result = $network->network_name;
        $expectedResult = "เมืองสุรินทร์ 4";

        $this->unit->run($result, $expectedResult, $testName, $note);
    
    /*******************************************************************/
        $testName = "School_model::get_network_by_school_id(school_id)_getInValidParameter__returnObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $network = $this->school_model->get_network_by_school_id($school_id = "0");

        $result = $network;
        $expectedResult = FALSE;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_all_educationlevel()_getInValidParameter__returnObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $educationlevels = $this->educationlevel_model->get_all_educationlevel();

        $result = $educationlevels[0]->educationlevel_name;
        $expectedResult = "อนุบาล-ประถมศึกษา";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_school_by_educationlevel_id(edicationlevel_id)_getValidParameter__returnArrayOfObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $schools = $this->educationlevel_model->get_school_by_educationlevel_id($educationlevel_id = 1 );

        // var_dump($schools[0]->school_smisid);
        // echo "<hr>";

        $result = $schools[0]->school_smisid;
        $expectedResult = "32010074";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_school_by_educationlevel_id(edicationlevel_id)_getInValidParameter__returnBlankArray";
        $note = "";
        unset($result);
        unset($expectedResult);

        $schools = $this->educationlevel_model->get_school_by_educationlevel_id($educationlevel_id = 0 );

        $result = $schools;
        $expectedResult = [];

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_school_by_educationlevel_id(edicationlevel_id)_getInValidParameter__returnBlankArray";
        $note = "";
        unset($result);
        unset($expectedResult);

        $schools = $this->educationlevel_model->get_school_by_educationlevel_id($educationlevel_id = 0 );

        $result = $schools;
        $expectedResult = [];

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_num_student_by_educationlevel_id(educationlevel_id)_getValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_student = $this->educationlevel_model->get_num_student_by_educationlevel_id($educationlevel_id = 1) ;

        $result = $num_student;
        $expectedResult = "33685";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_num_student_by_educationlevel_id(educationlevel_id)_getInValidParameter__returnZero";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_student = $this->educationlevel_model->get_num_student_by_educationlevel_id($educationlevel_id = 0) ;

        $result = $num_student;
        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_num_room_by_educationlevel_id(educationlevel_id)_getValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_room = $this->educationlevel_model->get_num_room_by_educationlevel_id($educationlevel_id = 1) ;

        $result = $num_room;
        $expectedResult = "2089";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_num_room_by_educationlevel_id(educationlevel_id)_getInValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_room = $this->educationlevel_model->get_num_room_by_educationlevel_id($educationlevel_id = 0) ;

        $result = $num_room;
        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_num_teacher_by_educationlevel_id(educationlevel_id)_ValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_student = $this->educationlevel_model->get_num_teacher_by_educationlevel_id($educationlevel_id = 1) ;

        $result = $num_student;
        $expectedResult = "2706";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "Educationlevel_model::get_num_teacher_by_educationlevel_id(educationlevel_id)_InValidParameter__returnZero";
        $note = "";
        unset($result);
        unset($expectedResult);

        $num_student = $this->educationlevel_model->get_num_teacher_by_educationlevel_id($educationlevel_id = 0) ;

        $result = $num_student;
        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "School_model::get_educationlevel_by_school_id(school_id)_ValidParameter__returnObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $educationlevel = $this->school_model->get_educationlevel_by_school_id("1032650001") ;

        $result = $educationlevel->educationlevel_name;
        $expectedResult = "อนุบาล-ประถมศึกษา";

        $this->unit->run($result, $expectedResult, $testName, $note);

    /*******************************************************************/
        $testName = "School_model::get_educationlevel_by_school_id(school_id)_InValidParameter__returnObject";
        $note = "";
        unset($result);
        unset($expectedResult);

        $educationlevel = $this->school_model->get_educationlevel_by_school_id("0") ;

        $result = $educationlevel;
        $expectedResult = FALSE;

        $this->unit->run($result, $expectedResult, $testName, $note);
        
    /*******************************************************************/
        $testName = "Personel_model::get_num_personel_by_school_id(school_id)_ValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $number = $this->personel_model->get_num_personel_by_school_id($school_id = "1032650081") ;

        $result = $number;
        $expectedResult = 7;

        $this->unit->run($result, $expectedResult, $testName, $note);
        
    /*******************************************************************/
        $testName = "Personel_model::get_num_personel_by_school_id(school_id)_getInValidParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $number = $this->personel_model->get_num_personel_by_school_id($school_id = "0") ;

        $result = $number;
        $expectedResult = 0;

        $this->unit->run($result, $expectedResult, $testName, $note);
    
    /*******************************************************************/
        $testName = "Personel_model::get_num_personel_all_school()_getNoParameter__returnNumber";
        $note = "";
        unset($result);
        unset($expectedResult);

        $number = $this->personel_model->get_num_personel_all_school() ;

        $result = $number;
        $expectedResult = 4296;

        $this->unit->run($result, $expectedResult, $testName, $note);

    
    /*******************************************************************/
        $testName = "Utils_model::get_sum_from_table(table, column)_getValidParameter__returnNumber";
        
        $note = "";
        unset($result);
        unset($expectedResult);

        $result =   [
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_underbachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_underbachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_bachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_bachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_diploma_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_diploma_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_master_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_master_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_doctor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_teacher_doctor_female"),

                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_underbachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_underbachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_bachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_bachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_diploma_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_diploma_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_master_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_master_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_doctor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_professionalteacher_doctor_female"),

                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_underbachelor_male"),                        
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_underbachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_bachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_bachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_diploma_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_diploma_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_master_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_master_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_doctor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_seniorprefessionalteacher_doctor_female"),

                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_underbachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_underbachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_bachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_bachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_diploma_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_diploma_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_master_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_master_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_doctor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_expertteacher_doctor_female"),
                        
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_underbachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_underbachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_bachelor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_bachelor_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_diploma_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_diploma_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_master_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_master_female"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_doctor_male"),
                        $this->utils_model->get_sum_from_table($table = "school" , $column = "school_academic_advisoryteacher_doctor_female"),

                    ];


        $expectedResult =   [
                "0",    "0",    "97",   "480",  "5",    "11",   "17",   "68",   "0",    "0",
                "4",    "5",    "130",  "221",  "5",    "2",    "65",   "162",  "0",    "0",
                "4",    "6",    "322",  "924",  "7",    "6",    "248",  "306",  "2",    "4",
                "0",    "0",    "0",    "0",    "0",    "0",    "3",    "0",    "0",    "0",
                "0",    "0",    "0",    "0",    "0",    "0",    "0",    "0",    "0",    "0",

            
            ];

        $this->unit->run($result, $expectedResult, $testName, $note);



        




    }












    
    function showReport($results, $report){

        $results = $this->unit->result();
        $numOfTest = count($results);
        $numOfFail = 0;
        $failedResuts = [];
        
        foreach( $results as $result ){
                if( $result["Result"] == "Failed" ) {
                    $numOfFail = $numOfFail + 1 ;
                    array_push($failedResuts, $result);
                }
        }
        
        echo "number of Fails/Tests :: $numOfFail/$numOfTest <br>";
        echo "*****************************************<br>";
        foreach( $failedResuts as $result){
            echo "Test Name :: ".$result['Test Name']."<br>";
            echo "Note :: ".$result['Notes']."<br>";
            echo "Test Datatype/Expected Datatype :: ".$result['Test Datatype']."/".$result['Expected Datatype']."<br>";
            echo "File Name/Line Number :: ".$result['File Name']."/".$result['Line Number']."<br>";
            echo "*****************************************<br>";
        }
        echo "<hr>";
        echo $report;    
    
    }

    

}
