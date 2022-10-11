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
    <?php include_once "inc/menu.php";?>
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

                    $applyRequest  = $apply->applyRequest($_POST, $_FILES);
                }
            ?>

            <div class="col-md-7">
                <h1 class="text-primary slider-heading mb-0">Apply Now</h1><br />
                <p class="mb-5 text-muted about-text-1 w-75">Please fill out the form below, including a PDF of your resume and selecting your position of interest.</p>
                <form id="contact-form" method="post" action="" role="form">

                    <div class="messages">
                        <div class="messages">
                            <?php
                                if (isset($applyRequest)){
                                    echo $applyRequest;
                                }
                            ?>

                        </div>

                    </div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="apply_name">Name *</label></h5>
                                    <input id="apply_name" type="text" name="apply_name" class="form-control" required="required" data-error="Firstname is required.">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_phone">Phone *</label></h5>
                                    <input id="form_phone" type="tel" name="phone" required class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <h5 class="text-muted"><label>Desired Position*</label></h5>
                                <select class="custom-select my-1 mr-sm-2" name="desired_position">
                                    <option selected>Select Position</option>
                                    <option value="Compliance_Coordinator">Compliance Coordinator - Commercial Insurance</option>
                                    <option value="Implementation_Coordinator">Implementation Coordinator</option>
                                    <option value="Implementation_Specialist">Implementation Specialist</option>
                                    <option value="Insurance_Customer_Care">Insurance Customer Care Specialist</option>
                                    <option value="Marketing_Coordinator">Marketing Coordinator</option>
                                    <option value="Senior_.NET_Developer">Senior .NET Developer</option>
                                    <option value="Support_.NET_Developer">Support .NET Developer</option>
                                    <option value="Sales_Account_Executive">Sales Account Executive</option>
                                    <option value="Partner_Account_Executive">Partner Account Executive</option>
                                    <option value="Business_Development_Representative">Business Development Representative</option>
                                    <option value="Junior_.NET_Developer">Junior .NET Developer</option>
                                    <option value="System_Architect">System Architect</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="cv">Upload Resume and Cover Letter *</label></h5>
                                    <input id="cv" type="file" name="cv" required class="form-control pb-5 pt-2">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <h5 class="text-muted"><label>Do you have any commercial insurance experience?*</label></h5>
                                <select class="custom-select my-1 mr-sm-2" name="insurance_experience">
                                    <option selected>-Please Select-</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="years">How many years?</label></h5>
                                    <input id="years" type="text" name="years" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="join">Why do you want to join the myCOI team?*</label></h5>
                                    <input id="join" type="text" name="team_join" class="form-control" required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="fit_team">Why are you the best fit for our team?</label></h5>
                                    <input id="fit_team" type="text" name="fit_team" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5 class="text-muted"><label for="form_message">Comments</label></h5>
                                    <textarea id="form_message" name="message" class="form-control"  rows="4" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="submit" class="btn btn-info font-weight-bold btn-lg mb-5" value="Submit Application">
                            </div>
                        </div>

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