<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Contact - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>


<body>

    <div class="main-wrapper">
        <?php include 'layouts/menu.php'; ?>

   <!-- Page Wrapper -->
   <div class="page-wrapper">
			
            <!-- Contact Main Row -->
            <div class="chat-main-row">
            
                <!-- Contact Wrapper -->
                <div class="chat-main-wrapper">
                    <div class="col-lg-12 message-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h4 class="page-title mb-0">Contacts</h4>
                                    </div>
                                       <div class="col-6">
                                        <div class="navbar justify-content-end">
                                            <div class="search-box m-t-0">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <button class="btn" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                </div>
                                            </div>
                                            <ul class="nav float-end custom-menu">
                                                <li class="nav-item dropdown dropdown-action">
                                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                                                    <div class="dropdown-menu custom-dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Menu 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Menu 2</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="chat-wrap-inner">
                                        <div class="contact-box">
                                        <div class="row">
                                            <div class="contact-cat col-sm-4 col-lg-3">
                                                <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#add_contact"><i class="fa-solid fa-plus"></i> Add Contact</a>
                                                <div class="roles-menu">
                                                    <ul>
                                                        <li class="active"><a href="javascript:void(0);">All</a></li>
                                                        <li><a href="#">Company</a></li>
                                                        <li><a href="#">Client</a></li>
                                                        <li><a href="#">Staff</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="contacts-list col-sm-8 col-lg-9">
                                                <ul class="contact-list">
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                                <span class="contact-date">Web Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                                <span class="contact-date">Web Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">John Smith</span>
                                                                <span class="contact-date">Android Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Mike Litorus</span>
                                                                <span class="contact-date">IOS Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Wilmer Deluna</span>
                                                                <span class="contact-date">Team Leader</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Jeffrey Warden</span>
                                                                <span class="contact-date">Web Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Bernardo Galaviz</span>
                                                                <span class="contact-date">Web Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Lesley Grauer</span>
                                                                <span class="contact-date">Team Leader</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Jeffery Lalor</span>
                                                                <span class="contact-date">Team Leader</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-cont">
                                                            <div class="float-start user-img">
                                                                <a href="profile.php" class="avatar">
                                                                    <img class="rounded-circle" src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                                    <span class="status online"></span>
                                                                </a>
                                                            </div>
                                                            <div class="contact-info">
                                                                <span class="contact-name text-ellipsis">Loren Gatlin</span>
                                                                <span class="contact-date">Android Developer</span>
                                                            </div>
                                                            <ul class="contact-action">
                                                                <li class="dropdown dropdown-action">
                                                                    <a href="#" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="contact-alphapets">
                                                <div class="alphapets-inner">
                                                    <a href="#">A</a>
                                                    <a href="#">B</a>
                                                    <a href="#">C</a>
                                                    <a href="#">D</a>
                                                    <a href="#">E</a>
                                                    <a href="#">F</a>
                                                    <a href="#">G</a>
                                                    <a href="#">H</a>
                                                    <a href="#">I</a>
                                                    <a href="#">J</a>
                                                    <a href="#">K</a>
                                                    <a href="#">L</a>
                                                    <a href="#">M</a>
                                                    <a href="#">N</a>
                                                    <a href="#">O</a>
                                                    <a href="#">P</a>
                                                    <a href="#">Q</a>
                                                    <a href="#">R</a>
                                                    <a href="#">S</a>
                                                    <a href="#">T</a>
                                                    <a href="#">U</a>
                                                    <a href="#">V</a>
                                                    <a href="#">W</a>
                                                    <a href="#">X</a>
                                                    <a href="#">Y</a>
                                                    <a href="#">Z</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Contact Wrapper -->
                
            </div>
            <!-- /Contact Main Row -->
            
            <!-- Add Contact Modal -->
            <div class="modal custom-modal fade" id="add_contact" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Contact</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="contacts.php">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="d-block col-form-label">Status</label>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="contact_status" class="check">
                                        <label for="contact_status" class="checktoggle">checkbox</label>
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
            <!-- /Add Contact Modal -->
            
            <!-- Edit Contact Modal -->
            <div class="modal custom-modal fade" id="edit_contact" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Contact</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="John Doe">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email Address</label>
                                    <input class="form-control" type="email" value="johndoe@example.com">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Contact Number <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="9876543210">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="d-block col-form-label">Status</label>
                                    <div class="status-toggle">
                                        <input type="checkbox" id="edit_contact_status" class="check">
                                        <label for="edit_contact_status" class="checktoggle">checkbox</label>
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
            <!-- /Edit Contact Modal -->

            <!-- Delete Contact Modal -->
            <div class="modal custom-modal fade" id="delete_contact" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Contact</h3>
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
            <!-- /Delete Contact Modal -->
            
        </div>
        <!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>