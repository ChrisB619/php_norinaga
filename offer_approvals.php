<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Offer Approvals - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>
    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="page-title">Offer Approvals</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item">Jobs</li>
                                <li class="breadcrumb-item active">Offer Approvals</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Job Title</th>
                                        <th>Job Type</th>
                                        <th>Pay</th>
                                        <th>Annual IP</th>
                                        <th>Long Term IP</th>
                                        <th>Status</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe <span>Web Designer</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.php">Web Developer</a></td>
                                        <td>Temporary</td>
                                        <td>$25000</td>
                                        <td>15%</td>
                                        <td>No</td>
                                        <td><label class="badge bg-inverse-warning d-inline-block min-w-90">Requested</label></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-thumbs-up m-r-5"></i> Approved</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-ban m-r-5"></i> Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                <a href="profile.php">Richard Miles <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.php">Web Designer</a></td>
                                        <td>Contract</td>
                                        <td>$25000</td>
                                        <td>15%</td>
                                        <td>No</td>
                                        <td><label class="badge bg-inverse-danger d-inline-block min-w-90">Rejected</label></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-thumbs-up m-r-5"></i> Approved</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-ban m-r-5"></i> Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Smith <span>Android Developer</span></a>
                                            </h2>
                                        </td>
                                        <td><a href="job-details.php">Android Developer</a></td>
                                        <td>Salary</td>
                                        <td>$25000</td>
                                        <td>15%</td>
                                        <td>No</td>
                                        <td><label class="badge bg-inverse-success d-inline-block min-w-90">Approved</label></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-thumbs-up m-r-5"></i> Approved</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-ban m-r-5"></i> Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            
            
            <!-- Edit Job Modal -->
            <div id="edit_job" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Job</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Job Title</label>
                                            <input class="form-control" type="text" value="Web Developer">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Department</label>
                                            <select class="select">
                                                <option>-</option>
                                                <option selected>Web Development</option>
                                                <option>Application Development</option>
                                                <option>IT Management</option>
                                                <option>Accounts Management</option>
                                                <option>Support Management</option>
                                                <option>Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Job Location</label>
                                            <input class="form-control" type="text" value="California">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">No of Vacancies</label>
                                            <input class="form-control" type="text" value="5">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Experience</label>
                                            <input class="form-control" type="text" value="2 Years">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Age</label>
                                            <input class="form-control" type="text" value="-">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Salary From</label>
                                            <input type="text" class="form-control" value="32k">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Salary To</label>
                                            <input type="text" class="form-control" value="38k">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Job Type</label>
                                            <select class="select">
                                                <option selected>Full Time</option>
                                                <option>Part Time</option>
                                                <option>Internship</option>
                                                <option>Temporary</option>
                                                <option>Remote</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option selected>Open</option>
                                                <option>Closed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Start Date</label>
                                            <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Expired Date</label>
                                            <input type="text" class="form-control datetimepicker" value="31 May 2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Edit Job Modal -->

            <!-- Delete Job Modal -->
            <div class="modal custom-modal fade" id="delete_job" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Job Modal -->
            
        </div>
        <!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>