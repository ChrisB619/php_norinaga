<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Under Maintenance - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body class="bg-white">

   
   <!-- Main Wrapper -->
   <div class="main-wrapper">
			<div class="under-maintenance text-center">
                <div class="container">
                    <div class="maintenance-page">
                        <div class="maintenance-bg">
                            <img src="assets/img/bg/maintenance-bg-01.png" class="small-bg-one" alt="Img">
                            <img src="assets/img/bg/maintenance-bg-02.png" class="small-bg-two" alt="Img">
                            <img src="assets/img/bg/maintenance-bg-03.png" class="small-bg-three" alt="Img">
                            <img src="assets/img/bg/maintenance-bg-04.png" class="small-bg-four" alt="Img">
                            <img src="assets/img/bg/maintenance-bg-05.png" class="small-bg-five" alt="Img">
                        </div>
                        <div class="maintenance-img text-center">
                            <img src="assets/img/maintenance-img.png" class="img-fluid" alt="Img">
                        </div>
                        <div class="maintenance-content">
                            <h3>Under Maintenance</h3>
                            <p>The server is in a maintenance mode, please come back later or
                                <a href="#">click here</a> to create ticket if it’s urgent 
                            </p>
                            <a href="admin-dashboard.php" class="btn btn-custom btn-primary">Back to Dashboard<i class="la la-arrow-alt-circle-right ms-2"></i></a>
                        </div>
                       
                    </div>
                </div>
			</div>
		
        </div>
		<!-- /Main Wrapper -->


<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>