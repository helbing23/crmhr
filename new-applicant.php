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
                                <a href="#">Add new applicant</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Add New Applicant
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
                                                        <label class="control-label">Full Name</label>
                                                        <input type="text" id="applicantName" class="form-control" placeholder="Enter applicant name">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Post</label>
                                                        <select class="form-control" data-placeholder="available posts" tabindex="1">
                                                            <option value="Category 1">Web developer</option>
                                                            <option value="Category 2">3D Designer</option>
                                                            <option value="Category 3">Call center execuitve</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Contact No.</label>
                                                        <input type="text" id="contactName" class="form-control" placeholder="Enter Contact No.">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Email ID</label>
                                                        <input class="form-control placeholder-no-fix" type="text" placeholder="Enter Email" name="email" />
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Location</label>
                                                        <input type="text" id="applicantLocation" class="form-control" placeholder="Enter Applicant Location">
                                                        <!-- <span class="help-block"> This is inline help </span> -->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Upload Profile Picture</label>
                                                        <input type="file" id="uploadCV" class="form-control" placeholder="Upload Profile Picture" multiple>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <!--/row-->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Upload Resume/CV</label>
                                                        <input type="file" id="uploadCV" class="form-control" placeholder="Upload Resume/CV" multiple>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Cover Letter</label>
                                                        <textarea class="form-control input-sm" rows="2" maxlength="150" placeholder="write short cover letter"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="form-actions right">
                                            <button type="button" id="button-tos" class="btn default" onclick="window.location.href='#';">Cancel</button>
                                            <button type="submit" class="btn blue">
                                                <i class="fa fa-check"></i> Add Applicant</button>
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