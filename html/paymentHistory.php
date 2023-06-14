<?php
require("dash.php");
require("config.php");
?>
<?php
$query = "SELECT * FROM employee";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $dates1 = $_POST['dates1'];
    $dates2 = $_POST['dates2'];
    $sql = "SELECT * FROM employee_adv_history WHERE (dates BETWEEN '$dates1' AND '$dates2') AND em_id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}
?>
<!-- Main Content -->
<div class="hk-pg-wrapper" style="background-image: url('./dist/img/1.avif');background-size:cover;">
    <!-- Container -->
    <div class="container mt-xl-15 mt-sm-30 mt-15">

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="get-in-touch">
                    <h1 class="title">Pay Report</h1>
                    <form class="contact-form" method="POST" action="">
                        <div class="row">
                            <div class="form-field col-lg-3 ">
                                <label>Employee</label>
                            </div>
                            <div class="form-field col-lg-3 ">
                                <label>Start Date</label>
                            </div>
                            <div class="form-field col-lg-3 ">
                                <label>End Date</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field col-lg-3">
                                <select id="employee" name="id" class="input-text js-input" required>
                                    <option value="">--Employee--</option>
                                    <?php
                                    foreach ($options as $option) {
                                        ?>
                                        <option value="<?php echo $option['id']; ?>">
                                            <?php echo $option['name']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-field col-lg-3">
                                <input id="dd1" name="dates1" class="input-text js-input dd" type="text"
                                    placeholder="Date" required>
                            </div>
                            <div class="form-field col-lg-3">
                                <input id="dd2" name="dates2" class="input-text js-input dd" type="text"
                                    placeholder="Date" required>
                            </div>
                            <div class="form-field col-lg-3">
                                <input class="submit-btn" type="submit" name="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hk-sec-wrapper">
                    <div class="container mt-xl-50 mt-sm-30 mt-15">
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <div style="margin-left:427px;margin-top:-28px;font-size:20px;font-weight:bold;color:purple;">
                                    <a href="<?php echo 'tcpdf/examples/payreport.php?id='.$id.'&date1='. $dates1.'&date2='. $dates2;?>"  target="_blank"
                                        <i class="fa fa-print" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<span>Print</span>
                                    </a>
                                    </div>
                                    <table id="datable_1" class="table tablesaw table-hover w-100 display mb-30 tablesaw-sortable 
                                                tablesaw-columntoggle bg-secondary" data-tablesaw-mode="columntoggle"
                                        data-tablesaw-sortable="" data-tablesaw-sortable-switch=""
                                        data-tablesaw-minimap="" data-tablesaw-mode-switch="" style="">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            if (isset($datas)) {
                                                foreach ($datas as $data) {
                                            ?>
                                            <tr>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['advance_amount']; ?></td>
                                                <td><?php echo $data['dates']; ?></td>
                                            </tr>
                                            <?php
                                                }
                                            }
                                            ?>
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
                    <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">MaxBook</a> © 2023
                    </p>
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
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>

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
<script>
    $(document).ready(function () {
        $("#dd1").datepicker({
            dateFormat: "dd-mm-yy"
        }).datepicker("setDate", "0");
        $("#dd2").datepicker({
            dateFormat: "dd-mm-yy"
        }).datepicker("setDate", "0");
    })
</script>

</body>

</html>