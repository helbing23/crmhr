<?php include('header.php'); ?>
<link href="./assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
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
                                <a href="#">Applicant Profile</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Applicant Profile
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="./assets/pages/img/profile_user.jpg" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Alex Nilson </div>
                                        <div class="profile-usertitle-job"> Software Developer </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <a href="./edit-applicant.php" class="btn btn-circle red btn-sm">Edit</a>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="#"><i class="icon-home"></i> Overview </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light ">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 4 </div>
                                            <div class="uppercase profile-stat-text"> Active </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 5 </div>
                                            <div class="uppercase profile-stat-text"> Closed </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 9 </div>
                                            <div class="uppercase profile-stat-text"> Total </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class="profile-desc-title">About</h4>
                                        <span class="profile-desc-text"> Cover letter information</span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-phone"></i>
                                            <a href="tel:7789398684">+91 7789398684</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-envelope"></i>
                                            <a href="mail-to:name@gmail.com">name@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN PORTLET -->
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">POSITIONS APPLIED</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row list-separated">
                                                    <div class="col-md-12">
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
                                                                <th> Status </th>
                                                                <th> Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> <a href="./job-profile.php"> Full stack developer </a></td>
                                                                <td> Full-time </td> 
                                                                <td><a href="./company-profile.php"> TCS </a></td>
                                                                <td> Bangalore </td>
                                                                <td> 0 - 1 years</td>
                                                                <td> Not Disclosed </td>
                                                                <td> Delvin </td>
                                                                <td> Open </td>                                                                                             
                                                                <td>           
                                                                    <a class="view-Job" href="./job-profile.php"> <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET -->
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
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