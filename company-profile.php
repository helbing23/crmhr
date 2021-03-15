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
                                <a href="#">Company Profile</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Company Profile
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
                                        <img src="./assets/pages/img/tcs-logo.jpg" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Tata Consultancy Services </div>
                                        <div class="profile-usertitle-job"> Information Technology & Services </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <a href="./edit-company.php" class="btn btn-circle red btn-sm">Edit</a>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="./company-profile.php">
                                                    <i class="icon-home"></i> Overview </a>
                                            </li>
                                            <li>
                                                <a href="./job-openings.php">
                                                    <i class="icon-briefcase"></i> Jobs </a>
                                            </li>
                                            <li>
                                                <a href="./applicants.php">
                                                    <i class="icon-users"></i> Applicants </a>
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
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> Active </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> Closed </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> Total </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class="profile-desc-title">About TCS</h4>
                                        <span class="profile-desc-text"> #ExperienceTCS, one of the top three most valuable IT services and consulting organizations globally, with a market capitalization of $100+B. America and Canada represent more than 50 percent of TCS’ $20+B revenue. Our clients include one-third of the Fortune 500 across all major industries. TCS has 425,000+ IT professionals trained to guide enterprises through their Business 4.0™ growth and transformation journeys – helping them to become agile, intelligent, automated, and on the cloud.</span>
                                        <div class="margin-top-20 profile-desc-link">
                                        <h4 class="profile-desc-title">Piyush Dongre</h4>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-linkedin"></i>
                                            <a href="http://www.linkedin.com/in/piyush-dongre-b2149713">linkedin.com/in/piyush-dongre-b2149713</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.tcs.com">www.tcs.com</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- BEGIN PORTLET -->
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Job Openings</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab"> Open </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab"> On-hold </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab"> Closed </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_4" data-toggle="tab"> Withdrawed </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <!--BEGIN TABS-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th> Title </th>
                                                                        <th> Type </th>
                                                                        <th> Location </th>
                                                                        <th> Date</th>
                                                                        <th class="center">  </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Fullstack Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Bangalore </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">14</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">3D Desinger</a>
                                                                    </td>
                                                                    <td> Part-time </td>
                                                                    <td> South-goa </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">2</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Graphic Designer</a>
                                                                    </td>
                                                                    <td> Permanent </td>
                                                                    <td> Pune </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">24</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Software Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Mumbai </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">34</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th> Title </th>
                                                                        <th> Type </th>
                                                                        <th> Location </th>
                                                                        <th> Date</th>
                                                                        <th class="center">  </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Fullstack Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Bangalore </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">14</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">3D Desinger</a>
                                                                    </td>
                                                                    <td> Part-time </td>
                                                                    <td> South-goa </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">2</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Graphic Designer</a>
                                                                    </td>
                                                                    <td> Permanent </td>
                                                                    <td> Pune </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">24</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Software Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Mumbai </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">34</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th> Title </th>
                                                                        <th> Type </th>
                                                                        <th> Location </th>
                                                                        <th> Date</th>
                                                                        <th class="center">  </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Fullstack Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Bangalore </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">56</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">3D Desinger</a>
                                                                    </td>
                                                                    <td> Part-time </td>
                                                                    <td> South-goa </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">2</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Graphic Designer</a>
                                                                    </td>
                                                                    <td> Permanent </td>
                                                                    <td> Pune </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">24</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Software Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Mumbai </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">34</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_4">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th> Title </th>
                                                                        <th> Type </th>
                                                                        <th> Location </th>
                                                                        <th> Date</th>
                                                                        <th class="center">  </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Fullstack Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Bangalore </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">14</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">3D Desinger</a>
                                                                    </td>
                                                                    <td> Part-time </td>
                                                                    <td> South-goa </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">2</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Graphic Designer</a>
                                                                    </td>
                                                                    <td> Permanent </td>
                                                                    <td> Pune </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">24</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="./job-profile.php" class="primary-link">Software Developer</a>
                                                                    </td>
                                                                    <td> Full time </td>
                                                                    <td> Mumbai </td>
                                                                    <td colspan="2"> 11-06-2020 </td>
                                                                    <td> <a href="./applicants">34</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END TABS-->
                                            </div>
                                        </div>
                                        <!-- END PORTLET -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- BEGIN PORTLET -->
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Applicants assigned</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_5" data-toggle="tab"> Closed </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_6" data-toggle="tab"> In-process </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_7" data-toggle="tab"> On-hold </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_8" data-toggle="tab"> Rejected </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <!--BEGIN TABS-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_5">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th colspan="2"> Name </th>
                                                                        <th> Applied post </th>
                                                                        <th> Date </th>
                                                                        <th> Preview CV </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar1.jpg"> </td>
                                                                    <td>
                                                                        <a href="./applicant-profile.php" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar2.jpg"> </td>
                                                                    <td>
                                                                        <a href="./applicant-profile.php" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar3.jpg"> </td>
                                                                    <td>
                                                                        <a href="./applicant-profile.php" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar4.jpg"> </td>
                                                                    <td>
                                                                        <a href="./applicant-profile.php" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_6">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th colspan="2"> Name </th>
                                                                        <th> Applied post </th>
                                                                        <th> Date </th>
                                                                        <th> Preview CV </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar1.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Software developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar2.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Software developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar3.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Software developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar4.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Software developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_7">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th colspan="2"> Name </th>
                                                                        <th> Applied post </th>
                                                                        <th> Date </th>
                                                                        <th> Preview CV </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar1.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar2.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar3.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar4.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_8">
                                                        <div class="table-scrollable table-scrollable-borderless">
                                                            <table class="table table-hover table-light">
                                                                <thead>
                                                                    <tr class="uppercase">
                                                                        <th colspan="2"> Name </th>
                                                                        <th> Applied post </th>
                                                                        <th> Date </th>
                                                                        <th> Preview CV </th>                                                           
                                                                    </tr>
                                                                </thead>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar2.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar3.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar4.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fit">
                                                                        <img class="user-pic" src="./assets/pages/img/avatar1.jpg"> </td>
                                                                    <td>
                                                                        <a href="javascript:;" class="primary-link">Brain</a>
                                                                    </td>
                                                                    <td> Full stack developer </td>
                                                                    <td> 11-06-2020 </td>
                                                                    <td> <a href="./assets/pages/cv/doc-cv.docx">Brain cv</a> </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END TABS-->
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