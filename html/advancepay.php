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
    $balance = $_POST['balance'];
    $dates = $_POST['dates'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $adamount = $_POST['adamount'];
    $current_amount = $balance - $adamount;
    $sql = "INSERT INTO employee_adv_history (em_id,name,balance_amount,advance_amount,dates)
     VALUES ('$id','$name','$current_amount','$adamount','$dates')";
    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE employee SET Salary=$current_amount WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
                    <h1 class="title">Add Advance Payment</h1>
                    <form class="contact-form" method="POST" action="">
                        <div class="row alert alert-warning">
                            <div class="form-field col-lg-6 ">
                                <label>Balance Amount</label>
                            </div>
                            <div class="form-field col-lg-6 ">
                                <input id="balanceIncome" name="balance"
                                    style="color:red;font-weight:bold;background-color:yellow;"
                                    class="input-text js-input" type="number" placeholder="Balance Amount" value=""
                                    readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field col-lg-6 ">
                                <label>Select Date</label>
                            </div>
                            <div class="form-field col-lg-6 ">
                                <input id="dd" name="dates" class="input-text js-input" type="text" placeholder="Date"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field col-lg-6">
                                <label>Select Employee</label>
                            </div>
                            <div class="form-field col-lg-6 ">
                                <select id="employee" name="id" class="input-text js-input" required>
                                    <option value="">--- Select Employee ---</option>
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
                                <input id="name" name="name" class="input-text js-input" type="hidden" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field col-lg-6 ">
                                <label>Advance Amount</label>
                            </div>
                            <div class="form-field col-lg-6 ">
                                <input id="adamount" name="adamount" class="input-text js-input" type="number"
                                    placeholder="Advance Amount" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field col-lg-12">
                                <center>
                                    <input class="submit-btn" type="submit" name="submit" value="Submit">
                                </center>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <!-- /Row -->
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
        $("#employee").change(function () {
            var id = $(this).find(":selected").val();
            var dataString = 'empid=' + id;
            $.ajax({
                url: 'getuser.php',
                dataType: "json",
                data: dataString,
                cache: false,
                success: function (employeeData) {
                    if (employeeData) {
                        $("#balanceIncome").val(employeeData.Salary);
                        $("#name").val(employeeData.name);
                    } else {
                        $("#balanceIncome").hide();
                    }
                }
            });
        })
        $("#dd").datepicker({
            dateFormat: "dd-mm-yy"
        }).datepicker("setDate", "0");
    })
</script>

</body>

</html>