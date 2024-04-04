<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <meta charset="utf-8" />
    <title>Register | HRMS admin template</title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>
</head>

<body class="account-page">
	
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">
            
                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="admin-dashboard.php"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div>
                <!-- /Account Logo -->
                
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Register</h3>
                        <p class="account-subtitle">Access to our dashboard</p>
                        
                        <!-- Account Form -->
                        <form action="admin-dashboard.php">
                            <div class="input-block mb-4">
                                <label class="col-form-label">Email<span class="mandatory">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="input-block mb-4">
                                <label class="col-form-label">Password<span class="mandatory">*</span></label>
                                <input class="form-control" type="password">
                            </div>
                            <div class="input-block mb-4">
                                <label class="col-form-label">Repeat Password<span class="mandatory">*</span></label>
                                <input class="form-control" type="password">
                            </div>
                            <div class="input-block mb-4 text-center">
                                <button class="btn btn-primary account-btn" type="submit">Register</button>
                            </div>
                            <div class="account-footer">
                                <p>Already have an account? <a href="index.php">Login</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->
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