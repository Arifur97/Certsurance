<?php
    include "inc/object_file.php";
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){

        $customerLogIn  = $clientRegister->customerLogIn($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "inc/style.php";?>
</head>
<body>
<header class="">
    <?php include "inc/menu.php";?>
</header>
<!-- /menu -->
<section class="bg-info mt-3">
    <div class="slider-hr"></div>
</section>
<!--contac section-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <?php
                    if (isset($customerLogIn)){
                        echo $customerLogIn;
                    }
                ?>

                <form class="p-5" action="" method="post">
					<h2 class="text-info mb-4">Sign In</h2>

                    <div class="mb-3">
                        <input class="form-control" type="text" name="email" required placeholder="Emil">
                        <span class=""></span>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" required placeholder="Password">
                        <span class=""></span>
                    </div>

                    <div class="text-right m-3">
						<span class="txt1">Forgot</span>
                        <a href="#" class="">Username / Password?</a>
                    </div>
                    <div class="m-3">
                        <button class="btn btn-info" name="login">Sign in</button>
                    </div>
                    <div class="">
                        <p class="">If you have not Account. Please <a href="client_register.php">Register</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>

<div class="slider-hr"></div>




<!-- Footer -->
<footer class="page-footer bg-dark pt-2 pb-4">
    <!-- Footer Links -->
    <?php include_once "inc/footer.php";?>

</footer>
<!-- Footer -->

<?php include_once "inc/script.php";?>
</body>
</html>