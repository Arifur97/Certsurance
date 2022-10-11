<?php

    $filePath = realpath(dirname(__FILE__));
    include_once ($filePath.'/../lib/Database.php');
    include_once ($filePath.'/../helpers/Format.php');

//    include_once '../lib/Database.php';
//    include_once '../helpers/Format.php';
?>

<?php
    class DemoRequest
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db                   =  new Database();
            $this->fm                   =  new Format();
        }
        public function demoRequest($data){
            $first_name                         = mysqli_real_escape_string($this->db->link, $data['first_name']);
            $last_name                          = mysqli_real_escape_string($this->db->link, $data['last_name']);
            $company                            = mysqli_real_escape_string($this->db->link, $data['company']);
            $email                              = mysqli_real_escape_string($this->db->link, $data['email']);
            $phone                              = mysqli_real_escape_string($this->db->link, $data['phone']);
            $estimated                          = mysqli_real_escape_string($this->db->link, $data['estimated']);
            $title                              = mysqli_real_escape_string($this->db->link, $data['title']);
            $industry                           = mysqli_real_escape_string($this->db->link, $data['industry']);
            $currently_tracking                 = mysqli_real_escape_string($this->db->link, $data['currently_tracking']);
            $hear_about_us                      = mysqli_real_escape_string($this->db->link, $data['hear_about_us']);

            if ($first_name == "" || $last_name == "" || $company == "" || $email == "" || $phone == "" || $estimated == "" || $title == "" || $industry == "" || $currently_tracking == "" || $hear_about_us == ""){
                $msg                    = "<h2 class='text-danger'>Fields Must Not Be Empty!</h2>";
                return $msg;
            }
            $mailQuery = "SELECT * FROM tbl_request_demo WHERE email='$email' LIMIT 1";
            $emailCheck = $this->db->select($mailQuery);
            if ($emailCheck!=false){
                $msg                    = "<h2 class='text-danger'>Email Already Exist!</h2>";
                return $msg;
            }else{
                $query = "INSERT INTO tbl_request_demo(first_name, last_name, company, email, phone, estimated, title, industry, currently_tracking, hear_about_us) VALUES('$first_name', '$last_name', '$company', '$email', '$phone', '$estimated', '$title', '$industry', '$currently_tracking', '$hear_about_us')";
                $inserted_row               = $this->db->insert($query);
                if ($inserted_row){
                    $msg                    = "<h2 class='text-success'>Request Demo Inserted Successfully !</h2>";
                    return $msg;
                }else{
                    $msg                    = "<h2 class='text-danger'>Request Demo Not Inserted !</h2>";
                    return $msg;
                }
            }
        }

        public function getAllDemoRequest(){
            $query                  = "SELECT * FROM tbl_request_demo ORDER BY id DESC";
            $result                 = $this->db->select($query);
            return $result;
        }
        public function delDemoRequestId($id){

            $query = "DELETE FROM tbl_request_demo WHERE id = '$id'";
            $delData = $this->db->delete($query);
            if ($delData){
                $catMsg             = "<h2 class='text-success'>Request Demo Deleted Successfully !</h2>";
                return $catMsg;
            }else{
                $catMsg             = "<h2 class='text-danger'>Request Demo Not Deleted !</h2>";
                return $catMsg;
            }
        }




//        public function customerLogIn($data){
//            $email                      = mysqli_real_escape_string($this->db->link, $data['email']);
//            $pass                       = mysqli_real_escape_string($this->db->link, md5($data['password']));
//            if (empty($email) || empty($pass)){
//                $msg                    = "<span class='error'>Fields Must Not Be Empty!</span>";
//                return $msg;
//            }
//            $query = "SELECT * FROM tbl_customer WHERE email='$email' AND pass='$pass' ";
//            $result = $this->db->select($query);
//            if ($result!=false){
//                $value = $result->fetch_assoc();
//                Session::set("cmrLogin", true);
//                Session::set("cmrId", $value['id']);
//                Session::set("cmrName", $value['name']);
//                header('Location:cart.php');
//            }else{
//                $msg                    = "<span class='error'>Email or Password Not Matched</span>";
//                return $msg;
//            }
//        }
//        public function getCustomerData($id){
//            $query                      = "SELECT * FROM tbl_customer WHERE id = '$id'";
//            $result = $this->db->select($query);
//            return $result;
//        }
//        public function updateCustomer($data, $cmrId){
//            $name                       = mysqli_real_escape_string($this->db->link, $data['name']);
//            $email                      = mysqli_real_escape_string($this->db->link, $data['email']);
//           // $pass                       = mysqli_real_escape_string($this->db->link, md5($data['password']));
//            $telephone                  = mysqli_real_escape_string($this->db->link, $data['telephone']);
//            $mobile                     = mysqli_real_escape_string($this->db->link, $data['mobile']);
//            $address                    = mysqli_real_escape_string($this->db->link, $data['address']);
//            $postal                     = mysqli_real_escape_string($this->db->link, $data['postal']);
//            $country                    = mysqli_real_escape_string($this->db->link, $data['country']);
//            $city                       = mysqli_real_escape_string($this->db->link, $data['city']);
//
//            if ($name == "" || $email == "" || $telephone == "" || $mobile == "" || $address == "" || $postal == "" || $country == "" || $city == ""){
//                $msg                    = "<span class='error'>Fields Must Not Be Empty!</span>";
//                return $msg;
//            } else{
//                $query              = "UPDATE tbl_customer
//                      SET
//                      name          = '$name',
//                      email         = '$email',
//                      telephone     = '$telephone',
//                      mobile        = '$mobile',
//                      address       = '$address',
//                      postal        = '$postal',
//                      country       = '$country',
//                      city          = '$city'
//                      WHERE id      = '$cmrId'";
//                $updated_row = $this->db->update($query);
//                if ($updated_row){
//                    $catMsg         = "<span class='success'>DemoRequest Data Updated Successfully !</span>";
//                    return $catMsg;
//                }else{
//                    $catMsg         = "<span class='error'>DemoRequest Data Not Updated !</span>";
//                    return $catMsg;
//                }
//            }
//        }
//        public function getCustomerDetails($id){
//            $query                      = "SELECT * FROM tbl_customer WHERE id = '$id'";
//            $result = $this->db->select($query);
//            return $result;
//        }
}