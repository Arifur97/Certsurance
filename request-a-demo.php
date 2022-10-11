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
                        <h2 class="font-weight-bold text-info">Certificate of Insurance Management Made Easy</h2>
                        <h4 class="pt-3 text-muted">Get a Free Demo of cartsurance’s Certificate of Insurance Tracking and Management Software.y</h4>
                        <p class="text-muted">Experience for yourself why cartsurance is the industry leader for certificate of insurance tracking, compliance and risk management.<br><br>

                            cartsurance is an easy-to-use, cloud-based solution to help you collect, review and accurately track COIs, while ensuring end-to-end compliance. We manage your entire insurance process so you’re free to focus on what you do best… running your business.<br><br>

                            With our innovative technology you’ll be able to…</p>
                    </div>
                </div>
                <div class="col-md-12 pt-3">
                    <ul class="text-muted about-text-1">
                        <li><strong>Increase productivity and efficiency</strong> by saving time spent on certificate tracking by up to 30%.</li>
                        <li><strong>Fully automate COI tracking </strong>so your vendors and partners receive timely communications on missing certificates, compliance issues and renewal reminders.</li>
                        <li><strong>Easily identify insurance risk</strong>  and protect your business from costly litigation with our centralized Certificate Library and online reporting.</li>
                        <li><strong>Streamline and organize</strong> your certificate processing in the fastest and most effective way using our Compliance Manager.</li>
                        <li><strong>Eliminate messy paper trails</strong> by keeping all your certificates and other vital data in our convenient Centralized Hub.</li>
                        <li><strong>Quickly resolve any urgent issues</strong> with our Agent Portal. </li>
                    </ul>
                    <div class="p-5">
                        <img src="images/IntroducingMyCOICentral4_Small-450x335.png">
                    </div>
                </div>
            </div>


<!--            right section-->

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

                    $demoReg  = $demo->demoRequest($_POST);
                }
            ?>



            <div class="col-md-6">
                <p class="mb-5 text-muted">Discover for yourself why more infoful businesses are trusting cartsurance for their certificate of insurance tracking and management. Fill out the form to request a Free Demo.</p>

                <?php
                if (isset($demoReg)){
                    echo $demoReg;
                }
                ?>


                <form id="contact-form" method="post" action="" role="form" enctype="multipart/form-data">

                    <div class="messages"></div>

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
                            <div class="col-md-6 form-group">
                                <h5 class="text-muted"><label>How are you currently tracking certificates? *</label></h5>
                                <select class="custom-select my-1 mr-sm-2" name="currently_tracking">
                                    <option selected>Choose...</option>
                                    <option value="Excel">Excel</option>
                                    <option value="Accountinf_Software">Accountinf Software</option>
                                    <option value="Tracking_Provider">Other Certificate Tracking Provider</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="text-muted"><label> How did you hear about us?</label></h5>
                                    <select class="custom-select my-1 mr-sm-2" name="hear_about_us">
                                        <option selected>Choose...</option>
                                        <option value="Online_Search">Online Search</option>
                                        <option value="Email">Email</option>
                                        <option value="Trade_Show">Trade Show</option>
                                        <option value="Advertisement">Advertisement</option>
                                        <option value="ocial_Media">Social Media</option>
                                        <option value="agent_or_broker">Recommended by agent or broker</option>
                                        <option value="cartsurance_Representative">Spoke with cartsurance Representative</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="m-auto p-5">
                                    <a href=""><button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button></a>
                                </div>
                            </div>
                        </div>
                    </section>

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