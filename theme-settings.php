<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Theme Settings - HRMS admin template</title>

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
                    <div class="col-md-8 offset-md-2">
                    
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Theme Settings</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                    
                        <form>
                            <div class="input-block mb-3 row">
                                <label class="col-lg-3 col-form-label">Website Name</label>
                                <div class="col-lg-9">
                                    <input name="website_name" class="form-control" value="Dreamguy's Technologies" type="text">
                                </div>
                            </div>
                            <div class="input-block mb-3 row">
                                <label class="col-lg-3 col-form-label">Light Logo</label>
                                <div class="col-lg-7">
                                    <input type="file" class="form-control">
                                    <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                                </div>
                                <div class="col-lg-2">
                                    <div class="img-thumbnail float-end"><img src="assets/img/logo2.png" alt="Logo" width="40" height="40"></div>
                                </div>
                            </div>
                            <div class="input-block mb-3 row">
                                <label class="col-lg-3 col-form-label">Favicon</label>
                                <div class="col-lg-7">
                                    <input type="file" class="form-control">
                                    <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                                </div>
                                <div class="col-lg-2">
                                    <div class="settings-image img-thumbnail float-end"><img src="assets/img/logo2.png" class="img-fluid" width="16" height="16" alt="Logo"></div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
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