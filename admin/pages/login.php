<?php
include "inc/style.php";
?>

<?php include "../../classes/AdminLogin.php";?>
<?php

    $al = new AdminLogin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $adminUser = $_POST['adminUser'];
        $adminPass = md5($_POST['adminPass']);

        $loginCheck = $al->liginAdmin($adminUser,$adminPass);
    }

?>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Sign In</h3>
                    </div>
                    <?php
                    if (isset($loginCheck)){
                        echo $loginCheck;
                    }
                    ?>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="adminUser" required type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="adminPass" required type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
<!--                                <a href="index.php" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <input type="submit" value="Login" class="btn btn-lg btn-info btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
