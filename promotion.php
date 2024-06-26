<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Promotion - HRMS admin template</title>

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
                        <div class="col">
                            <h3 class="page-title">Promotion</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Promotion</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_promotion"><i class="fa-solid fa-plus"></i> Add Promotion</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        
                            <!-- Promotion Table -->
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Promoted Employee </th>
                                        <th>Department</th>
                                        <th>Promotion Designation From </th>
                                        <th>Promotion Designation To </th>
                                        <th>Promotion Date </th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar blue-link">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe</a>
                                            </h2>
                                        </td>
                                        <td>Web Development</td>
                                        <td>Web Developer</td>
                                        <td>Sr Web Developer</td>
                                        <td>28 Feb 2019</td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_promotion"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_promotion"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /Promotion Table -->
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            
            <!-- Add Promotion Modal -->
            <div id="add_promotion" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Promotion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion For <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion From <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="Web Developer" readonly>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion To <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Web Developer</option>
                                        <option>Web Designer</option>
                                        <option>SEO Analyst</option>
                                    </select>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker">
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
            <!-- /Add Promotion Modal -->
            
            <!-- Edit Promotion Modal -->
            <div id="edit_promotion" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Promotion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion For <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="John Doe">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion From <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="Web Developer" readonly>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion To <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Web Developer</option>
                                        <option>Web Designer</option>
                                        <option>SEO Analyst</option>
                                    </select>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Promotion Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker">
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
            <!-- /Edit Promotion Modal -->
            
            <!-- Delete Promotion Modal -->
            <div class="modal custom-modal fade" id="delete_promotion" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Promotion</h3>
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
            <!-- /Delete Promotion Modal -->
        
        </div>
        <!-- /Page Wrapper -->



</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>