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
 * Time: 8:02 PM
 */

class Newsletter
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db                   =  new Database();
        $this->fm                   =  new Format();
    }
    public function newsletter($data){
        $first_name                         = mysqli_real_escape_string($this->db->link, $data['first_name']);
        $last_name                          = mysqli_real_escape_string($this->db->link, $data['last_name']);
        $company                            = mysqli_real_escape_string($this->db->link, $data['company']);
        $email                              = mysqli_real_escape_string($this->db->link, $data['email']);
        $title                              = mysqli_real_escape_string($this->db->link, $data['title']);
        $industry                           = mysqli_real_escape_string($this->db->link, $data['industry']);
        $biggest_challenge                 = mysqli_real_escape_string($this->db->link, $data['biggest_challenge']);

        if ($first_name == "" || $last_name == "" || $company == "" || $email == "" || $title == "" || $industry == "" || $biggest_challenge == ""){
            $msg                    = "<h2 class='text-danger'>Fields Must Not Be Empty!</h2>";
            return $msg;
        }
        $mailQuery = "SELECT * FROM tbl_newsletter WHERE email='$email' LIMIT 1";
        $emailCheck = $this->db->select($mailQuery);
        if ($emailCheck!=false){
            $msg                    = "<h2 class='text-danger'>Email Already Exist!</h2>";
            return $msg;
        }else{
            $query = "INSERT INTO tbl_newsletter(first_name, last_name, company, email, title, industry, biggest_challenge) VALUES('$first_name', '$last_name', '$company', '$email', '$title', '$industry', '$biggest_challenge')";
            $inserted_row               = $this->db->insert($query);
            if ($inserted_row){
                $msg                    = "<h2 class='text-success'>Newsletter Inserted Successfully !</h2>";
                return $msg;
            }else{
                $msg                    = "<h2 class='text-danger'>Newsletter Not Inserted !</h2>";
                return $msg;
            }
        }
    }

    public function getAllNewsletterRequest(){
        $query                  = "SELECT * FROM tbl_newsletter ORDER BY id DESC";
        $result                 = $this->db->select($query);
        return $result;
    }
    public function delNewsletterRequestId($id){

        $query = "DELETE FROM tbl_newsletter WHERE id = '$id'";
        $delData = $this->db->delete($query);
        if ($delData){
            $catMsg             = "<h2 class='text-success'>Newsletter Deleted Successfully !</h2>";
            return $catMsg;
        }else{
            $catMsg             = "<h2 class='text-danger'>Newsletter Not Deleted !</h2>";
            return $catMsg;
        }
    }
}