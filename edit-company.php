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
                                <a href="#">Edit Company</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Edit Company Details
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
                                                        <label class="control-label">Company Name</label>
                                                        <input type="text" id="compName" class="form-control" placeholder="Enter Company name">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Person Name</label>
                                                        <input type="text" id="contactName" class="form-control" placeholder="Enter Contact Person Name">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                    </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact Person Linkedin</label>
                                                        <input type="text" id="contactName" class="form-control" placeholder="Enter Contact Person Linkedin Profile">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Industry</label>
                                                        <select class="form-control" data-placeholder="select industry" tabindex="1">
                                                            <option value="Category 1">Information Technology & Services</option>
                                                            <option value="Category 2">ITES</option>
                                                            <option value="Category 3">Retail</option>
                                                            <option value="Category 4">Travel</option>
                                                            <option value="Category 5">Hospitality</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Location</label>
                                                        <input type="text" id="companyLocation" class="form-control" placeholder="Enter Company Location">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Website</label>
                                                        <input type="text" id="companyWebsite" class="form-control" placeholder="Enter Company Website">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">About</label>
                                                        <textarea class="form-control input-sm" rows="2" maxlength="150" placeholder="Enter Address of the company"></textarea>
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Upload Company Logo</label>
                                                        <input type="file" id="companyLogo" class="form-control" placeholder="Upload Logo" multiple>
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="form-actions right">
                                            <button type="button" id="button-tos" class="btn default" onclick="window.location.href='./new-company.php';">Cancel</button>
                                            <button type="submit" class="btn blue">
                                                <i class="fa fa-check"></i> Add Company</button>
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