<?php include('header.php'); ?>
<link href="./assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
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
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>
                        <!-- <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Dashboard
                        <!-- <small>blank page layout</small> -->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row widget-row">
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="padding: 15px;">
                                <h4 class="widget-thumb-heading">Daily Expensess</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green icon-clock"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">USD</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="padding: 15px;">
                                <h4 class="widget-thumb-heading">Weekly Expenses</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red icon-layers"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">USD</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="padding: 15px;">
                                <h4 class="widget-thumb-heading">Average Monthly Expenses</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-purple icon-pie-chart"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">USD</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered" style="padding: 15px;">
                                <h4 class="widget-thumb-heading">Total Expenses</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">USD</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="btn-group">
                                                    <button id="#" class="btn green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>                                           
                                            <div class="col-md-2 pull-right">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                        <li>
                                                            <a href="javascript:;" data-action="0" class="tool-action">
                                                            <i class="icon-printer"></i> Print</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" data-action="1" class="tool-action">
                                                            <i class="icon-check"></i> Copy</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" data-action="2" class="tool-action">
                                                            <i class="icon-doc"></i> PDF</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" data-action="3" class="tool-action">
                                                            <i class="icon-paper-clip"></i> Excel</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" data-action="4" class="tool-action">
                                                            <i class="icon-cloud-upload"></i> CSV</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-table">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Process</label>
                                                <select class="form-control input-small" data-placeholder="Choose a Process" tabindex="1">
                                                    <option value="Category 1">UK</option>
                                                    <option value="Category 2">USA</option>
                                                    <option value="Category 3">CANADA</option>
                                                    <option value="Category 4">DOMESTIC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Category</label>
                                                <select class="form-control input-small" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">Utilities</option>
                                                    <option value="Category 2">Grocery</option>
                                                    <option value="Category 3">Supplies</option>
                                                    <option value="Category 4">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">User</label>
                                                <select class="form-control input-small" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">Username1</option>
                                                    <option value="Category 2">Username2</option>
                                                    <option value="Category 3">Username3</option>
                                                    <option value="Category 4">Username4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="help-block"> Select date range to search </span>
                                            <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy" style="display:inline-flex;">
                                                <input type="text" class="form-control" name="from">
                                                <span class="input-group-addon" style="line-height:unset; padding-right:20px"> to &nbsp;</span>
                                                <input type="text" class="form-control" name="to"> &nbsp;
                                                <button id="#" class="btn green"><i class="fa fa-search"></i> Search </button>
                                            </div>                                                   
                                            <!-- /input-group -->
                                             
                                        </div>        
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="dashboard_editable">
                                        <thead>
                                            <tr>
                                                <th class="hidden-lg hidden-md hidden-xs">ID</th>
                                                <th> User </th>
                                                <th> Expense </th>
                                                <th> Process </th>
                                                <th> Category </th>
                                                <th> Amount </th>
                                                <th> Bill details </th>
                                                <th> Date </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hidden-lg hidden-md hidden-xs"> id-value </td>
                                                <td class="center"> Username </td>
                                                <td> expense </td>
                                                <td> process name </td>
                                                <td> category </td>
                                                <td> amount </td>
                                                <td><a href="./assets/pages/img/Invicta.png">Imagename</a></td>
                                                <!-- <td>Imagefilename</td> -->
                                                <td> 11/06/2020 </td>
                                                <td>
                                                    <a class="#" data-toggle="modal" href="#responsive"> Edit </a>
                                                    <a class="delete" href="javascript:;"> Delete </a>
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
        <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
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
                                                <label class="control-label">Created date</label>
                                                <input type="date" id="createdDate" class="form-control" value="11/06/2020" disabled>
                                                <!-- <span class="help-block"> This field has error. </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Expense title</label>
                                                <input type="text" id="expenseTitle" class="form-control" placeholder="Change the title">
                                                <!-- <span class="help-block"> This is inline help </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Total Amount</label>
                                                <input type="number" id="totalAmount" class="form-control" value="$200">
                                                <!-- <span class="help-block"> This field has error. </span> -->
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                <label class="control-label">Process</label>
                                                <select class="form-control" data-placeholder="Choose a Process" tabindex="1">
                                                    <option value="Category 1">UK</option>
                                                    <option value="Category 2">USA</option>
                                                    <option value="Category 3">CANADA</option>
                                                    <option value="Category 4">DOMESTIC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Category</label>
                                                <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">Utilities</option>
                                                    <option value="Category 2">Grocery</option>
                                                    <option value="Category 3">Supplies</option>
                                                    <option value="Category 4">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Bill details</label>
                                                <input type="file" name="..." id="fileinput" class="form-control">
                                            </div>
                                        </div>
                                        <!--/span-->              
                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="form-actions left">
                                    <button type="button" id="button-tos" class="btn default">Cancel</button>
                                    <button type="submit" class="btn blue">
                                        <i class="fa fa-check"></i> Save</button>
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
    <script src="./assets/pages/js/table-datatables-editable-new.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="./assets/pages/js/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <!-- <script src="./assets/pages/js/table-datatables-buttons.min.js" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL SCRIPTS -->