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
                                <a href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Settings
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
                                                <a href="#tab1" data-toggle="tab">Applicants Upload</a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab">Company settings</a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab">Applicants settings</a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab">Users</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <p> &nbsp; </p> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Upload Bulk Applicants</label>
                                                        <input type="file" id="billDetails" class="form-control" placeholder="Upload the bill details" multiple>
                                                    </div>
                                                    <div class="form-actions left">
                                                        <button type="button" id="button-tos" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn blue">
                                                        <i class="fa fa-check"></i> Import</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <p> &nbsp; </p>                                               

                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <p> &nbsp; </p> 
                                                <div class="table-toolbar">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="btn-group">
                                                                <a id="#" class="btn green" data-toggle="modal" href="#edit-location-modal"> Add New
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Company Code </th>
                                                            <th> Company Address </th>                                                
                                                            <th> Company Phone </th>
                                                            <th> Company Email </th>
                                                            <!-- <th> Edit </th> -->
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> NHCHQ1 </td>
                                                            <td> Margao </td> 
                                                            <td> 1234567890 </td>
                                                            <td> support@invictaindia.in </td>                                                                                              
                                                            <!-- <td>
                                                                <a class="edit" href="javascript:;"> Edit </a>
                                                            </td> -->
                                                            <td>                                  
                                                                <a class="edit-location" data-toggle="modal" href="#edit-location-modal"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-location" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <p> &nbsp; </p> 
                                                <div class="table-toolbar">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="btn-group">
                                                                <a id="#" class="btn green" data-toggle="modal" href="#add-user-modal"> Add New
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th> Username </th>
                                                            <th> Full Name </th>
                                                            <th> Email </th>
                                                            <th> User Role </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> alex </td>
                                                            <td> Alex Nilson </td>
                                                            <td> 1234 </td>
                                                            <td class="center"> power user </td>
                                                            <td>
                                                                <a class="edit-user" data-toggle="modal" href="#edit-user-modal"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;</a>
                                                                <a class="delete-user" href="javascript:;"> <i class="fa fa-trash" aria-hidden="true"></i></a>
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
        <div id="edit-user-modal" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Edit the details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                            <form action="#" class="horizontal-form">
                                <div class="form-body">
                                    <!-- <h3 class="form-section">Person Info</h3> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">User name</label>
                                                <input type="text" id="userName" class="form-control" value="Helbin" disabled>
                                                <!-- <span class="help-block"> This is inline help </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Full name</label>
                                                <input type="text" id="userFullName" class="form-control">
                                                <!-- <span class="help-block"> This field has error. </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" id="userEmail" class="form-control">
                                                <!-- <span class="help-block"> This is inline help </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">User Role</label>
                                                <select class="form-control" data-placeholder="Choose a Process" tabindex="1">
                                                    <option value="Category 1">hr</option>
                                                    <option value="Category 2">hr manager</option>
                                                    <option value="Category 3">admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                        <button type="button" class="btn green">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="add-user-modal" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add new user</h4>
                    </div>
                    <div class="modal-body">
                        <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                            <form action="#" class="horizontal-form">
                                <div class="form-body">
                                    <!-- <h3 class="form-section">Person Info</h3> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">User name</label>
                                                <input type="text" id="userName" class="form-control" value="Helbin" disabled>
                                                <!-- <span class="help-block"> This is inline help </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Full name</label>
                                                <input type="text" id="userFullName" class="form-control">
                                                <!-- <span class="help-block"> This field has error. </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" id="userEmail" class="form-control">
                                                <!-- <span class="help-block"> This is inline help </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">User Role</label>
                                                <select class="form-control" data-placeholder="Choose a Process" tabindex="1">
                                                    <option value="Category 1">hr</option>
                                                    <option value="Category 2">hr manager</option>
                                                    <option value="Category 3">admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                        <button type="button" class="btn green">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->       
<?php include('footer.php'); ?> 
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <!-- <script src="./assets/pages/js/table-datatables-editable.min.js" type="text/javascript"></script> -->
    <script src="./assets/pages/js/table-datatables-editable.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->