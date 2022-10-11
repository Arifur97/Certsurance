<?php
$filePath = realpath(dirname(__FILE__));
include_once ($filePath.'/../lib/Database.php');
include_once ($filePath.'/../helpers/Format.php');
?>


<?php
/**
 * Created by PhpStorm.
 * User: ARIFUR RAHMAN KHAN
 * Date: 8/23/2019
 * Time: 9:28 PM
 */

class ClientRegister
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db                   =  new Database();
        $this->fm                   =  new Format();
    }
    public function customerRegistration($data){
        $first_name                         = mysqli_real_escape_string($this->db->link, $data['first_name']);
        $last_name                          = mysqli_real_escape_string($this->db->link, $data['last_name']);
        $company                            = mysqli_real_escape_string($this->db->link, $data['company']);
        $email                              = mysqli_real_escape_string($this->db->link, $data['email']);
        $phone                              = mysqli_real_escape_string($this->db->link, $data['phone']);
        $title                              = mysqli_real_escape_string($this->db->link, $data['title']);
        $industry                           = mysqli_real_escape_string($this->db->link, $data['industry']);
        $password                           = mysqli_real_escape_string($this->db->link, md5($data['password']));
        $confirm_password                   = mysqli_real_escape_string($this->db->link, md5($data['confirm_password']));

        if ($first_name == "" || $last_name == "" || $company == "" || $email == "" || $phone == "" || $title == "" || $industry == "" ||  $password == "" || $confirm_password == ""){
            $msg                    = "<h4 class='text-danger'>Fields Must Not Be Empty!</h4>";
            return $msg;
        }
        $mailQuery = "SELECT * FROM tbl_client WHERE email='$email' LIMIT 1";
        $emailCheck = $this->db->select($mailQuery);
        if ($emailCheck!=false){
            $msg                    = "<h4 class='text-danger'>Email Already Exist!</h4>";
            return $msg;
        }if(strlen($password) < 6) {
            $password_error = "<h4 class='text-danger'>Password must be minimum of 6 characters</h4>";
            return $password_error;
        }
        if($password != $confirm_password) {
            $cpassword_error =  "<h4 class='text-danger'>Password and Confirm Password doesn't matchs</h4>";
            return $cpassword_error;
        } else{
            $query = "INSERT INTO tbl_client(first_name, last_name, company, email, phone, title, industry, password, confirm_password) VALUES('$first_name', '$last_name', '$company', '$email', '$phone', '$title', '$industry', '$password', '$confirm_password')";
            $inserted_row               = $this->db->insert($query);
            if ($inserted_row){
                $msg                    = "<h4 class='text-success'>Customer Data Inserted Successfully !</h4>";
                return $msg;
            }else{
                $msg                    = "<h4 class='text-danger'>Customer Data Not Inserted !</h4>";
                return $msg;
            }
        }
    }
    public function customerLogIn($data){
        $email                          = mysqli_real_escape_string($this->db->link, $data['email']);
        $password                       = mysqli_real_escape_string($this->db->link, md5($data['password']));
        if (empty($email) || empty($password)){
            $msg                        = "<h4 class='text-danger'>Fields Must Not Be Empty!</h4>";
            return $msg;
        }
        $query = "SELECT * FROM tbl_client WHERE email='$email' AND password='$password' ";
        $result = $this->db->select($query);
        if ($result!=false){
            $value = $result->fetch_assoc();
            Session::set("userLogin", true);
            Session::set("userId", $value['first_name']);
            Session::set("userName", $value['last_name ']);
            header('Location:index.php');
        }else{
            $msg                    = "<h4 class='text-danger'>Email or Password Not Matched</h4>";
            return $msg;
        }
    }
    public function getAllRegisterClient(){
        $query                  = "SELECT * FROM tbl_client ORDER BY id DESC";
        $result                 = $this->db->select($query);
        return $result;
    }
    public function delRegisterClientRequestId($id){

        $query = "DELETE FROM tbl_client WHERE id = '$id'";
        $delData = $this->db->delete($query);
        if ($delData){
            $catMsg             = "<h2 class='text-success'>Registered Client Deleted Successfully !</h2>";
            return $catMsg;
        }else{
            $catMsg             = "<h2 class='text-danger'>Registered Client Not Deleted !</h2>";
            return $catMsg;
        }
    }
}