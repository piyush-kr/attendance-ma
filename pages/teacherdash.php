<?php include('../components/header.php') ?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'attendancemgmt') or die("Connection Failed:" . mysqli_connect_error());
session_start();
if ($_SESSION['is_login'] && $_SESSION['access'] == "teacher") {
    $username = $_SESSION['username'];
} else {
    header("Location: teacherlogin.php");
}
?>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#000000;">
    <!-- Container wrapper -->
    <div class="container d-flex ">

        <!-- Navbar brand -->
        <a class="navbar-brand flex-grow-1" href="#">
            Welcome <?php echo $username ?>
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto;">

                <!-- Link -->
                <li class="nav-item d-flex justify-content-between">
                    <a class="nav-link active" href="#">Classes</a>
                    <a class="nav-link" href="teacherdashstudents.php">Students</a>
                    <a class="nav-link" href="#">Attendance</a>
                    <a class="nav-link" href="../actions/logout.php">Logout</a>
                </li>

            </ul>

        </div>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<?php
$sql = " select * from class ";
$classdata = mysqli_query($conn, $sql);
$totalclass = mysqli_num_rows($classdata);

?>


<div class="container" style="
margin-top: 50px;
">
    <h1 class="" style="
    color: black;
    font-family: sans-serif;
    
    ">Assigned Classes : <span style="font-weight: bold; margin-left: 10px;"> <?php echo $totalclass ?>
        </span></h1>
</div>

<?php

if ($totalclass) {

?>

<div class="container my-5 d-flex flex-column">

    <?php

    while ($class = mysqli_fetch_assoc($classdata)) {

        echo "
        <h3 class='my-3'><a href='#'>" . $class['name'] . "</a>
        <span class='td-dept'>" . $class['department'] . "</span>
        </h3>
        ";

    }
}


    ?>

</div>

<div class="container" onclick="addclass()"><button class="td-addclass">Add Class</button></div>

<div class="container td-addclassform">
    <div class="form-outline my-3">
        <input type="text" id="form12" class="form-control" />
        <label class="form-label" for="form12">Class name</label>
    </div>
    <div class="form-outline my-3">
        <input type="text" id="form12" class="form-control" />
        <label class="form-label" for="form12">Department and Semester</label>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    const addclass = () => {

    }
</script>



<?php include('../components/footer.php') ?>