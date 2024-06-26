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

   <div class="page-wrapper">

	
			
            <!-- Page Content -->
            <div class="content container-fluid pb-0">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            <a href="#"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                                                    <h6 class="text-muted">UI/UX Design Team</h6>
                                                    <small class="text-muted">Web Designer</small>
                                                    <div class="staff-id">Employee ID : FT-0001</div>
                                                    <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                                    <div class="staff-msg"><a class="btn btn-custom" href="chat.php">Send Message</a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="personal-info">
                                                    <li>
                                                        <div class="title">Phone:</div>
                                                        <div class="text"><a href="#">9876543210</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Email:</div>
                                                        <div class="text"><a href="#">johndoe@example.com</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">24th July</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Address:</div>
                                                        <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Gender:</div>
                                                        <div class="text">Male</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Reports to:</div>
                                                        <div class="text">
                                                           <div class="avatar-box">
                                                              <div class="avatar avatar-xs">
                                                                 <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                              </div>
                                                           </div>
                                                           <a href="profile.php">
                                                                Jeffery Lalor
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa-solid fa-pencil"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card tab-box">
                    <div class="row user-tabs">
                        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                            <ul class="nav nav-tabs nav-tabs-bottom">
                                <li class="nav-item"><a href="profile.php#emp_profile" class="nav-link">Profile</a></li>
                                <li class="nav-item"><a href="profile.php#emp_projects" class="nav-link">Projects</a></li>
                                <li class="nav-item"><a href="profile.php#bank_statutory" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
                                <li class="nav-item"><a href="profile.php#emp_assets" class="nav-link active">Assets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="assign-head">
                    <div class="assign-content">
                        <img src="assets/img/keyboard.png" alt="Keyboard Image">
                        <h6>Dell Keyboard</h6>
                    </div>
                    <div class="assign-content">
                        <a href="#" class="btn btn-assign" data-bs-toggle="modal" data-bs-target="#raise-issue"><i class="fas fa-hand-paper"></i> Raise Issue  </a>
                    </div>
                </div>
                
                <div class="card asset-box">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5>Asset Info</h5>
                                <div class="asset-info">
                                    <div class="asset-info-det">
                                        <h6>Wired Keyboard</h6>
                                        <p>SE5214 - 2022 2022 2022 </p>
                                        <ul>
                                            <li>Type <span>Keybaord</span></li>
                                            <li>Serial Number <span>3647952145678</span></li>
                                            <li>Brand <span>Dell</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="assets-image">
                                    <h5>Asset Images</h5>
                                    <ul>
                                        <li>
                                            <img src="assets/img/img1.jpg" alt="Keyboard Image">
                                        </li>
                                        <li>
                                            <img src="assets/img/img2.jpg" alt="Asset Image">
                                        </li>
                                        <li>
                                            <img src="assets/img/img3.jpg" alt="Asset Image">
                                        </li>
                                        <li>
                                            <img src="assets/img/img4.jpg" alt="Asset Image">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="asset-history">
                                    <h5>Asset Images</h5>
                                    <ul>
                                        <li>
                                            <div class="aset-img">
                                                <img src="assets/img/icons/icon-01.svg" alt="Asset Image">
                                            </div>
                                            <div class="asset-inf">
                                                <h6>Vendor</h6>
                                                <p>Compusoft Systems Ltd.,</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aset-img">
                                                <img src="assets/img/icons/icon-03.svg" alt="Asset Image">
                                            </div>
                                            <div class="asset-inf">
                                                <h6>Category</h6>
                                                <p>Computer</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aset-img">
                                                <img src="assets/img/icons/icon-04.svg" alt="Asset Image">
                                            </div>
                                            <div class="asset-inf">
                                                <h6>Cost</h6>
                                                <p>₹ 1,200</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aset-img">
                                                <img src="assets/img/icons/icon-05.svg" alt="Asset Image">
                                            </div>
                                            <div class="asset-inf">
                                                <h6>Location</h6>
                                                <p>123 Street, Vivekanandhar Road, Coimbatore - 32</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="aset-img">
                                                <img src="assets/img/icons/icon-02.svg" alt="Asset Image">
                                            </div>
                                            <div class="asset-inf">
                                                <h6>Warranty</h6>
                                                <p>From 11-12-2022   -   To  11-12-2022</p>
                                            </div>
                                        </li>									
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <!-- /Page Content -->
            
            <!-- Profile Modal -->
            <div id="profile_info" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Profile Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profile-img-wrap edit-img">
                                            <img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                            <div class="fileupload btn">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">First Name</label>
                                                    <input type="text" class="form-control" value="John">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Last Name</label>
                                                    <input type="text" class="form-control" value="Doe">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Birth Date</label>
                                                    <div class="cal-icon">
                                                        <input class="form-control datetimepicker" type="text" value="05/06/1985">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block mb-3">
                                                    <label class="col-form-label">Gender</label>
                                                    <select class="select form-control">
                                                        <option value="male selected">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Address</label>
                                            <input type="text" class="form-control" value="4487 Snowbird Lane">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">State</label>
                                            <input type="text" class="form-control" value="New York">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Country</label>
                                            <input type="text" class="form-control" value="United States">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Pin Code</label>
                                            <input type="text" class="form-control" value="10523">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Phone Number</label>
                                            <input type="text" class="form-control" value="631-889-3206">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Department</option>
                                                <option>Web Development</option>
                                                <option>IT Management</option>
                                                <option>Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Designation</option>
                                                <option>Web Designer</option>
                                                <option>Web Developer</option>
                                                <option>Android Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Reports To <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>-</option>
                                                <option>Wilmer Deluna</option>
                                                <option>Lesley Grauer</option>
                                                <option>Jeffery Lalor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile Modal -->
            
            <!-- Personal Info Modal -->
            <div id="raise-issue" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Raise Issue</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Description</label>
                                            <textarea rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section mt-0">
                                    <button class="btn btn-primary submit-btn w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Personal Info Modal -->
            
       



   </div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>