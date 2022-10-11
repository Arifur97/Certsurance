<?php

$filePath = realpath(dirname(__FILE__));
include_once ($filePath.'/../lib/Database.php');
include_once ($filePath.'/../helpers/Format.php');

//    include_once '../lib/Database.php';
//    include_once '../helpers/Format.php';
?>
<?php
class Contact
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db                   =  new Database();
        $this->fm                   =  new Format();
    }
    public function contactRequest($data){
        $first_name                         = mysqli_real_escape_string($this->db->link, $data['first_name']);
        $last_name                          = mysqli_real_escape_string($this->db->link, $data['last_name']);
        $company                            = mysqli_real_escape_string($this->db->link, $data['company']);
        $email                              = mysqli_real_escape_string($this->db->link, $data['email']);
        $phone                              = mysqli_real_escape_string($this->db->link, $data['phone']);
        $i_am_a                             = mysqli_real_escape_string($this->db->link, $data['i_am_a']);
        $estimated                          = mysqli_real_escape_string($this->db->link, $data['estimated']);
        $title                              = mysqli_real_escape_string($this->db->link, $data['title']);
        $industry                           = mysqli_real_escape_string($this->db->link, $data['industry']);
        $message                            = mysqli_real_escape_string($this->db->link, $data['message']);

        if ($first_name == "" || $last_name == "" || $company == "" || $email == "" || $phone == "" || $i_am_a == "" || $estimated == "" || $title == "" || $industry == "" || $message == "" ){
            $msg                    = "<h2 class='text-danger'>Fields Must Not Be Empty!</h2>";
            return $msg;
        }
        $mailQuery = "SELECT * FROM tbl_contact WHERE email='$email' LIMIT 1";
        $emailCheck = $this->db->select($mailQuery);
        if ($emailCheck!=false){
            $msg                    = "<h2 class='text-danger'>Email Already Exist!</h2>";
            return $msg;
        }else{
            $query = "INSERT INTO tbl_contact(first_name, last_name, company, email, phone, i_am_a, estimated, title, industry, message) VALUES('$first_name', '$last_name', '$company', '$email', '$phone', '$i_am_a', '$estimated', '$title', '$industry', '$message' )";
            $inserted_row               = $this->db->insert($query);
            if ($inserted_row){
                $msg                    = "<h2 class='text-success'>Contact Request Inserted Successfully !</h2>";
                return $msg;
            }else{
                $msg                    = "<h2 class='text-danger'>Contact Request Not Inserted !</h2>";
                return $msg;
            }
        }
    }

    public function getAllContactRequest(){
        $query                  = "SELECT * FROM tbl_contact ORDER BY id DESC";
        $result                 = $this->db->select($query);
        return $result;
    }
    public function delContactRequestId($id){

        $query = "DELETE FROM tbl_contact WHERE id = '$id'";
        $delData = $this->db->delete($query);
        if ($delData){
            $catMsg             = "<h2 class='text-success'>Contact Request Deleted Successfully !</h2>";
            return $catMsg;
        }else{
            $catMsg             = "<h2 class='text-danger'>Contact Request Not Deleted !</h2>";
            return $catMsg;
        }
    }


}