<?php include('../components/header.php') ?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'attendancemgmt') or die("Connection Failed:" . mysqli_connect_error());
session_start();
if ($_SESSION['is_login'] && $_SESSION['access'] == "student") {
    $username = $_SESSION['username'];
} else {
    header("Location: ../index.php");
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
        <div><a style="color: white" class="nav-link" href="../actions/logout.php">Logout</a></div>

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
    
    ">Total Classes : <span style="font-weight: bold; margin-left: 10px;"> <?php echo $totalclass ?>
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

<div class="container">
    <h3>Total Cumulative attendance</h3>
    <h4>
        <?php
        $sql = " select attendance from students where name = '" . $username . "' ";
        $attendance = mysqli_query($conn, $sql);
        $adata = mysqli_fetch_assoc($attendance);
        echo $adata['attendance'] . "%";
        ?>
    </h4>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    const addclass = () => {

    }
</script>



<?php include('../components/footer.php') ?>