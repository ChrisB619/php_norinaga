<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Employees - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

   <!-- Page Wrapper -->
   <div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid pb-1">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Assets</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Assets</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <!-- Search Filter -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="assign-head">
                            <div class="assign-content">
                                <img src="assets/img/keyboard.png" alt="Keyboard Image">
                                <h6>Dell Keyboard</h6>
                            </div>
                            <div class="assign-content">
                                <a href="#" class="btn btn-assign" data-bs-toggle="modal" data-bs-target="#add-assign"><i class="fa-solid fa-plus"></i> Assign  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="assets-info">
                            <h2>Asset Info</h2>
                            <ul>
                                <li>
                                    <span>Type</span>
                                    <p>Keybaord</p>
                                </li>
                                <li>
                                    <span>Brand</span>
                                    <p>Dell</p>
                                </li>
                                <li>
                                    <span>Model</span>
                                    <p>SE5214 - 2022</p>
                                </li>
                                <li>
                                    <span>Serial Number</span>
                                    <p>3647952145678</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="assets-info">
                            <h2>Asset History</h2>
                            <ul>
                                <li>
                                    <span>Vendor</span>
                                    <p>Compusoft Systems Ltd.,</p>
                                </li>
                                <li>
                                    <span>Category</span>
                                    <p>Computer</p>
                                </li>
                                <li>
                                    <span>Cost</span>
                                    <p>₹ 1,200</p>
                                </li>
                                <li>
                                    <span>Location</span>
                                    <p>123 Street, Vivekanandhar Road, Coimbatore - 32</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex">
                        <div class="assets-info">
                            <h2>Warranty</h2>
                            <ul>
                                <li>
                                    <span>Start Date</span>
                                    <p>12/11/2022</p>
                                </li>
                                <li>
                                    <span>End Date</span>
                                    <p>12/11/2024</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex">
                        <div class="assets-info assets-image">
                            <h2>Asset Images</h2>
                            <ul>
                                <li>
                                    <img src="assets/img/img1.jpg" alt="Keyboard Image">
                                </li>
                                <li>
                                    <img src="assets/img/img2.jpg" alt="Asset image">
                                </li>
                                <li>
                                    <img src="assets/img/img3.jpg" alt="Asset image">
                                </li>
                                <li>
                                    <img src="assets/img/img4.jpg" alt="Asset image">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            
            <!-- /Delete Asset Modal -->
            
        </div>
        <!-- /Page Wrapper -->




   </div>
<!-- end main wrapper-->
<div  class="modal custom-modal fade" id="add-assign" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content ">
					<div class="modal-header">
						<h5 class="modal-title">Assign Asset</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-md-12 selectnew">
									<div class="input-block mb-3">
										<label class="col-form-label">Department</label>
										<select class="select">
											<option>Department 1</option>
											<option>Department 2</option>
										</select>
									</div>
								</div>
								<div class="col-md-12 selectnew">
									<div class="input-block mb-3">
										<label class="col-form-label">Assign to</label>
										<select class="select">
											<option>Customer</option>
											<option>Client</option>
										</select>
									</div>
								</div>
								<div class="submit-section mt-3">
									<button class="btn btn-primary submit-btns w-100">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>