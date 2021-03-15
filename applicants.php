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
                                <a href="#">Applicants</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Applicants
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                <div class="tabbable tabbable-tabdrop">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab1" data-toggle="tab">All</a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab">Linkedin</a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab">Monster</a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab">Indeed</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <p> &nbsp; </p> 
                                                <div class="table-toolbar">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="btn-group">
                                                                <a id="#" class="btn green" data-toggle="modal" href="./new-applicant.php"> Add New
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Applicant</th>
                                                            <th> Position Applied </th>                                    
                                                            <th> Company </th>
                                                            <th> Applied on </th>
                                                            <th> Date </th>
                                                            <th> Preview CV </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td><a href="./applicant-profile.php"> Alex </a></td>
                                                            <td> 3D Designer </td> 
                                                            <td> <a href="./company-profile.php"> TCS </a></td>
                                                            <td> Career page </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/sample-cv.pdf">Alex cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="./applicant-profile.php"> Raghu </a></td>
                                                            <td> Web developer </td> 
                                                            <td> <a href="./company-profile.php"> Infoys </a></td>
                                                            <td> Linkedin </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/doc-cv.docx">Raghu cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="./applicant-profile.php"> John Doe </a></td>
                                                            <td> 3D Designer </td> 
                                                            <td> <a href="./company-profile.php"> TCS </a></td>
                                                            <td> Monster </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/sample-cv.pdf">John cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <td><a href="./applicant-profile.php"> Ravi </a></td>
                                                            <td> Front office Executive </td> 
                                                            <td> <a href="./company-profile.php"> Planet Hollywood </a></td>
                                                            <td> Indeed </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/sample-cv.pdf">Alex cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <p> &nbsp; </p>                                               
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Applicant</th>
                                                            <th> Position Applied </th>                                    
                                                            <th> Company </th>
                                                            <th> Applied on </th>
                                                            <th> Date </th>
                                                            <th> Preview CV </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="./applicant-profile.php"> Raghu </a></td>
                                                            <td> Web developer </td> 
                                                            <td><a href=""></a> Infoys </td>
                                                            <td> Linkedin </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/doc-cv.docx">Raghu cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <p> &nbsp; </p> 
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Applicant</th>
                                                            <th> Position Applied </th>                                    
                                                            <th> Company </th>
                                                            <th> Applied on </th>
                                                            <th> Date </th>
                                                            <th> Preview CV </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="./applicant-profile.php"> John Doe </a></td>
                                                            <td> 3D Designer </td> 
                                                            <td><a href=""></a> TCS </td>
                                                            <td> Monster </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/sample-cv.pdf">John cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <p> &nbsp; </p> 
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Applicant</th>
                                                            <th> Position Applied </th>                                    
                                                            <th> Company </th>
                                                            <th> Applied on </th>
                                                            <th> Date </th>
                                                            <th> Preview CV </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td><a href="./applicant-profile.php"> Ravi </a></td>
                                                            <td> Front office Executive </td> 
                                                            <td> <a href="./company-profile.php">Planet Hollywood </a></td>
                                                            <td> Indeed </td>
                                                            <td> 11-06-2020 </td> 
                                                            <td> <a href="./assets/pages/cv/sample-cv.pdf">Alex cv</a> </td>
                                                            <td>                                  
                                                                <a class="edit-applicant" href="./edit-applicant.php"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    
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