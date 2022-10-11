<?php
    include "inc/object_file.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "inc/style.php"?>
</head>
<body>
<header class="">
   <?php include "inc/menu.php";?>
</header>
<!-- /menu -->
<!--        2nd menu-->
<section class="bg-info mt-3">
    <div class="slider-hr"></div>
</section>


<!--contac section-->
<section class="mt-5">
    <div class="container">
        <div class="row">

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

                    $contactRequest  = $contact->contactRequest($_POST);
                }
            ?>

            <div class="col-md-8">
                <h1 class="text-primary slider-heading mb-0">Contact us</h1><br />
                <p class="mb-5">For general inquiries, interest in broker partnerships, and other questions or comments, please call or fill out the form below.</p>
                <form id="contact-form" method="post" action="" role="form" enctype="multipart/form-data">

                    <div class="messages">
                        <?php
                        if (isset($contactRequest)){
                            echo $contactRequest;
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
                            <div class="col-md-12 form-group">
                                <h5 class="text-muted"><label>I am a / an*</label></h5>
                                <select class="custom-select my-1 mr-sm-2" name="i_am_a">
                                    <option selected>Choose...</option>
                                    <option value="waiting_request_demo">Company Waiting to Request a Demo</option>
                                    <option value="agent_looking_Partner">Agent Looking to Partner</option>
                                    <option value="Agent_submit_certificate">Agent Submitting A Certificate</option>
                                    <option value="non_compliant_notice">Agent With a Question about non-compliant notice</option>
                                    <option value="vendor">Vendor</option>
                                    <option value="asked_register">Company Being Asked to Register</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="estimated">Estimated # of Certificates Being Tracked</label></h5>
                                    <input id="estimated" type="text" name="estimated" class="form-control"  data-error="Lastname is required.">
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
                                    <h5 class="text-muted"><label for="form_message">Message</label></h5>
                                    <textarea id="form_message" name="message" class="form-control"  rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="submit" class="btn btn-info btn-lg mb-5" value="Send message">
                            </div>
                        </div>

                    </div>

                </form>
            </div>
            <div class="col-md-4 bg-contact">
                <div class="row bg-primary">
                    <div class="col-md-12 p-4">
                        <h1 class="text-center text-white">Contact Information</h1>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <h4 class="mt-4 mb-4 text-uppercase font-weight-bold">Phone</h4>
                    </div>
                    <div class="row">
                        <h2 class="text-primary">516-513-0912</h2>
                    </div>
                    <p class="text-muted about-text-1">Sales and demo inquiries dial ext. 114
                        Support inquiries dial ext. 105</p>
                    <div class="row">
                        <h4 class="mt-4 mb-4 text-uppercase font-weight-bold">ADDRESS</h4>
                    </div>
                    <div class="row">
                        <p class="text-muted about-text-1">cartsurance<br>
                            445 N Pennsylvania St<br>
                            Suite #205<br>
                            Indianapolis, IN 46204</p>
                    </div>
                    <div class="row">
                        <a href="#"><h4 class="mt-4 mb-4 text-uppercase font-weight-bold">GET DIRECTIONS</h4></a>
                    </div>
                    <div class="row">
                        <h4 class="mt-4 mb-4 text-uppercase font-weight-bold">EMAIL</h4>
                    </div>
                    <div class="row">
                        <p class="text-muted about-text-1">Sales – <a href="mailto:info@cartsurancetracking.com">info@cartsurancetracking.com</a></p>
                        <p class="text-muted about-text-1">Support – <a href="mailto:support@cartsurancetracking.com">support@cartsurancetracking.com</a></p>
                    </div>
                    <div class="row">
                        <!--Google map-->
                        <div  class="w-75 h-75">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703692693!2d90.27923991057244!3d23.780573258035957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1565547232093!5m2!1sen!2sbd" width="350" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <!--Google Maps-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="slider-hr"></div>




<!-- Footer -->
<footer class="page-footer bg-dark pt-2 pb-4">
    <?php include_once "inc/footer.php";?>

</footer>
<!-- Footer -->

<?php include_once "inc/script.php";?>
</body>
</html>