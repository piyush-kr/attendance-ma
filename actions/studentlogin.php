<?php
session_start();

if (!isset($_SESSION['is-login'])) {

    if (isset($_POST['s-login'])) {

        $conn = mysqli_connect('localhost', 'root', '', 'attendancemgmt') or die("Connection Failed:" . mysqli_connect_error());

        if (isset($_POST['s-email']) && isset($_POST['s-password'])) {
            $email = $_POST['s-email'];
            $password = $_POST['s-password'];

            $sql = " select * from students where email='" . $email . "' AND password='" . $password . "' limit 1 ";



            $query = mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) == 1) {

                $sqlname = "select name from students where email='" . $email . "' ";

                $username = mysqli_query($conn, $sql);

                $username = mysqli_fetch_assoc($username);


                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username["name"];
                $_SESSION['access'] = "student";

                header("Location: ../pages/studentdash.php");

            } else {
                echo "Invalid credentials";
            }
        }




    } else {
        header("Location: pages/studentdash.php");
    }
}
?>