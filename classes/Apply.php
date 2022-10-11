<?php

$filePath = realpath(dirname(__FILE__));
include_once ($filePath.'/../lib/Database.php');
include_once ($filePath.'/../helpers/Format.php');

//    include_once '../lib/Database.php';
//    include_once '../helpers/Format.php';
?>

<?php
/**
 * Created by PhpStorm.
 * User: ARIFUR RAHMAN KHAN
 * Date: 8/23/2019
 * Time: 4:55 PM
 */

class Apply
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db                   =  new Database();
        $this->fm                   =  new Format();
    }
    public function applyRequest($data){
        $apply_name                     = mysqli_real_escape_string($this->db->link, $data['apply_name']);
        $email                          = mysqli_real_escape_string($this->db->link, $data['email']);
        $phone                          = mysqli_real_escape_string($this->db->link, $data['phone']);
        $desired_position               = mysqli_real_escape_string($this->db->link, $data['desired_position']);
        $cv                             = mysqli_real_escape_string($this->db->link, $data['cv']);
        $insurance_experience           = mysqli_real_escape_string($this->db->link, $data['insurance_experience']);
        $years                          = mysqli_real_escape_string($this->db->link, $data['years']);
        $team_join                      = mysqli_real_escape_string($this->db->link, $data['team_join']);
        $fit_team                       = mysqli_real_escape_string($this->db->link, $data['fit_team']);
        $message                        = mysqli_real_escape_string($this->db->link, $data['message']);

        if ($apply_name == "" || $email == "" || $phone == "" || $desired_position == "" || $cv == "" || $insurance_experience == "" || $years == "" || $team_join == "" || $fit_team == "" || $message == "" ){
            $msg                    = "<h2 class='text-danger'>Fields Must Not Be Empty!</h2>";
            return $msg;
        }
        $mailQuery = "SELECT * FROM tbl_apply WHERE email='$email' LIMIT 1";
        $emailCheck = $this->db->select($mailQuery);
        if ($emailCheck!=false){
            $msg                    = "<h2 class='text-danger'>Email Already Exist!</h2>";
            return $msg;
        }else{
            $query = "INSERT INTO tbl_apply(apply_name, email, phone, desired_position, cv, insurance_experience, years, team_join, fit_team, message) VALUES('$apply_name', '$email', '$phone', '$desired_position', '$cv', '$insurance_experience', '$years', '$team_join', '$fit_team', '$message' )";
            $inserted_row               = $this->db->insert($query);
            if ($inserted_row){
                $msg                    = "<h2 class='text-success'>Apply Request Inserted Successfully !</h2>";
                return $msg;
            }else{
                $msg                    = "<h2 class='text-danger'>Apply Request Not Inserted !</h2>";
                return $msg;
            }
        }
    }

    public function getAllApplyRequest(){
        $query                  = "SELECT * FROM tbl_apply ORDER BY id DESC";
        $result                 = $this->db->select($query);
        return $result;
    }
    public function delApplyRequestId($id){

        $query = "DELETE FROM tbl_apply WHERE id = '$id'";
        $delData = $this->db->delete($query);
        if ($delData){
            $catMsg             = "<h2 class='text-success'>Apply Request Deleted Successfully !</h2>";
            return $catMsg;
        }else{
            $catMsg             = "<h2 class='text-danger'>Apply Request Not Deleted !</h2>";
            return $catMsg;
        }
    }

}