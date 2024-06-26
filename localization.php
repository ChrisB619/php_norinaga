<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Localization - HRMS admin template</title>

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
                                    <h3 class="page-title">Basic Settings</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Default Country</label>
                                        <select class="select">
                                            <option selected="selected">USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Date Format</label>
                                        <select class="select">
                                            <option value="d/m/Y">15/05/2016</option>
                                            <option value="d.m.Y">15.05.2016</option>
                                            <option value="d-m-Y">15-05-2016</option>
                                            <option value="m/d/Y">05/15/2016</option>
                                            <option value="Y/m/d">2016/05/15</option>
                                            <option value="Y-m-d">2016-05-15</option>
                                            <option value="M d Y">May 15 2016</option>
                                            <option selected="selected" value="d M Y">15 May 2016</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Timezone</label>
                                        <select class="select">
                                            <option>(UTC +5:30) Antarctica/Palmer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Default Language</label>
                                        <select class="select">
                                            <option selected="selected">English</option>
                                            <option>French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Currency Code</label>
                                        <select class="select">
                                            <option selected="selected">USD</option>
                                            <option>Pound</option>
                                            <option>EURO</option>
                                            <option>Ringgit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Currency Symbol</label>
                                        <input class="form-control" readonly value="$" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </div>
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