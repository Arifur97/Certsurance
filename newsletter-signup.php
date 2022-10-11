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
    <?php include_once "inc/menu.php"?>
</header>
<!-- /menu -->
<section class="bg-info mt-3">
    <div class="slider-hr"></div>
</section>
<!--contac section-->
<section class="background">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="font-weight-bold text-info">Newsletter Signup</h1>
                        <h4 class="pt-3 text-muted">Insurance Tracking Tips and More!</h4>
                        <p class="text-muted">Signup for our newsletter to join the crowd that is learning how to better protect their organization. Learn:</p>
                    </div>
                </div>
                <div class="col-md-12 pt-3">
                    <ul class="text-muted about-text-1">
                        <li>Industry Best Practices to Reduce Risk</li>
                        <li>How to Make Insurance Tracking Easier</li>
                        <li>Case Studies on Transforming Cert Tracking</li>
                        <li>Insight from Our Top Blogs</li>
                        <li>and more</li>
                    </ul>
                    <div class="p-5">
                        <img src="images/CertificateHubIcon3.svg">
                    </div>
                </div>
            </div>


            <!--            right section-->
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

                    $newslerrer  = $news->newsletter($_POST);
                }
            ?>


            <div class="col-md-6">
                <p class="mb-5 text-muted">Discover for yourself why more infoful businesses are trusting cartsurance for their certificate of insurance tracking and management. Fill out the form to request a Free Demo.</p>
                <form id="contact-form" method="post" action="" role="form">

                    <div class="messages">

                        <?php
                            if (isset($newslerrer)){
                                echo $newslerrer;
                            }
                        ?>

                    </div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_name">First Name *</label></h5>
                                    <input id="form_name" type="text" name="first_name" class="form-control" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_lastname">Last Name *</label></h5>
                                    <input id="form_lastname" type="text" name="last_name" class="form-control" required="required" data-error="Lastname is required.">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_email">Email *</label></h5>
                                    <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
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
                            <div class="col-md-12 form-group">
                                <h5 class="text-muted"><label>What is your biggest challenge with certificate of insurance tracking?*</label></h5>
                                <select class="custom-select my-1 mr-sm-2" name="biggest_challenge">
                                    <option selected>Choose...</option>
                                    <option value="Didn't_enough_time">Too many to handle and I didn't have enough time!</option>
                                    <option value="Language_confuse_me">The endorsements and insurance language confuse me</option>
                                    <option value="Comppliance_issues">Getting compliance issues resolved is difficult</option>
                                    <option value="other">Other</option>
                                </select>
                                <p class="text-info">Please select an option from the dropdown menu.</p>
                            </div>
                        </div>
                        <div class="row pt-3 pb-5">
                            <div class="col-md-12 form-group">
                                <button class="btn btn-info btn-lg" name="submit" type="submit">Submit</button>
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
    <?php include_once "inc/footer.php"?>

</footer>
<!-- Footer -->
<?php include_once "inc/script.php";?>
</body>
</html>