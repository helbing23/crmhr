<?php include('header.php'); ?>
<style>
thead input {
        width: 30%;
    }
</style>
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
                                <a href="#">Job Openings</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Job Openings
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
                                    <table class="table table-striped table-hover table-bordered" id="sample_4">
                                        <thead>
                                            <tr>
                                                <th> Job Title </th>
                                                <th> Job Type </th>                                                
                                                <th> Company </th>
                                                <th> Location </th>
                                                <th> Experience </th>
                                                <th> Salary </th>
                                                <th> Recruiter </th>
                                                <th> Applications </th>
                                                <th> Status </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot style="display: table-header-group;">
                                            <tr>
                                                <th> Job Title </th>
                                                <th> Job Type </th>                                                
                                                <th> Company </th>
                                                <th> Location </th>
                                                <th> Recruiter </th>
                                                <th class="display:none"></th>
                                                <th> Status </th>
                                                <th></th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                            <tr>
                                                <td> <a href="./job-profile.php"> Full stack developer </a></td>
                                                <td> Full-time </td> 
                                                <td><a href="./company-profile.php"> TCS </a></td>
                                                <td> Bangalore </td>
                                                <td> 0 - 1 years</td>
                                                <td> Not Disclosed </td>
                                                <td> Delvin </td>
                                                <td><a href="./applicants.php"> 14 </a></td>
                                                <td> Open </td>                                                                                             
                                                <td>           
                                                    <a class="view-Job" href="./job-profile.php"> <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;</a>                         
                                                    <a class="edit-opening" href="./edit-opening.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
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
    <script src="./assets/pages/js/table-datatables-managed.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->