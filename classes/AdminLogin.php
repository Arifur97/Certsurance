<?php
    $filePath = realpath(dirname(__FILE__));
    include_once ($filePath.'/../lib/Session.php');
    Session::checkLogin();
    include_once ($filePath.'/../lib/Database.php');
    include_once ($filePath.'/../helpers/Format.php');

//    include '../lib/Session.php';
//    Session::checkLogin();
//    include_once '../lib/Database.php';
//    include_once '../helpers/Format.php';
?>



<?php
/**
 *Admin Login Class
 */
class AdminLogin{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db =  new Database();
        $this->fm =  new Format();
    }

    public function liginAdmin($adminUser,$adminPass){
        $adminUser = $this->fm->validation($adminUser);
        $adminPass = $this->fm->validation($adminPass);

        $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
        $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

        if(empty($adminUser) || empty($adminPass)){
            $loginmsg = "<h4 class='text-danger'>UserName & Password Must Not Be Empty</h4>";
            return $loginmsg;
        }else{
            $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass'";
            $result = $this->db->select($query);
            if ($result != false){
                $value = $result->fetch_assoc();
                Session::set("adminLogin", true);
                Session::set("adminId", $value['adminId']);
                Session::set("adminUser", $value['adminUser']);
                Session::set("adminName", $value['adminName']);
                header('Location:index.php');
            }else{
                $loginmsg = "<h4 class='text-danger'>UserName & Password Not Match</h4>";
                return $loginmsg;
            }
        }
    }
}
?>