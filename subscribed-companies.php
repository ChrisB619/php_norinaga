<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Subscriptions - HRMS admin template</title>

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
                    
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Subscribed Companies</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Subscriptions</li>
                            </ul>
                        </div>
                    </div>
      
            
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="stats-info">
                            <h6>Joining</h6>
                            <h4>12 <span>This Month</span></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-info">
                            <h6>Renewal</h6>
                            <h4>3 <span>This Month</span></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-info">
                            <h6>Renewal</h6>
                            <h4>0 <span>Next Month</span></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-info">
                            <h6>Total Companies</h6>
                            <h4>312</h4>
                        </div>
                    </div>
                </div>

                <!-- Company List -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">	
                            <table class="table table-hover custom-table datatable mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Client</th>
                                        <th>Plan</th>
                                        <th>Users</th>
                                        <th>Plan Duration</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Amount</th>
                                        <th>Plan Status</th>
                                        <th>Update Plan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">Global Technologies</a>
                                            </h2>
                                        </td>
                                        <td>Free Trial</td>
                                        <td>30</td>
                                        <td>6 Months</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Jul 2019</td>
                                        <td>$200</td>
                                        <td><span class="badge bg-inverse-success">Active</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_1" class="check">
                                                <label for="company_status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-29.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">Delta Infotech</a>
                                            </h2>
                                        </td>
                                        <td>Premium</td>
                                        <td>50</td>
                                        <td>1 Year</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Feb 2020</td>
                                        <td>$200</td>
                                        <td><span class="badge bg-inverse-danger">Expired</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_2" class="check" checked>
                                                <label for="company_status_2" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">Cream Inc</a>
                                            </h2>
                                        </td>
                                        <td>Professional</td>
                                        <td>10</td>
                                        <td>1 Month</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Feb 2020</td>
                                        <td>Free</td>
                                        <td><span class="badge bg-inverse-success">Active</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_3" class="check" checked>
                                                <label for="company_status_3" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">Wellware Company</a>
                                            </h2>
                                        </td>
                                        <td>Enterprise</td>
                                        <td>10</td>
                                        <td>1 Month</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Feb 2020</td>
                                        <td>Free</td>
                                        <td><span class="badge bg-inverse-success">Active</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_4" class="check" checked>
                                                <label for="company_status_4" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">Mustang Technologies</a>
                                            </h2>
                                        </td>
                                        <td>Free Trial</td>
                                        <td>10</td>
                                        <td>1 Year</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Feb 2020</td>
                                        <td>Free</td>
                                        <td><span class="badge bg-inverse-success">Active</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_5" class="check" checked>
                                                <label for="company_status_5" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">International Software Inc</a>
                                            </h2>
                                        </td>
                                        <td>Enterprise</td>
                                        <td>10</td>
                                        <td>1 Month</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Feb 2020</td>
                                        <td>Free</td>
                                        <td><span class="badge bg-inverse-success">Active</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_6" class="check" checked>
                                                <label for="company_status_6" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.php" class="avatar"><img src="assets/img/profiles/avatar-28.jpg" alt="User Image"></a>
                                                <a href="client-profile.php">Mercury Software Inc</a>
                                            </h2>
                                        </td>
                                        <td>Professional</td>
                                        <td>10</td>
                                        <td>1 Year</td>
                                        <td>15 Feb 2019</td>
                                        <td>14 Feb 2020</td>
                                        <td>Free</td>
                                        <td><span class="badge bg-inverse-success">Active</span></td>
                                        <td><a class="btn btn-primary btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upgrade_plan">Change Plan</a></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="company_status_7" class="check" checked>
                                                <label for="company_status_7" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Company List -->
                
                <!-- Upgrade Plan Modal -->
                <div class="modal custom-modal fade" id="upgrade_plan" role="dialog">
                    <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="fa fa-close"></i></button>
                            <div class="modal-body">
                                <h5 class="modal-title text-center mb-3">Upgrade Plan</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">Plan Name</label>
                                                <input type="text" placeholder="Free Trial" class="form-control" value="Free Trial">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">Amount</label>
                                                <input type="text" class="form-control" value="$500">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">Plan Type</label>
                                                <select class="select"> 
                                                    <option> Monthly </option>
                                                    <option> Yearly </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">No of Users</label>
                                                <select class="select"> 
                                                    <option> 5 Users </option>
                                                    <option> 50 Users </option>
                                                    <option> Unlimited </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">No of Projects</label>
                                                <select class="select"> 
                                                    <option> 5 Projects </option>
                                                    <option> 50 Projects </option>
                                                    <option> Unlimited </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block mb-3">
                                                <label class="col-form-label">No of Storage Space</label>
                                                <select class="select"> 
                                                    <option> 5 GB </option>
                                                    <option> 100 GB </option>
                                                    <option> 500 GB </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Plan Description</label>
                                        <textarea class="form-control" rows="4" cols="30"></textarea>
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="d-block col-form-label">Status</label>
                                        <div class="status-toggle">
                                            <input type="checkbox" id="upgrade_plan_status" class="check">
                                            <label for="upgrade_plan_status" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                    <div class="m-t-20 text-center">
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Upgrade Plan Modal -->
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