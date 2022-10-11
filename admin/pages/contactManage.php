<?php include '../../classes/Contact.php';?>
<?php
    $contact = new Contact();
    $fm = new Format();
?>
<?php
    if (isset($_GET['delContact'])){
        $id = preg_replace('/[^-a-zA-Z0-9]/', '', $_GET['delContact']);
        $delContact = $contact->delContactRequestId($id);
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
                        <h4 class="text-white text-center">Contact List</h4>
                    </div>

                    <?php
                        if (isset($delContact)){
                            echo $delContact;
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
                                <th>I am A</th>
                                <th>Estimated</th>
                                <th>Title</th>
                                <th>Industry</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $getContactRequest = $contact->getAllContactRequest();
                                    if ($getContactRequest){
                                        $i = 0;
                                        while ($result = $getContactRequest->fetch_assoc()){
                                            $i++;
                                 ?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $result['first_name']; ?></td>
                                            <td><?php echo $result['last_name']; ?></td>
                                            <td><?php echo $result['company']; ?></td>
                                            <td><?php echo $result['email']; ?></td>
                                            <td><?php echo $result['phone']; ?></td>
                                            <td><?php echo $result['i_am_a']; ?></td>
                                            <td><?php echo $result['estimated']; ?></td>
                                            <td><?php echo $result['title']; ?></td>
                                            <td><?php echo $result['industry']; ?></td>
                                            <td><?php echo $result['message']; ?></td>
                                            <td>Pending</td>
                                            <td><a onclick="return confirm('Are You Sure To Delete!')" href="?delContact=<?php echo $result['id']; ?>">Delete</a></td>
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
