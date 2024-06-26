<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>File Manager - HRMS admin template</title>

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
            
                <div class="row">
                    <div class="col-sm-12">
                        <div class="file-wrap">
                            <div class="file-sidebar">
                                <div class="file-header justify-content-center">
                                    <span>Projects</span>
                                    <a href="javascript:void(0);" class="file-side-close"><i class="fa-solid fa-xmark"></i></a>
                                </div>
                                <form class="file-search">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                        <input type="text" class="form-control rounded-pill" placeholder="Search">
                                    </div>
                                </form>
                                <div class="file-pro-list">
                                    <div class="file-scroll">
                                        <ul class="file-menu">
                                            <li class="active">
                                                <a href="#">All Projects</a>
                                            </li>
                                            <li>
                                                <a href="#">Office Management</a>
                                            </li>
                                            <li>
                                                <a href="#">Video Calling App</a>
                                            </li>
                                            <li>
                                                <a href="#">Hospital Administration</a>
                                            </li>
                                            <li>
                                                <a href="#">Virtual Host</a>
                                            </li>
                                        </ul>
                                        <div class="show-more">
                                            <a href="#">Show More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="file-cont-wrap">
                                <div class="file-cont-inner">
                                    <div class="file-cont-header">
                                        <div class="file-options">
                                            <a href="javascript:void(0)" id="file_sidebar_toggle" class="file-sidebar-toggle">
                                                <i class="fa-solid fa-bars"></i>
                                            </a>
                                        </div>
                                        <span>File Manager</span>
                                        <div class="file-options">
                                            <span class="btn-file"><input type="file" class="upload"><i class="fa-solid fa-upload"></i></span>
                                        </div>
                                    </div>
                                    <div class="file-content">
                                        <form class="file-search">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </div>
                                                <input type="text" class="form-control rounded-pill" placeholder="Search">
                                            </div>
                                        </form>
                                        <div class="file-body">
                                            <div class="file-scroll">
                                                <div class="file-content-inner">
                                                    <h4>Recent Files</h4>
                                                    <div class="row row-sm justify-content-center">
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-pdf"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Sample.pdf</a></h6>
                                                                    <span>10.45kb</span>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <span class="d-none d-sm-inline">Last Modified: </span>1 min ago
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-word"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Document.docx</a></h6>
                                                                    <span>22.67kb</span>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <span class="d-none d-sm-inline">Last Modified: </span>30 mins ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-image"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">icon.png</a></h6>
                                                                    <span>12.47kb</span>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <span class="d-none d-sm-inline">Last Modified: </span>1 hour ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-excel"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Users.xls</a></h6>
                                                                    <span>35.11kb</span>
                                                                </div>
                                                                <div class="card-footer">23 Jul 6:30 PM</div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <h4>Files</h4>
                                                    <div class="row row-sm">
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-word"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Updates.docx</a></h6>
                                                                    <span>12mb</span>
                                                                </div>
                                                                <div class="card-footer">9 Aug 1:17 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-powerpoint"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Vision.ppt</a></h6>
                                                                    <span>72.50kb</span>
                                                                </div>
                                                                <div class="card-footer">6 Aug 11:42 AM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-audio"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Voice.mp3</a></h6>
                                                                    <span>2.17mb</span>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <span class="d-none d-sm-inline">Last Modified: </span>30 Jul 9:00 PM
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-pdf"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Tutorials.pdf</a></h6>
                                                                    <span>8.2mb</span>
                                                                </div>
                                                                <div class="card-footer">21 Jul 10:45 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-excel"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Tasks.xls</a></h6>
                                                                    <span>92.82kb</span>
                                                                </div>
                                                                <div class="card-footer">16 Jun 4:59 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-image"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Page.psd</a></h6>
                                                                    <span>118.71mb</span>
                                                                </div>
                                                                <div class="card-footer">14 Jun 9:00 AM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-lines"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">License.txt</a></h6>
                                                                    <span>18.7kb</span>
                                                                </div>
                                                                <div class="card-footer">5 May 8:21 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-word"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Expenses.docx</a></h6>
                                                                    <span>66.2kb</span>
                                                                </div>
                                                                <div class="card-footer">24 Apr 7:50 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-audio"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Music.mp3</a></h6>
                                                                    <span>3.6mb</span>
                                                                </div>
                                                                <div class="card-footer">13 Mar 2:00 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-lines"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Installation.txt</a></h6>
                                                                    <span>43.9kb</span>
                                                                </div>
                                                                <div class="card-footer">26 Feb 5:01 PM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-video"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">Workflow.mp4</a></h6>
                                                                    <span>47.65mb</span>
                                                                </div>
                                                                <div class="card-footer">3 Jan 11:35 AM</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 col-sm-4 col-md-3 col-lg-4 col-xl-3">
                                                            <div class="card card-file">
                                                                <div class="dropdown-file">
                                                                    <a href="#" class="dropdown-link" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item">View Details</a>
                                                                        <a href="#" class="dropdown-item">Share</a>
                                                                        <a href="#" class="dropdown-item">Download</a>
                                                                        <a href="#" class="dropdown-item">Rename</a>
                                                                        <a href="#" class="dropdown-item">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <div class="card-file-thumb">
                                                                    <i class="fa-regular fa-file-code"></i>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h6><a href="#">index.html</a></h6>
                                                                    <span>23.7kb</span>
                                                                </div>
                                                                <div class="card-footer">1 Jan 8:55 AM</div>
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