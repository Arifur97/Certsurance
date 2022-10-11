<?php include '../../classes/Apply.php';?>
<?php
    $apply    = new Apply();
    $fm       = new Format();
?>
<?php
if (isset($_GET['delApply'])){
    $id = preg_replace('/[^-a-zA-Z0-9]/', '', $_GET['delApply']);
    $delApply = $apply->delApplyRequestId($id);
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
                        <h4 class="text-white text-center">Apply List</h4>
                    </div>

                    <?php
                    if (isset($delApply)){
                        echo $delApply;
                    }
                    ?>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="80%" class="table table-bordered" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Apply Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Desired Position</th>
                                <th>CV</th>
                                <th>Insurance Experience</th>
                                <th>Years</th>
                                <th>Team Join</th>
                                <th>Fit Team</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $getApplyRequest = $apply->getAllApplyRequest();
                            if ($getApplyRequest){
                                $i = 0;
                                while ($result = $getApplyRequest->fetch_assoc()){
                                    $i++;
                                    ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $result['apply_name']; ?></td>
                                        <td><?php echo $result['email']; ?></td>
                                        <td><?php echo $result['phone']; ?></td>
                                        <td><?php echo $result['desired_position']; ?></td>
                                        <td><?php echo $result['cv']; ?></td>
                                        <td><?php echo $result['insurance_experience']; ?></td>
                                        <td><?php echo $result['years']; ?></td>
                                        <td><?php echo $result['team_join']; ?></td>
                                        <td><?php echo $result['fit_team']; ?></td>
                                        <td><?php echo $result['message']; ?></td>
                                        <td>Pending</td>
                                        <td><a onclick="return confirm('Are You Sure To Delete!')" href="?delApply=<?php echo $result['id']; ?>">Delete</a></td>
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
