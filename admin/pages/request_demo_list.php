<?php include '../../classes/DemoRequest.php';?>
<?php
$demo       = new DemoRequest();
$fm         = new Format();
?>
<?php
if (isset($_GET['delDemo'])){
    $id = preg_replace('/[^-a-zA-Z0-9]/', '', $_GET['delDemo']);
    $deldemo = $demo->delDemoRequestId($id);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "include/style.php";?>

</head>

<body>

<div id="wrapper">
    <?php include "include/header.php"?>
    <?php include "include/menu.php";?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!--                <h1 class="page-header">Tables</h1>-->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-body">
                    <div class="col-lg-12 panel-heading center-block bg-primary">
                        <h4 class="text-white text-center">Request Demo List</h4>
                    </div>

                    <?php
                    if (isset($deldemo)){
                        echo $deldemo;
                    }
                    ?>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="80%" class="table table-bordered" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Estimated</th>
                                <th>Title</th>
                                <th>Industry</th>
                                <th>Currently Tracking</th>
                                <th>Hear About Us</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $getDemoRequest = $demo->getAllDemoRequest();
                                    if ($getDemoRequest){
                                        $i = 0;
                                        while ($result = $getDemoRequest->fetch_assoc()){
                                            $i++;
                            ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $result['first_name']; ?></td>
                                        <td><?php echo $result['last_name']; ?></td>
                                        <td><?php echo $result['company']; ?></td>
                                        <td><?php echo $result['email']; ?></td>
                                        <td><?php echo $result['phone']; ?></td>
                                        <td><?php echo $result['estimated']; ?></td>
                                        <td><?php echo $result['title']; ?></td>
                                        <td><?php echo $result['industry']; ?></td>
                                        <td><?php echo $result['currently_tracking']; ?></td>
                                        <td><?php echo $result['hear_about_us']; ?></td>
                                        <td>Pending</td>
                                        <td><a onclick="return confirm('Are You Sure To Delete!')" href="?delDemo=<?php echo $result['id']; ?>">Delete</a></td>
                                    </tr>


                                <?php } } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "include/script.php";?>

</body>

</html>
