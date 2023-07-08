<?php
require("dash.php");
require("config.php");
?>
<?php
$query = "SELECT * FROM employee_details";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $salary = $_POST['salary'];
    $bamount = $_POST['bamount'];
    $today = date("Y/m/d");
    $sql = "INSERT INTO employee (name,em_id,Salary,balance_prev_month,dates)
            VALUES ('$name','$id','$salary','$bamount','$today')";

    if ($conn->query($sql) === TRUE) {
        $msg = "Employee salary added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- Main Content -->
<div class="hk-pg-wrapper" style="background-image: url('./dist/img/1.avif');background-size:cover;">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="get-in-touch">
                    <h1 class="title">Add Employee</h1>
                    <?php
                    if (isset($msg)) {
                        echo '<div class="alert alert-danger font-weight-bold" role="alert">' . $msg . '</div>';
                    }
                    ?>
                    <form class="contact-form row" method="POST" action="">
                        <div class="form-field col-lg-6">
                                <label>Select Employee</label>
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
                            <input id="name" name="name" class="input-text js-input" type="hidden"
                                placeholder="name" value="">
                        </div>
                        <div class="form-field col-lg-6 ">
                        <label>Prefered Salary</label>
                            <input id="balanceIncome" name="balance" class="input-text js-input"
                                type="number" placeholder="Prefered salary" value="" readonly>
                        </div>
                        <div class="form-field col-lg-6 ">
                        <label>Present month salary</label>
                            <input id="csalary" name="salary" class="input-text js-input" type="number"
                                placeholder="Salary" value="" required>
                        </div>
                        <div class="form-field col-lg-6 ">
                        <label>Amount from previous month</label>
                            <input id="bamount" style="color:red;font-weight:bold;background-color:yellow;" name="bamount" class="input-text js-input" type="text"
                                placeholder="Balance from previous Month" value="" required>
                        </div>
                        <div class="form-field col-lg-12">
                            <input class="submit-btn" type="submit" name="submit" value="Submit">
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
                url: 'getuser1.php',
                dataType: "json",
                data: dataString,
                cache: false,
                success: function (employeeData) {
                    if (employeeData) {
                        let firstChar = employeeData.b.Salary.charAt(0);
                        let firstChar1 = employeeData.b.Salary.charAt(1);
                      if(firstChar=='-')
                       {
                        bsalary=parseInt(employeeData.a.Salary)+parseInt(employeeData.b.Salary);
                        ms="Over Amount";
                       }
                       else{
                        bsalary=parseInt(employeeData.a.Salary)+parseInt(employeeData.b.Salary);
                        ms="";
                       }
                        $("#balanceIncome").val(employeeData.a.Salary);
                        $("#bamount").val(employeeData.b.Salary+"   "+ms);
                        $("#csalary").val(bsalary);
                        $("#name").val(employeeData.a.name);
                    } else {
                        $("#balanceIncome").hide();
                    }
                }
            });
        })
    })
</script>

</body>

</html>