<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Notifications Setting - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>
    <div class="main-wrapper">
    <?php include 'layouts/topbar.php'; ?>
    <?php include 'layouts/settings-sidebar.php'; ?>
    <?php include 'layouts/two-col-sidebar.php'; ?>

    	<!-- Page Wrapper -->
        <div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Notifications Settings</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        
                        <div>
                            <ul class="list-group notification-list">
                                <li class="list-group-item">
                                    Employee
                                    <div class="status-toggle">
                                        <input type="checkbox" id="staff_module" class="check">
                                        <label for="staff_module" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Holidays
                                    <div class="status-toggle">
                                        <input type="checkbox" id="holidays_module" class="check" checked>
                                        <label for="holidays_module" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Leaves
                                    <div class="status-toggle">
                                        <input type="checkbox" id="leave_module" class="check" checked>
                                        <label for="leave_module" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Events
                                    <div class="status-toggle">
                                        <input type="checkbox" id="events_module" class="check" checked>
                                        <label for="events_module" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Chat
                                    <div class="status-toggle">
                                        <input type="checkbox" id="chat_module" class="check" checked>
                                        <label for="chat_module" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Jobs
                                    <div class="status-toggle">
                                        <input type="checkbox" id="job_module" class="check">
                                        <label for="job_module" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            
        </div>
        <!-- /Page Wrapper -->



</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>