<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Training - HRMS admin template</title>

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
                            <h3 class="page-title">Training</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Training</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_training"><i class="fa-solid fa-plus"></i> Add New </a>
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
                                        <th>Training Type</th>
                                        <th>Trainer</th>
                                        <th>Employee</th>
                                        <th>Time Duration</th>
                                        <th>Description </th>
                                        <th>Cost </th>
                                        <th>Status </th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Git Training</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe </a>
                                            </h2>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li> 
                                            </ul>
                                        </td>
                                        <td>7 May 2019 - 10 May 2019</td>
                                        <td>Lorem ipsum dollar</td>
                                        <td>$400</td>
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
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Swift Training</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                <a href="profile.php">Richard Miles</a>
                                            </h2>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" title="John Doe" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li> 
                                            </ul>
                                        </td>
                                        <td>7 May 2019 - 10 May 2019</td>
                                        <td>Lorem ipsum dollar</td>
                                        <td>$800</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-danger"></i> Inactive
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
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Node Training</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                <a href="profile.php">John Doe </a>
                                            </h2>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li> 
                                            </ul>
                                        </td>
                                        <td>7 May 2019 - 10 May 2019</td>
                                        <td>Lorem ipsum dollar</td>
                                        <td>$400</td>
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
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Angular Training</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                                <a href="profile.php">Mike Litorus </a>
                                            </h2>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li> 
                                            </ul>
                                        </td>
                                        <td>7 May 2019 - 10 May 2019</td>
                                        <td>Lorem ipsum dollar</td>
                                        <td>$400</td>
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
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Git Training</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
                                                <a href="profile.php">Wilmer Deluna </a>
                                            </h2>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li> 
                                            </ul>
                                        </td>
                                        <td>7 May 2019 - 10 May 2019</td>
                                        <td>Lorem ipsum dollar</td>
                                        <td>$400</td>
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
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_training"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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

            <!-- Add Training List Modal -->
            <div id="add_training" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Training</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Training Type</label>
                                            <select class="select">
                                                <option>Node Training</option>
                                                <option>Swift Training</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Trainer</label>
                                            <select class="select">
                                                <option>Mike Litorus </option>
                                                <option>John Doe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employees</label>
                                            <select class="select">
                                                <option>Bernardo Galaviz</option>
                                                <option>Jeffrey Warden</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">End Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="4"></textarea>
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
            <!-- /Add Training List Modal -->
            
            <!-- Edit Training List Modal -->
            <div id="edit_training" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Training List</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Training Type</label>
                                            <select class="select">
                                                <option selected>Node Training</option>
                                                <option>Swift Training</option>
                                                <option>Git Training</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Trainer</label>
                                            <select class="select">
                                                <option>Mike Litorus </option>
                                                <option selected>John Doe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employees</label>
                                            <select class="select">
                                                <option>Bernardo Galaviz</option>
                                                <option selected>Jeffrey Warden</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="$400">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" value="07-08-2019" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">End Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" value="10-08-2019" type="text"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="4">Lorem ipsum ismap</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option selected>Active</option>
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
            <!-- /Edit Training List Modal -->
            
            <!-- Delete Training List Modal -->
            <div class="modal custom-modal fade" id="delete_training" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Training List</h3>
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
            <!-- /Delete Training List Modal -->
        
        </div>
        <!-- /Page Wrapper -->



</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>