<?php include('header.php'); ?>
<?php include('layout.php'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Companies</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Search Companies
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="./new-company.php" class="btn green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th> Company Name </th>
                                                <th> Contact Person Name </th>                                                
                                                <th> Contact Person No. </th>
                                                <th> Contact Person Email ID </th>
                                                <th> Job Openings </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="./company-profile.php"> TCS </a></td>
                                                <td> Alex Nilson </td> 
                                                <td> <a href="tel:7798398684" class="btn btn-sm green"><i class="fa fa-phone"></i> Call now </a> </td>
                                                <td> contact@gmail.com </td>
                                                <td> 24 </td>                                                                                             
                                                <td>           
                                                    <a class="view-Customer" href="./company-profile.php"> <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;</a>                         
                                                    <a class="edit-Company" href="./edit-company.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                    <a class="delete-Company" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->       
<?php include('footer.php'); ?> 
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!-- <script src="./assets/pages/js/table-datatables-editable.min.js" type="text/javascript"></script> -->
    <script src="./assets/pages/js/table-datatables-editable.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->