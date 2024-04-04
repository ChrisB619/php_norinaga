<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Analytics - HRMS admin template</title>

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
                        <div class="col-md-4">
                            <h3 class="page-title">Analytics</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Analytics</li>
                            </ul>
                        </div>
                        <div class="col-md-8 float-end ms-auto">
                            <div class="d-flex title-head">
                                <div class="view-icons">
                                    <a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
                                    <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
                                    <a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
                                </div>
                                <div class="form-sort">
                                    <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <!-- Search Filter -->
                <div class="filter-filelds" id="filter_inputs">
                    <div class="row filter-row">
                        <div class="col-xl-2">  
                            <div class="input-block mb-3 form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Activity</label>
                            </div>
                        </div>
                        
                        <div class="col-xl-2">  
                            <div class="input-block mb-3 form-focus">
                                <input type="email" class="form-control floating">
                                <label class="focus-label">Owner</label>
                            </div>
                        </div>
                       <div class="col-xl-2">  
                        <div class="input-block mb-3 form-focus">
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                            <label class="focus-label">Due Date</label>
                        </div>
                    </div>
                       <div class="col-xl-2"> 
                        <div class="input-block mb-3 form-focus">
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                            <label class="focus-label">Created at</label>
                        </div>
                    </div>
                        
                        <div class="col-xl-2"> 
                            <div class="input-block mb-3 form-focus select-focus">
                                <select class="select floating"> 
                                    <option>--Select--</option>
                                    <option>Meeting</option>
                                    <option>Calls</option>
                                    <option>Email</option>
                                    <option>Task</option>
                                </select>
                                <label class="focus-label">Activity Type</label>
                            </div>
                        </div>
                        <div class="col-xl-2">  
                             <a href="#" class="btn btn-success w-100"> Search </a>  
                        </div>     
                     </div>
                </div>
                 <hr>
            
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Recently Created Contacts
                                    <a href="#"><i class="la la-link"></i></a>
                                </h3>
                                <div class="input-block mb-0">
                                    <select class="select">
                                        <option>Last 30 days</option>
                                        <option>Last 3 months</option>
                                        <option>Last 6 months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-nowrap custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex">
                                                        <a href="contact-details.php" class="avatar"><img src="assets/img/avatar/avatar-16.jpg" alt="User Image"></a>
                                                        <a href="contact-details.php" class="profile-split d-flex flex-column">Carol Thomas<span>UI /UX Designer</span></a>
                                                    </h2>
                                                </td>
                                                <td>caroltho3@example.com</td>
                                                <td>+1 124547845</td>
                                                <td>
                                                    12 Jan 2024,10:00 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex">
                                                        <a href="contact-details.php" class="avatar"><img src="assets/img/avatar/avatar-22.jpg" alt="User Image"></a>
                                                        <a href="contact-details.php" class="profile-split d-flex flex-column">Dawn Mercha<span>Technician</span></a>
                                                    </h2>
                                                </td>
                                                <td>dawnmercha@example.com</td>
                                                <td>+1 478845447</td>
                                                <td>
                                                    20 Jan 2024,12:20 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex">
                                                        <a href="contact-details.php" class="avatar"><img src="assets/img/avatar/avatar-23.jpg" alt="User Image"></a>
                                                        <a href="contact-details.php" class="profile-split d-flex flex-column">Rachel Hampton<span>Software Developer</span></a>
                                                    </h2>
                                                </td>
                                                <td>rachel@example.com</td>
                                                <td>+1 215544845</td>
                                                <td>
                                                    15 Feb 2024,08:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex">
                                                        <a href="contact-details.php" class="avatar"><img src="assets/img/avatar/avatar-24.jpg" alt="User Image"></a>
                                                        <a href="contact-details.php" class="profile-split d-flex flex-column">Jonelle Curtiss<span>Supervisor</span></a>
                                                    </h2>
                                                </td>
                                                <td>jonelle@example.com</td>
                                                <td>+1 121145471</td>
                                                <td>
                                                    24 Feb 2024,11:00 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex">
                                                        <a href="contact-details.php" class="avatar"><img src="assets/img/avatar/avatar-23.jpg" alt="User Image"></a>
                                                        <a href="contact-details.php" class="profile-split d-flex flex-column">Jonathan<span>Team Lead Dev</span></a>
                                                    </h2>
                                                </td>
                                                <td>jonathan@example.com</td>
                                                <td>+1 321454789</td>
                                                <td>
                                                    10 Mar 2024,02:10 pm
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between card-selectsview flex-wrap row-gap-3 mb-0">
                                <h3 class="card-title mb-0">Won Deals Stage</h3>
                                <div class="card-select">
                                    <ul>
                                        <li>
                                            <select class="select">
                                                <option>Marketing Pipeline</option>
                                                <option>Pipeline</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="select">
                                                <option>Last 30 days</option>
                                                <option>Last 15 days</option>
                                                <option>Last 7 days</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div id="won-chart"></div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Recently Created Deals
                                    <a href="#"><i class="la la-link"></i></a>
                                </h3>
                                <div class="input-block mb-0">
                                    <select class="select">
                                        <option>Last 30 days</option>
                                        <option>Last 3 months</option>
                                        <option>Last 6 months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-nowrap custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Deal Name</th>
                                                <th>Stage</th>
                                                <th>Deal Value</th>
                                                <th>Probability</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="deals-details.php">Collins</a>
                                                </td>
                                                <td>Conversation</td>
                                                <td>$04,51,000</td>
                                                <td>
                                                    85 %
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-info">Open</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="deals-details.php">Konopelski</a>
                                                </td>
                                                <td>Pipeline</td>
                                                <td>$03,12,500</td>
                                                <td>
                                                    15 %
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Lost</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="deals-details.php">Adams</a>
                                                </td>
                                                <td>Won</td>
                                                <td>$04,14,800</td>
                                                <td>
                                                    95 %
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Won</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="deals-details.php">Schumm</a>
                                                </td>
                                                <td>Lost</td>
                                                <td>$9,14,400</td>
                                                <td>
                                                    47 %
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Lost</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="deals-details.php">Wisozk</a>
                                                </td>
                                                <td>Follow Up</td>
                                                <td>$11,14,400</td>
                                                <td>
                                                    98 %
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Lost</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between card-selectsview mb-0 flex-wrap row-gap-3">
                                <h3 class="card-title mb-0">Lost Leads Stage</h3>
                                <div class="card-select">
                                    <ul>
                                        <li>
                                            <select class="select">
                                                <option>Marketing Pipeline</option>
                                                <option>Pipeline</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="select">
                                                <option>Last 30 days</option>
                                                <option>Last 15 days</option>
                                                <option>Last 7 days</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div id="last-chart-2"></div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Leads By Stage
                                </h3>
                                <div class="d-flex flex-wrap row-gap-3">
                                    <div class="input-block mb-0 me-3">
                                        <select class="select">
                                            <option>Sales Pipeline</option>
                                            <option>Marketing Pipeline</option>
                                        </select>
                                    </div>
                                    <div class="input-block mb-0">
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div id="leads-chart"></div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Recently Added Companies
                                    <a href="#"><i class="la la-link"></i></a>
                                </h3>
                                <div class="title-head d-flex">
                                    <div class="input-block mb-0">
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </div>
                                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_company"><i class="la la-plus-circle"></i> Add Company</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-nowrap custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-01.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">NovaWaveLLC</a>
                                                    </h2>
                                                </td>
                                                <td>robertson@example.com</td>
                                                <td>
                                                    +1 875455453
                                                </td>
                                                <td>
                                                    12 Jan 2024,10:00 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-02.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">SilverHawk</a>
                                                    </h2>
                                                </td>
                                                <td>vaughan12@example.com</td>
                                                <td>
                                                    +1 546555455
                                                </td>
                                                <td>
                                                    20 Jan 2024,12:20 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-03.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">SummitPeak</a>
                                                    </h2>
                                                </td>
                                                <td>jessica13@example.com</td>
                                                <td>
                                                    +1 454478787
                                                </td>
                                                <td>
                                                    15 Feb 2024,08:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-04.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">RiverStone Ventur</a>
                                                    </h2>
                                                </td>
                                                <td>caroltho3@example.com</td>
                                                <td>
                                                    +1 124547845
                                                </td>
                                                <td>
                                                    24 Feb 2024,11:00 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-05.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">CoastalStar Co.</a>
                                                    </h2>
                                                </td>
                                                <td>rachel@example.com</td>
                                                <td>
                                                    +1 215544845
                                                </td>
                                                <td>
                                                    10 Mar 2024,02:10 pm
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Deals By Stage
                                </h3>
                                <div class="d-flex flex-wrap row-gap-3">
                                    <div class="input-block mb-0 me-3">
                                        <select class="select">
                                            <option>Sales Pipeline</option>
                                            <option>Marketing Pipeline</option>
                                        </select>
                                    </div>
                                    <div class="input-block mb-0">
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div id="deals-chart"></div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Activities
                                    <a href="#"><i class="la la-link"></i></a>
                                </h3>
                                <div class="title-head d-flex">
                                    <div class="input-block mb-0">
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </div>
                                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_activity"><i class="la la-plus-circle"></i> Add Activity</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="activities-list">
                                    <ul>
                                        <li>
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="activity-name">
                                                        <h5>We scheduled a meeting for next week</h5>
                                                        <p>Due Date : 10 Feb 2024, 09:00 am </p>
                                                        <span class="badge activity-badge badge-bg-violet"><i class="la la-user-tie"></i>Meeting</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="user-activity">
                                                        <span>
                                                            <img src="assets/img/avatar/avatar-19.jpg" alt="Img">
                                                        </span>
                                                        <h6>Darlee Robertson</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-block mb-0">
                                                        <select class="select">
                                                            <option>Inprogress</option>
                                                            <option>Completed</option>
                                                            <option>Todo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="activity-name">
                                                        <h5>Built landing pages</h5>
                                                        <p>Due Date : 12 Mar 2024, 08:30 am  </p>
                                                        <span class="badge activity-badge badge-bg-warning"><i class="la la-envelope"></i>Email</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="user-activity">
                                                        <span>
                                                            <img src="assets/img/avatar/avatar-16.jpg" alt="Img">
                                                        </span>
                                                        <h6>Carol Thomas</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-block mb-0">
                                                        <select class="select">
                                                            <option>Inprogress</option>
                                                            <option>Completed</option>
                                                            <option>Todo</option>
                                                        </select>
                                                    </div>
                                                </div>	
                                            </div>										
                                        </li>
                                        <li>
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="activity-name">
                                                        <h5>Call John and discuss about project</h5>
                                                        <p>Due Date : 20 Apr 2024, 03:15 pm  </p>
                                                        <span class="badge activity-badge badge-bg-success"><i class="la la-phone"></i>Calls</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="user-activity">
                                                        <span>
                                                            <img src="assets/img/avatar/avatar-20.jpg" alt="Img">
                                                        </span>
                                                        <h6>Sharon Roy</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-block mb-0">
                                                        <select class="select">
                                                            <option>Inprogress</option>
                                                            <option>Completed</option>
                                                            <option>Todo</option>
                                                        </select>
                                                    </div>
                                                </div>	
                                            </div>										
                                        </li>
                                        <li>
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="activity-name">
                                                        <h5>Store and manage contact data</h5>
                                                        <p>Due Date : 13 May 2024, 10:30 am </p>
                                                        <span class="badge activity-badge badge-bg-info"><i class="la la-tasks"></i>Task</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="user-activity">
                                                        <span>
                                                            <img src="assets/img/avatar/avatar-22.jpg" alt="Img">
                                                        </span>
                                                        <h6>Dawn Mercha</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-block mb-0">
                                                        <select class="select">
                                                            <option>Inprogress</option>
                                                            <option>Completed</option>
                                                            <option>Todo</option>
                                                        </select>
                                                    </div>
                                                </div>	
                                            </div>										
                                        </li>
                                        <li>
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="activity-name">
                                                        <h5>Regarding latest updates in project</h5>
                                                        <p>Due Date : 25 May 2024, 02:10 pm </p>
                                                        <span class="badge activity-badge badge-bg-violet"><i class="la la-user-tie"></i>Meeting</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="user-activity">
                                                        <span>
                                                            <img src="assets/img/avatar/avatar-24.jpg" alt="Img">
                                                        </span>
                                                        <h6>Jonelle Curtiss</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-block mb-0">
                                                        <select class="select">
                                                            <option>Inprogress</option>
                                                            <option>Completed</option>
                                                            <option>Todo</option>
                                                        </select>
                                                    </div>
                                                </div>	
                                            </div>										
                                        </li>
                                        <li>
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="activity-name">
                                                        <h5>Discussed budget proposal with Edwin</h5>
                                                        <p>Due Date : 05 June 2024, 05:40 pm </p>
                                                        <span class="badge activity-badge badge-bg-success"><i class="la la-phone"></i>Calls</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="user-activity">
                                                        <span>
                                                            <img src="assets/img/avatar/avatar-25.jpg" alt="Img">
                                                        </span>
                                                        <h6>Jonathan</h6>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-block mb-0">
                                                        <select class="select">
                                                            <option>Inprogress</option>
                                                            <option>Completed</option>
                                                            <option>Todo</option>
                                                        </select>
                                                    </div>
                                                </div>	
                                            </div>										
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between card-selectsview flex-wrap row-gap-3 mb-0">
                                <h3 class="card-title mb-0">Lost Leads Stage</h3>
                                <div class="card-select">
                                    <ul>
                                        <li>
                                            <select class="select">
                                                <option>Marketing Pipeline</option>
                                                <option>Pipeline</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="select">
                                                <option>Last 30 days</option>
                                                <option>Last 15 days</option>
                                                <option>Last 7 days</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div id="last-chart"></div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h3>
                                    Recently Created Leads
                                    <a href="#"><i class="la la-link"></i></a>
                                </h3>
                                <div class="input-block mb-0">
                                    <select class="select">
                                        <option>Last 30 days</option>
                                        <option>Last 3 months</option>
                                        <option>Last 6 months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-nowrap custom-table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Lead Name</th>
                                                <th>Company Name</th>
                                                <th>Phone</th>
                                                <th>Lead Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="leads-details.php">Collins</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-01.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">NovaWaveLLC <span class="d-block">Newyork, USA</span></a>
                                                    </h2>
                                                </td>
                                                <td>+1 875455453</td>
                                                <td>
                                                    <span class="badge badge-soft-success">Closed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="leads-details.php">Konopelski</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-02.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">BlueSky Industries <span class="d-block">Winchester, KY</span></a>
                                                    </h2>
                                                </td>
                                                <td>+1 989757485</td>
                                                <td>
                                                    <span class="badge badge-soft-success">Closed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="leads-details.php">Adams</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-03.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">SilverHawk <span class="d-block">Jamestown, NY</span></a>
                                                    </h2>
                                                </td>
                                                <td>+1 546555455</td>
                                                <td>
                                                    <span class="badge badge-soft-info">Not Contacted</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="leads-details.php">Schumm</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-04.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">SummitPeak <span class="d-block">Compton, RI</span></a>
                                                    </h2>
                                                </td>
                                                <td>+1 454478787</td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Contacted</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="leads-details.php">Wisozk</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-05.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">RiverStone Ventur<span class="d-block">Dayton, OH</span></a>
                                                    </h2>
                                                </td>
                                                <td>+1 124547845</td>
                                                <td>
                                                    <span class="badge badge-soft-success">Closed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="leads-details.php">Heller</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar d-flex align-items-center">
                                                        <a href="company-details.php" class="company-img"><img src="assets/img/icons/company-icon-06.svg" alt="User Image"></a>
                                                        <a href="company-details.php" class="profile-split">Bright Bridge Grp<span class="d-block">Saybrook, IL</span></a>
                                                    </h2>
                                                </td>
                                                <td>+1 478845447</td>
                                                <td>
                                                    <span class="badge badge-soft-success">Closed</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card analytics-card">
                            <div class="card-header d-flex justify-content-between card-selectsview flex-wrap row-gap-3 mb-0">
                                <h3 class="card-title mb-0">Won Leads Stage</h3>
                                <div class="card-select">
                                    <ul>
                                        <li>
                                            <select class="select">
                                                <option>Marketing Pipeline</option>
                                                <option>Pipeline</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="select">
                                                <option>Last 30 days</option>
                                                <option>Last 15 days</option>
                                                <option>Last 7 days</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div id="leads-won-chart"></div>
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
<!-- Add Activity -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="add_activity" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Add New Activity</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<form action="analytics.php">
							<div class="contact-input-set">
								<div class="row">
									<div class="col-md-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Title <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3 activity-date-picker">
											<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control floating datetimepicker" type="text">
											</div>
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="activity-date-picker input-block mb-3">
											<label class="col-form-label">Time <span class="text-danger">*</span></label>
											<div class="cal-icon time-icon">
												<input type="text" class="form-control timepicker">
												<span class="cus-icon"><i class="feather-clock"></i></span>
											</div>
										</div>									
									</div>
									<div class="col-md-6">
										<div class="activity-date-picker input-block mb-3">
											<label class="col-form-label">Reminder <span class="text-danger">*</span></label>
											<div class="cal-icon reminder">
												<input type="text" class="form-control">
												<span class="cus-icon"><i class="feather-clock"></i></span>
											</div>
										</div>									
									</div>
									<div class="col-lg-6 d-flex align-items-end">
										<div class="input-block mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Minutes</option>
													<option>Hours</option>
												</select>
											</div>
											<span class="use-before">Before Use</span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Owner <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>Monty Beer</option>
												<option>Itzel</option>
												<option>Andrew</option>
											</select>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="input-block tag-with-img mb-3">
											<label class="col-form-label">Guests <span class="text-danger">*</span></label>
											<input class="input-tags form-control" id="inputBox3" type="text" data-role="tagsinput"  name="Label" value="Darlee Robertson" >
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Description <span class="text-danger">*</span></label>
											<textarea class="form-control" rows="5"></textarea>
										</div>
									</div>
									<div class="col-md-12 deals-add-col">
										<div class="row">
											<div class="col-md-12">
												<div class="input-block mb-3">
													<div class="d-flex justify-content-between align-items-center">
														<label class="col-form-label">Deals <span class="text-danger">*</span></label>
														<a href="#" class="add-new add-new-deal"><i class="la la-plus-circle me-2"></i>Add New</a>
													</div>
													<select class="select">
														<option>Select</option>
														<option>Collins</option>
														<option>Konopelski</option>
														<option>Adams</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 contact-add-col">
										<div class="input-block mb-3">
											<div class="d-flex justify-content-between align-items-center">
												<label class="col-form-label">Contacts <span class="text-danger">*</span></label>
												<a href="#" class="add-new add-new-contact"><i class="la la-plus-circle me-2"></i>Add New</a>
											</div>
											<select class="select">
												<option>Select</option>
												<option>Darlee Robertson</option>
												<option>Sharon Roy</option>
												<option>Vaughan</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 company-add-col">
										<div class="input-block mb-3">
											<div class="d-flex justify-content-between align-items-center">
												<label class="col-form-label">Company <span class="text-danger">*</span></label>
												<a href="#" class="add-new add-new-company"><i class="la la-plus-circle me-2"></i>Add New</a>
											</div>
											<select class="select">
												<option>Select</option>
												<option>NovaWaveLLC</option>
												<option>SilverHawk</option>
												<option>SummitPeak</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12 text-end form-wizard-button">
										<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
										<button class="btn btn-primary" type="submit">Save Activity</button>
									</div>
								</div>									
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Activity -->

		<!-- Add Company -->
		<div class="modal custom-modal fade custom-modal-two modal-padding" id="add_company" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Add New Company</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="add-details-wizard">
							<ul id="progressbar" class="progress-bar-wizard">
								<li class="active">
									<span><i class="la la-user-tie"></i></span>
									<div class="multi-step-info">
										<h6>Basic Info</h6>
									</div>
								</li>
								<li>									
									<span><i class="la la-map-marker"></i></span>
									<div class="multi-step-info">
										<h6>Address</h6>
									</div>
								</li>
								<li>								
									<div class="multi-step-icon">
										<span><i class="la la-icons"></i></span>
									</div>
									<div class="multi-step-info">
										<h6>Social Profiles</h6>
									</div>
								</li>
								<li>								
									<div class="multi-step-icon">
										<span><i class="la la-images"></i></span>
									</div>
									<div class="multi-step-info">
										<h6>Access</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="add-info-fieldset">
							<fieldset id="first-field">
								<form action="analytics.php">
									<div class="form-upload-profile">
										<h6 class="">Profile Image <span> *</span></h6>
										<div class="profile-pic-upload">
											<div class="profile-pic">
												<span><img src="assets/img/icons/profile-upload-img.svg" alt="Img"></span>
											</div>
											<div class="employee-field">
												<div class="mb-0">
													<div class="image-upload mb-0">
														<input type="file">
														<div class="image-uploads">
															<h4>Upload</h4>
														</div>
													</div>
												</div>
												<div class="img-reset-btn">
													<a href="#">Reset</a>
												</div>
											</div>
										</div>
									</div>
									<div class="contact-input-set">
										<div class="row">
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Company Name <span class="text-danger">*</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<div class="d-flex justify-content-between align-items-center">
														<label class="col-form-label">Email <span class="text-danger"> *</span></label>
														<div class="status-toggle small-toggle-btn d-flex align-items-center">
															<span class="me-2 label-text">Option</span>
															<input type="checkbox" id="user2" class="check" checked="">
															<label for="user2" class="checktoggle"></label>
														</div>
													</div>
													<input class="form-control" type="email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Phone Number 1<span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Phone Number 2 <span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Fax <span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Website</label>
													<input class="form-control" type="text">
												</div>
											</div>										
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Reviews <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Lowest</option>
														<option>Highest</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Owner <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Hendry</option>
														<option>Guillory</option>
														<option>Jami</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Tags <span class="text-danger">*</span></label>
													<input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="Label" value="Promotion, Rated" >
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<div class="d-flex justify-content-between align-items-center">
														<label class="col-form-label">Deals <span class="text-danger">*</span></label>
														<a href="#" class="add-new"><i class="la la-plus-circle me-2"></i>Add New</a>
													</div>
													<select class="select">
														<option>Select</option>
														<option>Collins</option>
														<option>Konopelski</option>
														<option>Adams</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Industry <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Barry Cuda</option>
														<option>Tressa Wexler</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Source <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Barry Cuda</option>
														<option>Tressa Wexler</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Contact <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Email</option>
														<option>Call</option>
														<option>Skype</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Currency <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>$</option>
														<option>€</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Language <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>English</option>
														<option>French</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">About Company<span class="text-danger">*</span></label>
													<textarea class="form-control" rows="5"></textarea>
												</div>
											</div>
											<div class="col-lg-12 text-end form-wizard-button">
												<button class="button btn-lights reset-btn" type="reset">Reset</button>
												<button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
											</div>
										</div>									
									</div>
								</form>
							</fieldset>
							<fieldset>
								<form action="analytics.php">
									<div class="contact-input-set">
										<div class="row">
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Street Address<span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">City <span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">State / Province <span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Country <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Germany</option>
														<option>USA</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-block mb-3">
													<label class="col-form-label">Zipcode <span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-lg-12 text-end form-wizard-button">
												<button class="button btn-lights reset-btn" type="reset">Reset</button>
												<button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
											</div>
										</div>									
									</div>
								</form>
							</fieldset>
							<fieldset>
								<form action="analytics.php">
									<div class="contact-input-set">
										<div class="row">
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Facebook</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Twitter</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Linkedin</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Skype</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Whatsapp</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Instagram</label>
													<input class="form-control" type="text">
												</div>
											</div>	
											<div class="col-lg-12">
												<div class="input-block mb-3">
													<a href="#" class="add-new"><i class="la la-plus-circle me-2"></i>Add New</a>
												</div>
											</div>	
											<div class="col-lg-12 text-end form-wizard-button">
												<button class="button btn-lights reset-btn" type="reset">Reset</button>
												<button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
											</div>
										</div>									
									</div>
								</form>
							</fieldset>
							<fieldset>
								<form action="analytics.php">
									<div class="contact-input-set">
										<div class="input-blocks add-products">
											<label class="mb-3">Visibility</label>
											<div class="access-info-tab">
												<ul class="nav nav-pills" id="pills-tab1" role="tablist">
													<li class="nav-item" role="presentation">
														<span class="custom_radio mb-0" id="pills-public-tab" data-bs-toggle="pill" data-bs-target="#pills-public"  role="tab" aria-controls="pills-public" aria-selected="true">
														<input type="radio" class="form-control" name="public" checked>
														<span class="checkmark"></span> Public</span>
													</li>
													<li class="nav-item" role="presentation">
														<span  class="custom_radio mb-0" id="pills-private-tab" data-bs-toggle="pill" data-bs-target="#pills-private"  role="tab" aria-controls="pills-private" aria-selected="false">
														<input type="radio" class="form-control" name="private">
														<span class="checkmark"></span> Private</span>
													</li>
													<li class="nav-item" role="presentation">
														<span  class="custom_radio mb-0 active" id="pills-select-people-tab" data-bs-toggle="pill" data-bs-target="#pills-select-people"  role="tab" aria-controls="pills-select-people" aria-selected="false">
														<input type="radio" class="form-control" name="select-people">
														<span class="checkmark"></span> Select People</span>
													</li>
												</ul>
											</div>
										</div>		
										<div class="tab-content" id="pills-tabContent">
											<div class="tab-pane fade" id="pills-public" role="tabpanel" aria-labelledby="pills-public-tab">

											</div>
											<div class="tab-pane fade" id="pills-private" role="tabpanel" aria-labelledby="pills-private-tab">
											</div>
											<div class="tab-pane fade show active" id="pills-select-people" role="tabpanel" aria-labelledby="pills-select-people-tab">
												<div class="people-select-tab">
													<h3>Select People</h3>
													<div class="select-people-checkbox">
														<label class="custom_check">
															<input type="checkbox">													
															<span class="checkmark"></span>
															<span class="people-profile">
																<img src="assets/img/avatar/avatar-19.jpg" alt="Img">
																<a href="#">Darlee Robertson</a>
															</span>
														</label>
													</div>
													<div class="select-people-checkbox">
														<label class="custom_check">
															<input type="checkbox">													
															<span class="checkmark"></span>
															<span class="people-profile">
																<img src="assets/img/avatar/avatar-20.jpg" alt="Img">
																<a href="#">Sharon Roy</a>
															</span>
														</label>
													</div>
													<div class="select-people-checkbox">
														<label class="custom_check">
															<input type="checkbox">													
															<span class="checkmark"></span>
															<span class="people-profile">
																<img src="assets/img/avatar/avatar-21.jpg" alt="Img">
																<a href="#">Vaughan</a>
															</span>
														</label>
													</div>
													<div class="select-people-checkbox">
														<label class="custom_check">
															<input type="checkbox">													
															<span class="checkmark"></span>
															<span class="people-profile">
																<img src="assets/img/avatar/avatar-1.jpg" alt="Img">
																<a href="#">Jessica</a>
															</span>
														</label>
													</div>
													<div class="select-confirm-btn">
														<a href="#" class="btn danger-btn">Confirm</a>
													</div>
												</div>
											</div>
										</div>	
										<h5 class="mb-3">Status</h5>
										<div class="status-radio-btns d-flex mb-3">
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="test1" name="radio-group" checked>
												<label for="test1">Active</label>
											</div>
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="test2" name="radio-group">
												<label for="test2">Private</label>
											</div>
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="test3" name="radio-group">
												<label for="test3">Inactive</label>
											</div>
										</div>		
										<div class="col-lg-12 text-end form-wizard-button">
											<button class="button btn-lights reset-btn" type="reset">Reset</button>
											<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#success_msg">Save & Next</button>
										</div>			
									</div>
								</form>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Company -->

		<!-- Export -->
		<div class="modal custom-modal fade modal-padding" id="export" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header header-border justify-content-between p-0">
						<h5 class="modal-title">Export</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<form action="analytics.php">
							<div class="row">
								<div class="col-md-12">
									<div class="input-block mb-3">
										<h5 class="mb-3">Export</h5>
										<div class="status-radio-btns d-flex">
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="pdf" name="export-type" checked>
												<label for="pdf">Person</label>
											</div>
											<div class="people-status-radio">
												<input type="radio" class="status-radio" id="excel" name="export-type">
												<label for="excel">Organization</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<h4 class="mb-3">Filters</h4>
									<div class="input-block mb-3">
										<label class="col-form-label">Fields <span class="text-danger">*</span></label>
										<select class="select">
											<option>All Fields</option>
											<option>contact</option>
											<option>Company</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-block mb-3">
										<label class="col-form-label">From Date <span class="text-danger">*</span></label>
										<div class="cal-icon">									
											<input class="form-control floating datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-block mb-3">
										<label class="col-form-label">To Date <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control floating datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-lg-12 text-end form-wizard-button">
									<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
									<button class="btn btn-primary" type="submit">Export Now</button>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /Export -->
<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>