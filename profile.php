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
                                <a href="#">User Profile</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Profile
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Change Password</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">User Name</label>
                                                                <input type="text" value="John" disabled class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Full Name</label>
                                                                <input type="text" value="John Doe" class="form-control" disabled/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Mobile Number</label>
                                                                <input type="text" value="+1 646 580 5245" class="form-control" disabled/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email ID</label>
                                                                <input type="text" value="Johndoe@invictaindia.in" class="form-control" disabled/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">User Role</label>
                                                                <input type="text" value="Agent" class="form-control" disabled/> </div>
                                                            <div class="margiv-top-10">
                                                                <a href="javascript:;" class="btn green"> Save Changes </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Current Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Re-type New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Change Password </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                </div>
                                            </div>
                                        </div>
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