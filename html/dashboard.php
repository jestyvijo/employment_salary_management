<?php
require("dash.php");
?>

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-12">
								
								<div class="hk-row">							
									<div class="col-md-6 col-sm-6">
										<div class="card card-sm bg-warning">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">New User</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill">7</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">7</span>
													<small class="d-block">New requirement by users</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="card card-sm bg-primary">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">User Processing</span>
													</div>
													<div>
														<span class="badge badge-danger badge-pill">10</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">10</span>
													<small class="d-block">Designing Artworks</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="card card-sm bg-success">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">User Completed</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill">5</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">5</span>
													<small class="d-block">Uploaded Artworks</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="card card-sm bg-danger">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Delivered</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered">60</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">60</span>
													<small class="d-block">Orders fulfilled</small>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
            <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Data Table</h5>
                        <div class="container mt-xl-50 mt-sm-30 mt-15">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table  id="datable_1"  class="table tablesaw table-hover w-100 display mb-30 tablesaw-sortable 
                                                tablesaw-columntoggle bg-secondary" data-tablesaw-mode="columntoggle" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" 
                                                data-tablesaw-minimap="" data-tablesaw-mode-switch="" style="" >
                                            <thead>
                                                <tr>
                                                    <th>Orders</th>
                                                    <th>Category</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">1</td>
                                                    <td class="tablesaw-priority-2">2500</td>
                                                    <td class="tablesaw-priority-1">20.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">5</td>
                                                    <td class="tablesaw-priority-2">4000</td>
                                                    <td class="tablesaw-priority-1">17.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">2</td>
                                                    <td class="tablesaw-priority-2">2500</td>
                                                    <td class="tablesaw-priority-1">24.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">3</td>
                                                    <td class="tablesaw-priority-2">3000</td>
                                                    <td class="tablesaw-priority-1">26.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">4</td>
                                                    <td class="tablesaw-priority-2">3500</td>
                                                    <td class="tablesaw-priority-1">29.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">2</td>
                                                    <td class="tablesaw-priority-2">2500</td>
                                                    <td class="tablesaw-priority-1">19.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">6</td>
                                                    <td class="tablesaw-priority-2">4500</td>
                                                    <td class="tablesaw-priority-1">20.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">1</td>
                                                    <td class="tablesaw-priority-2">2500</td>
                                                    <td class="tablesaw-priority-1">21.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">3</td>
                                                    <td class="tablesaw-priority-2">3000</td>
                                                    <td class="tablesaw-priority-1">25.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">5</td>
                                                    <td class="tablesaw-priority-2">4000</td>
                                                    <td class="tablesaw-priority-1">27.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr><tr>
                                                    <td class="title tablesaw-swipe-cellpersist"><a href="javascript:void(0)">Wedding Invitation</a></td>
                                                    <td class="tablesaw-priority-3">4</td>
                                                    <td class="tablesaw-priority-2">3500</td>
                                                    <td class="tablesaw-priority-1">30.10.2020</td>
                                                    <td class="tablesaw-priority-4">Completed</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
            </div>	
            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">MaxBook</a> © 2023</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4">
                            <span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4">
                            <span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4">
                            <span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Tablesaw JavaScript 
    <script src="vendors/tablesaw/dist/tablesaw.jquery.js"></script>
    <script src="dist/js/tablesaw-data.js"></script>-->

    <!-- Data Table JavaScript -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dist/js/dataTables-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="vendors/raphael/raphael.min.js"></script>
    <script src="vendors/morris.js/morris.min.js"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="vendors/echarts/dist/echarts-en.min.js"></script>
    
	<!-- Sparkline JavaScript -->
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Vector Maps JavaScript -->
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/vectormap-data.js"></script>


	<!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Toastr JS -->
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
	
</body>

</html>