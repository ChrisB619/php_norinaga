<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Salary Setting - HRMS admin template</title>

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
                                    <h3 class="page-title">Salary Settings</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        
                        <form>
                            
                            <!-- DA and HRA Settings -->
                            <div class="settings-widget">
                                <div class="h3 card-title with-switch">
                                    DA and HRA 											
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hra" checked>
                                        <label class="onoffswitch-label" for="switch_hra">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">DA (%)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">HRA (%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /DA and HRA Settings -->
                            
                            <!-- Provident Fund Settings -->
                            <div class="settings-widget">
                                <div class="h3 card-title with-switch">
                                    Provident Fund Settings 											
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_pf" checked>
                                        <label class="onoffswitch-label" for="switch_pf">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employee Share (%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Organization Share (%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Provident Fund Settings -->
                            
                            <!-- ESI Settings -->
                            <div class="settings-widget">
                                <div class="h3 card-title with-switch">
                                    ESI Settings 											
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_esi">
                                        <label class="onoffswitch-label" for="switch_esi">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employee Share (%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Organization Share (%)</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /ESI Settings -->
                            
                            <!-- TDS Settings -->
                            <div class="settings-widget">
                                <div class="h3 card-title with-switch">
                                    TDS&nbsp; <small class="form-text text-muted">Annual Salary</small>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_tds">
                                        <label class="onoffswitch-label" for="switch_tds">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-4">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Salary From</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Salary To</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">%</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-block mb-3">
                                            <label class="d-none d-sm-block">&nbsp;</label>
                                            <button class="btn btn-danger w-100 set-btn" type="button"><i class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-4">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Salary From</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Salary To</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">%</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-block mb-3">
                                            <label class="d-none d-sm-block">&nbsp;</label>
                                            <button class="btn btn-danger w-100 set-btn" type="button"><i class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-sm-2 ms-auto">
                                        <div class="input-block mb-3">
                                            <button class="btn btn-primary w-100" type="button"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /TDS Settings -->
                            
                            <!-- Submit Button -->
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Save</button>
                            </div>
                            <!-- /Submit Button -->
                            
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