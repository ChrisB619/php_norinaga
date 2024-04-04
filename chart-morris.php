<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>SmartHR - HRMS admin template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <?php include 'layouts/menu.php'; ?>
         <!-- Page Wrapper -->
         <div class="page-wrapper">
                <div class="content container-fluid pb-0">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Morris Chart</h5>
						</div>	
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Bar Chart</h5>
								</div>
								<div class="card-body">
									<div id="morrisBar1"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Stacked Bar Chart </h5>
								</div>
								<div class="card-body">
									<div id="morrisBar3"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
									<div class="card-header">
										<h5 class="card-title">Line Chart</h5>
									</div>
									<div class="card-body">
										<div id="morrisLine1"></div>
									</div>
								</div>
						</div>
						<!-- /Chart -->
						
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
									<div class="card-header">
										<h5 class="card-title">Area Chart</h5>
									</div>
									<div class="card-body">
										<div id="morrisArea1"></div>
									</div>
								</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Line Chart</h5>
								</div>
								<div class="card-body">
									<div id="morrisBar6"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Line Chart</h5>
								</div>
								<div class="card-body">
									<div id="morrisBar7"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Donut Chart</h5>
								</div>
								<div class="card-body">
									<div id="morrisDonut1"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
          
        </div>
        <!-- /Main Wrapper -->

        <?php include 'layouts/customizer.php'; ?>

        <?php include 'layouts/vendor-scripts.php'; ?>

    </body>

</html>