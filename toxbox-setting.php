<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Toxbox Settings - HRMS admin template</title>

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
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 offset-md-3">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">ToxBox Setting</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
							
							<form>
								<div class="input-block mb-3">
									<label class="col-form-label">ApiKey <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="xxxxxxxx" readonly="">
								</div>
								<div class="input-block mb-3">
									<label class="col-form-label">ApiSecret <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="xxxxxxxxxxxxxxxxxxxxxxxxxx" readonly="">
								</div>
								
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Save Changes</button>
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