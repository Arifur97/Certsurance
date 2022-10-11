<?php
    include "inc/object_file.php";
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
<section class="mt-5">
    <div class="container">
        <div class="row">

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){

                    $customerReg  = $clientRegister->customerRegistration($_POST);
                }
            ?>

            <div class="col-md-8">
                <h1 class="text-primary slider-heading mb-0">Register</h1><br />
                <p class="mb-5">Please Fill This form Properly & Beign Part of our service</p>
                <form id="contact-form" method="post" action="" role="form" enctype="multipart/form-data">

                    <div class="messages">
                        <?php
                            if (isset($customerReg)){
                                echo $customerReg;
                            }
                        ?>
                    </div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="first_name">First Name *</label></h5>
                                    <input id="first_name" type="text" name="first_name" class="form-control" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="last_name">Last Name *</label></h5>
                                    <input id="last_name" type="text" name="last_name" class="form-control" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="company">Company *</label></h5>
                                    <input id="company" type="text" name="company" class="form-control" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_email">Email *</label></h5>
                                    <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_phone">Phone *</label></h5>
                                    <input id="form_phone" type="tel" name="phone" required class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="title">Title *</label></h5>
                                    <input id="title" type="text" name="title" class="form-control" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="industry">Industry *</label></h5>
                                    <input id="industry" type="text" name="industry" required class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="password">Possword</label></h5>
                                    <input id="password" name="password" type="password" class="form-control" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="confirm_password">Confirm Possword</label></h5>
                                    <input id="confirm_password" type="password" name="confirm_password" class="form-control" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="register" class="btn btn-info btn-lg mb-5" value="Send message">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p style="color: black;margin-left: 10px;margin-right: 10px;">Current Member?<a href="client_login.php">Login Now</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
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
