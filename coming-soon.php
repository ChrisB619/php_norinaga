<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Coming Soon - HRMS admin template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>
    <body class="bg-white">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="coming-soon text-center">
                <div class="container">
                    <div class="coming-soon-page">
                        <div class="coming-soon-img text-center">
                            <img src="assets/img/coming-soon.png" class="img-fluid" alt="Img">
                        </div>
                        <div class="coming-soon-countdown">
                            <p>Please check back later, We are working hard  to get everything  just  right.</p>
                            <ul>
                                <li class="counter-text">
                                    <span>05</span>
                                    Days
                                </li>
                                <li class="seperate-dot">:</li>
                                <li class="counter-text">
                                    <span>02</span>
                                    Hours
                                </li>
                                <li class="seperate-dot">:</li>
                                <li class="counter-text">
                                    <span>10</span>
                                    Minutes
                                </li>
                                <li class="seperate-dot">:</li>
                                <li class="counter-text">
                                    <span>40</span>
                                   Seconds
                                </li>
                            </ul>
                        </div>
                        <div class="subscribe-form">
                            <form action="coming-soon.php">
                                <label class="form-label">Subscribe to get notified</label>
                                <div class="subscribe-box">
                                    <input type="email" class="form-control" placeholder="Enter you Email">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-linkedin"></i></a></li>
                            <li><a href="#"><i class="la la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
			</div>
		
        </div>
		<!-- /Main Wrapper -->

    <?php include 'layouts/vendor-scripts.php'; ?>

</body>

</html>