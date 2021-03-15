<?php include('header.php'); ?>
    
<link href="./assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
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
                                <a href="#">Add new opening</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Add New Opening
                        <!-- <small>blank page layout</small> -->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="#" class="horizontal-form">
                                        <div class="form-body">
                                            <!-- <h3 class="form-section">Person Info</h3> -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Job Title</label>
                                                        <input type="text" id="jobTitle" class="form-control" placeholder="Enter Job Title">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Job Type</label>
                                                        <select class="form-control" data-placeholder="select job type" tabindex="1">
                                                            <option value="Category 1">Full-time</option>
                                                            <option value="Category 2">Part-time</option>
                                                            <option value="Category 3">Contract</option>
                                                            <option value="Category 3">Remote work</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Job Location</label>
                                                        <select class="form-control" data-placeholder="select location" tabindex="1">
                                                            <option value="Category 1">Bangalore</option>
                                                            <option value="Category 2">Mumbai</option>
                                                            <option value="Category 3">Pune</option>
                                                            <option value="Category 4">Goa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Industry</label>
                                                        <select class="form-control" data-placeholder="select industry" tabindex="1">
                                                            <option value="Category 1">IT</option>
                                                            <option value="Category 2">ITES</option>
                                                            <option value="Category 3">Retail</option>
                                                            <option value="Category 4">Travel</option>
                                                            <option value="Category 5">Hospitality</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Experience</label>
                                                        <select class="form-control" data-placeholder="select experience" tabindex="1">
                                                            <option value="Category 1">Fresher</option>
                                                            <option value="Category 2">0 - 1 years</option>
                                                            <option value="Category 3">2 - 3 years</option>
                                                            <option value="Category 4">5+ years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Salary</label>
                                                        <select class="form-control" data-placeholder="select salary" tabindex="1">
                                                            <option value="Category 1">Not disclosed</option>
                                                            <option value="Category 2">₹ 1,00,000 - 2,00,000 P.A.</option>
                                                            <option value="Category 3">₹ 2,00,000 - 4,75,000 P.A.</option>
                                                            <option value="Category 4">₹ 3,50,000 - 5,00,000 P.A.</option>
                                                            <option value="Category 5">₹ 5,00,000 - 7,00,000 P.A.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Company</label>
                                                        <select class="form-control" data-placeholder="select company" tabindex="1">
                                                            <option value="Category 1">TCS</option>
                                                            <option value="Category 2">Infoys</option>
                                                            <option value="Category 3">Wipro</option>
                                                            <option value="Category 4">Sierra</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Recruiter</label>
                                                        <select class="form-control" data-placeholder="select recruiter" tabindex="1">
                                                            <option value="Category 1">Delvin</option>
                                                            <option value="Category 2">Ziya</option>
                                                            <option value="Category 3">Stedwick</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label class="control-label">Job description</label>
                                                        <textarea class="wysihtml5 form-control" rows="8"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="form-actions right">
                                            <button type="button" id="button-tos" class="btn default" onclick="window.location.href='#';">Cancel</button>
                                            <button type="submit" class="btn blue">
                                                <i class="fa fa-check"></i> Add Opening</button>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
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
    <script src="./assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="./assets/pages/js/components-editors.min.js" type="text/javascript"></script>