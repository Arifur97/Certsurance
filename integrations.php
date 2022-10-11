<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once "inc/style.php";?>
</head>
<body>
<header class="">
   <?php include_once "inc/menu.php"?>
    <!--        2nd menu-->
    <section class="bg-info mt-5">
       <?php include_once "inc/sub-menu.php";?>
    </section>
</header>
<!-- /menu -->

<!--    fix slider-->
<section class="header p-5">
    <div class="container mt-2">
        <div class="row pt-5 pb-5">
            <div class="col-md-4">
                <img class="d-flex w-100 h-75 mt-5"  src="images/Integration-Icon-Wide-Background.png" alt="First slide">
            </div>
            <div class="col-md-8 mt-5">
                <ul class="text-info integration-text font-weight-bold mt-2">
                    <li><h2 class="integration-text">Streamline your payment processing</h2></li>
                    <li><h2 class="integration-text ">Automate setup of insurance requests</h2></li>
                    <li><h2 class="integration-text ">Keep compliance easily accessible</h2></li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!--    fix slider-->
<section class="p-5" style="background: #f4f3f3;">
    <div class="container">
        <div class="row p-2">
            <p class="text-info about-text">Don’t let insurance compliance slow down your contract signing or payment processing. Our API provides flexibility to seamlessly integrate comprehensive and complete insurance tracking into your current process. Take advantage of one of our pre-built integrations or access our API to connect with any software application.</p>
        </div>
        <div class="row mt-3 pb-5">
            <div class="col-md-4 mr-2 col-sm-12">
                <img class="w-100 mt-4 h-auto" src="images/procore_logo.png">
            </div>
            <div class="col-md-7 col-sm-12 mt-4 float-left">
                <h2 class="text-info">Procore</h2>
                <p class="text-dark line-height about-text-1 mt-4">Procore Technologies, Inc., the world’s number one most widely used construction management software, helps firms drastically increase project efficiency and accountability by streamlining and mobilizing project communication and documentation. Hundreds of thousands of registered Procore users manage all types of construction projects including industrial plants, office buildings, apartment complexes, university facilities, retail centers, and more. <a href="#">Learn More</a></p>
            </div>

            <div class="row">
                <div class="col-md-4 mr-2 col-sm-12">
                    <img class="w-100 mt-4 h-auto" src="images/MRI_Software_Logo-Transparent-Background.png">
                </div>
                <div class="col-md-7 col-sm-12 mt-4 float-left">
                    <h2 class="text-info">MRI Software</h2>
                    <p class="text-dark line-height about-text-1 mt-4">MRI is a global organization with clients on five continents, offering business management software solutions to the global property management industries. As a leading provider of real estate enterprise software applications and hosted solutions, MRI serves the global multifamily and commercial property industries, helping them improve their bottom line and maximize their returns on their diverse business portfolios.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mr-2 col-sm-12">
                    <img class="w-100 mt-4 h-auto" src="images/Sage-Logo-Transparent-Background-Wide.png">
                </div>
                <div class="col-md-7 col-sm-12 mt-4 float-left">
                    <h2 class="text-info">Sage 300</h2>
                    <p class="text-dark line-height about-text-1 mt-4">Sage’s software manages accounting, ERP, HR, payroll, payments, assets, construction, and real estate. Their solutions travel with you or stay where you want them—in the cloud, on-premises, or both—giving you the freedom to work where you need.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mr-2 col-sm-12">
                    <img class="w-100 mt-4 h-auto" src="images/Viewpoint_Company_Logo-Transparent-Background.png">
                </div>
                <div class="col-md-7 col-sm-12 mt-4 float-left">
                    <h2 class="text-info">Vista by Viewpoint</h2>
                    <p class="text-dark line-height about-text-1 mt-4">Vista by Viewpoint enables construction contractors to manage all areas of operations.  Fully integrated. Scalable. Configurable. Featuring solutions for Accounting/HR, Project Management, Project Collaboration, Mobile, Estimating, Content Management and Service Management, Vista scales easily, integrates with many third-party software products and provides timely reporting of critical data.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mr-2 col-sm-12">
                    <img class="w-100 mt-4 h-auto" src="images/And-More-Integration-Icon-Large-background-Wide.png">
                </div>
                <div class="col-md-7 col-sm-12 mt-4 float-left">
                    <h2 class="text-info">Options for Other Software Applications</h2>
                    <p class="text-dark line-height about-text-1 mt-4">Easily keep your insurance compliance up to date in your accounting software by connecting to our API or utilizing our scheduled reports for daily imports. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--    fix slider-->
<!--    caption-->
<section class="bg-dark p-5 h-100">
    <div class="container">
        <div class="row">
            <h3 class="text-center text-info font-weight-bold">
                "As a result of switching providers and partnering with cartsurance, myself and our 11 Contract Administrators are spending about 1 hour of our time each week on insurance compliance versus 1 hour each day."
            </h3>
        </div>
        <div class="row mt-5">
            <div class="col-md-7"></div>
            <div class="col-md-5 text-white">
                <h4 class="text-right">Victoria Pearson</h4>
                <h4 class="text-right">Contract Administrator Manager</h4>
                <h4 class="text-right">Alston Construction</h4>
            </div>
        </div>
    </div>
</section>
<!--    caption-->

<section class="bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="request-a-demo.php" class="text-decoration-none"><button class="btn btn-block text-uppercase"><h4 class="font-weight-bold">Request Demo</h4></button></a>
            </div>
        </div>
    </div>
    <div class="slider-hr"></div>
</section>

<!-- Footer -->
<footer class="page-footer bg-dark pt-2 pb-4">
    <!-- Footer Links -->
    <?php include_once "inc/footer.php";?>

</footer>
<!-- Footer -->
<?php include_once "inc/script.php";?>
</body>
</html>