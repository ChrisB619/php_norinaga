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
                            <h3 class="page-title">Subscriptions</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Subscriptions</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_plan"><i class="fa-solid fa-plus"></i> Add Subscription</a>
                        </div>
                    </div>
      
            
                </div>
                <!-- /Page Header -->
            
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                    
                        <!-- Plan Tab -->
                        <div class="row justify-content-center mb-4">
                            <div class="col-auto">
                                <nav class="nav btn-group">
                                    <a href="#monthly" class="btn btn-outline-secondary active" data-bs-toggle="tab">Monthly Plan</a>
                                    <a href="#annual" class="btn btn-outline-secondary" data-bs-toggle="tab">Annual Plan</a>
                                </nav>
                            </div>
                        </div>
                        <!-- /Plan Tab -->

                        <!-- Plan Tab Content -->
                        <div class="tab-content">
                        
                            <!-- Monthly Tab -->
                            <div class="tab-pane fade active show" id="monthly">
                            
                                <div class="row mb-30 equal-height-cards">
                                    <div class="col-md-4">
                                        <div class="card pricing-box">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h3>Free</h3>
                                                    <span class="display-4">$0</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa-solid fa-check"></i> <b>1 User</b></li>
                                                    <li><i class="fa-solid fa-check"></i> 5 Projects </li>
                                                    <li><i class="fa-solid fa-check"></i> 5 GB Storage</li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Message</li>
                                                </ul>
                                                <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal" data-bs-target="#edit_plan">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card pricing-box">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h3>Professional</h3>
                                                    <span class="display-4">$21</span>
                                                    <span>/mo</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa-solid fa-check"></i> <b>30 Users</b></li>
                                                    <li><i class="fa-solid fa-check"></i> 50 Projects</li>
                                                    <li><i class="fa-solid fa-check"></i> 100 GB Storage</li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Message</li>
                                                    <li><i class="fa-solid fa-check"></i> 24/7 Customer Support</li>
                                                </ul>
                                                <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal" data-bs-target="#edit_plan">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card pricing-box">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h3>Enterprise</h3>
                                                    <span class="display-4">$38</span>
                                                    <span>/mo</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa-solid fa-check"></i> <b>Unlimited Users </b></li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Projects</li>
                                                    <li><i class="fa-solid fa-check"></i> 500 GB Storage</li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Message</li>
                                                    <li><i class="fa-solid fa-check"></i> Voice and Video Call</li>
                                                    <li><i class="fa-solid fa-check"></i> 24/7 Customer Support</li>
                                                </ul>
                                                <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal" data-bs-target="#edit_plan">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Monthly Plan Details -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-table mb-0">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Plan Details</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Plan</th>
                                                                <th>Plan Type</th>
                                                                <th>Create Date</th>
                                                                <th>Modified Date</th>
                                                                <th>Amount</th>
                                                                <th>Subscribed Users</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Free Trial</td>
                                                                <td>Monthly</td>
                                                                <td>9 Nov 2019</td>
                                                                <td>8 Dec 2019</td>
                                                                <td>Free</td>
                                                                <td><a class="btn btn-info btn-sm" href="subscribed-companies.php">30 Users</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Professional</td>
                                                                <td>Monthly</td>
                                                                <td>9 Nov 2019</td>
                                                                <td>8 Dec 2019</td>
                                                                <td>$21</td>
                                                                <td><a class="btn btn-info btn-sm" href="subscribed-companies.php">97 Users</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Enterprise</td>
                                                                <td>Monthly</td>
                                                                <td>9 Nov 2019</td>
                                                                <td>8 Dec 2019</td>
                                                                <td>$38</td>
                                                                <td><a class="btn btn-info btn-sm" href="subscribed-companies.php">125 Users</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Monthly Plan Details -->
                            
                            </div>
                            <!-- /Monthly Tab -->
                            
                            <!-- Annual Plan Tab -->
                            <div class="tab-pane fade" id="annual">
                                <div class="row mb-30 equal-height-cards">
                                    <div class="col-md-4">
                                        <div class="card pricing-box">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h3>Free</h3>
                                                    <span class="display-4">$0</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa-solid fa-check"></i> <b>1 User</b></li>
                                                    <li><i class="fa-solid fa-check"></i> 5 Projects </li>
                                                    <li><i class="fa-solid fa-check"></i> 5 GB Storage</li>
                                                </ul>
                                                <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal" data-bs-target="#edit_plan">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card pricing-box">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h3>Professional</h3>
                                                    <span class="display-4">$199</span>
                                                    <span>/mo</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa-solid fa-check"></i> <b>30 Users</b></li>
                                                    <li><i class="fa-solid fa-check"></i> 50 Projects</li>
                                                    <li><i class="fa-solid fa-check"></i> 100 GB Storage</li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Message</li>
                                                    <li><i class="fa-solid fa-check"></i> 24/7 Customer Support</li>
                                                </ul>
                                                <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal" data-bs-target="#edit_plan">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card pricing-box">
                                            <div class="card-body d-flex flex-column">
                                                <div class="mb-4">
                                                    <h3>Enterprise</h3>
                                                    <span class="display-4">$399</span>
                                                    <span>/mo</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fa-solid fa-check"></i> <b>Unlimited Users </b></li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Projects</li>
                                                    <li><i class="fa-solid fa-check"></i> 500 GB Storage</li>
                                                    <li><i class="fa-solid fa-check"></i> Unlimited Message</li>
                                                    <li><i class="fa-solid fa-check"></i> Voice and Video Call</li>
                                                    <li><i class="fa-solid fa-check"></i> 24/7 Customer Support</li>
                                                </ul>
                                                <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal" data-bs-target="#edit_plan">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Yearly Plan Details -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-table mb-0">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Plan Details</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Plan</th>
                                                                <th>Plan Type</th>
                                                                <th>Create Date</th>
                                                                <th>Modified Date</th>
                                                                <th>Amount</th>
                                                                <th>Subscribed Users</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Free Trial</td>
                                                                <td>Yearly</td>
                                                                <td>9 Nov 2019</td>
                                                                <td>8 Dec 2019</td>
                                                                <td>Free</td>
                                                                <td><a class="btn btn-info btn-sm" href="subscribed-companies.php">62 Users</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Professional</td>
                                                                <td>Yearly</td>
                                                                <td>9 Nov 2019</td>
                                                                <td>8 Dec 2019</td>
                                                                <td>$199</td>
                                                                <td><a class="btn btn-info btn-sm" href="subscribed-companies.php">157 Users</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Enterprise</td>
                                                                <td>Yearly</td>
                                                                <td>9 Nov 2019</td>
                                                                <td>8 Dec 2019</td>
                                                                <td>$399</td>
                                                                <td><a class="btn btn-info btn-sm" href="subscribed-companies.php">241 Users</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Yearly Plan Details -->
                            
                            </div>
                            <!-- /Annual Plan Tab -->
                            
                        </div>
                        <!-- /Plan Tab Content -->
                      
                        <!-- Add Plan Modal -->
                        <div class="modal custom-modal fade" id="add_plan" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="fa fa-close"></i></button>
                                    <div class="modal-body">
                                        <h5 class="modal-title text-center mb-3">Add Plan</h5>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-block mb-3">
                                                        <label class="col-form-label">Plan Name</label>
                                                        <input type="text" placeholder="Free Trial" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block mb-3">
                                                        <label class="col-form-label">Plan Amount</label>
                                                        <input type="text" class="form-control">
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
                                                    <input type="checkbox" id="add_plan_status" class="check">
                                                    <label for="add_plan_status" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                            <div class="m-t-20 text-center">
                                                <button class="btn btn-primary submit-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Add Plan Modal -->

                        <!-- Edit Plan Modal -->
                        <div class="modal custom-modal fade" id="edit_plan" role="dialog">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="fa fa-close"></i></button>
                                    <div class="modal-body">
                                        <h5 class="modal-title text-center mb-3">Edit Plan</h5>
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
                                                        <label class="col-form-label">Plan Amount</label>
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
                                                    <input type="checkbox" id="edit_plan_status" class="check">
                                                    <label for="edit_plan_status" class="checktoggle">checkbox</label>
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
                        <!-- /Edit Plan Modal -->
                      
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