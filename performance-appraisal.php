<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Performance Appraisal - HRMS admin template</title>

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
                            <h3 class="page-title">Performance Appraisal</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Performance</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_appraisal"><i class="fa-solid fa-plus"></i> Add New</a>
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
                                        <th class="width-thirty">#</th>
                                        <th>Employee</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Appraisal Date</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe </a>
                                            </h2>
                                        </td>
                                        <td>Web Designer </td>
                                        <td>Designing</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                                <a href="profile.php">Mike Litorus </a>
                                            </h2>
                                        </td>
                                        <td>IOS Developer </td>
                                        <td>IOS</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-13.jpg" alt="User Image"></a>
                                                <a href="profile.php">Bernardo Galaviz </a>
                                            </h2>
                                        </td>
                                        <td>Web Developer </td>
                                        <td>Designing</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-12.jpg" alt="User Image"></a>
                                                <a href="profile.php">Jeffrey Warden </a>
                                            </h2>
                                        </td>
                                        <td>Web Developer </td>
                                        <td>Designing</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
                                                <a href="profile.php">Wilmer Deluna </a>
                                            </h2>
                                        </td>
                                        <td>Team Leader </td>
                                        <td>IOS</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_appraisal"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appraisal"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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

            <!-- Add Performance Appraisal Modal -->
            <div id="add_appraisal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Give Performance Appraisal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employee</label>
                                            <select class="select">
                                                <option>Select Employee</option>
                                                <option>John Doe</option>
                                                <option>Mike Litorus</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Select Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="tab-box">
                                                    <div class="row user-tabs">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                                <li class="nav-item"><a href="#appr_technical" data-bs-toggle="tab" class="nav-link active">Technical</a></li>
                                                                <li class="nav-item"><a href="#appr_organizational" data-bs-toggle="tab" class="nav-link">Organizational</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="appr_technical" class="pro-overview tab-pane fade show active">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                          <tr>
                                                                            <th>Technical Competencies</th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          <tr>
                                                                            <th colspan="2">Indicator</th>
                                                                            <th colspan="2">Expected Value</th>
                                                                            <th>Set Value</th>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Customer Experience</td>
                                                                            <td colspan="2">Intermediate</td>
                                                                            <td><select name="customer_experience" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Marketing</td>
                                                                            <td colspan="2">Advanced</td>
                                                                            <td><select name="marketing" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Management</td>
                                                                            <td colspan="2">Advanced</td>
                                                                            <td><select name="management" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Administration</td>
                                                                            <td colspan="2">Advanced</td>
                                                                            <td><select name="administration" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Presentation Skill</td>
                                                                            <td colspan="2">Expert / Leader</td>
                                                                            <td><select name="presentation_skill" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Quality Of Work</td>
                                                                            <td colspan="2">Expert / Leader</td>
                                                                            <td><select name="quality_of_work" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                          </tr>
                                                                          <tr>
                                                                            <td colspan="2">Efficiency</td>
                                                                            <td colspan="2">Expert / Leader</td>
                                                                            <td><select name="efficiency" class="form-control form-select">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                              </select></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="appr_organizational">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Organizational Competencies</th>
                                                                                <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Integrity</td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="integrity" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Professionalism</td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="professionalism" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Team Work</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="team_work" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Critical Thinking</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="critical_thinking" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Conflict Management</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="conflict_management" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Attendance</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="attendance" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Ability To Meet Deadline</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="ability_to_meet_deadline" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
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
            <!-- /Add Performance Appraisal Modal -->
            
            <!-- Edit Performance Appraisal Modal -->
            <div id="edit_appraisal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Performance Appraisal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employee</label>
                                            <select class="select">
                                                <option>Select Employee</option>
                                                <option>John Doe</option>
                                                <option selected>Mike Litorus</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Select Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" value="7/08/2019" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="tab-box">
                                                    <div class="row user-tabs">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                                <li class="nav-item"><a href="#appr_technical1" data-bs-toggle="tab" class="nav-link active">Technical</a></li>
                                                                <li class="nav-item"><a href="#appr_organizational1" data-bs-toggle="tab" class="nav-link">Organizational</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="appr_technical1" class="pro-overview tab-pane fade show active">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Technical Competencies</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Customer Experience</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="customer_experience" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Marketing</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="marketing" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Management</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="management" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Administration</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="administration" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Presentation Skill</td>
                                                                                <td colspan="2">Expert / Leader</td>
                                                                                <td>
                                                                                    <select name="presentation_skill" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Quality Of Work</td>
                                                                                <td colspan="2">Expert / Leader</td>
                                                                                <td>
                                                                                    <select name="quality_of_work" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Efficiency</td>
                                                                                <td colspan="2">Expert / Leader</td>
                                                                                <td>
                                                                                    <select name="efficiency" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                        <option value="4"> Expert / Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="appr_organizational1">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Organizational Competencies</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Integrity</td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="integrity" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Professionalism</td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="professionalism" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Team Work</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="team_work" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Critical Thinking</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="critical_thinking" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Conflict Management</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="conflict_management" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Attendance</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="attendance" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Ability To Meet Deadline</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="ability_to_meet_deadline" class="form-control form-select">
                                                                                        <option value="">None</option>
                                                                                        <option value="1"> Beginner</option>
                                                                                        <option value="2"> Intermediate</option>
                                                                                        <option value="3"> Advanced</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
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
            <!-- /Edit Performance Appraisal Modal -->
            
            <!-- Delete Performance Appraisal Modal -->
            <div class="modal custom-modal fade" id="delete_appraisal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Performance Appraisal List</h3>
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
            <!-- /Delete Performance Appraisal Modal -->
        
        </div>
        <!-- /Page Wrapper -->

</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>