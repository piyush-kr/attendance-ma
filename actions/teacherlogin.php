<?php
session_start();

if (!isset($_SESSION['is-login'])) {

    if (isset($_POST['t-login'])) {

        $conn = mysqli_connect('localhost', 'root', '', 'attendancemgmt') or die("Connection Failed:" . mysqli_connect_error());

        if (isset($_POST['t-email']) && isset($_POST['t-password'])) {
            $email = $_POST['t-email'];
            $password = $_POST['t-password'];

            $sql = " select * from teachers where email='" . $email . "' AND password='" . $password . "' limit 1 ";



            $query = mysqli_query($conn, $sql);

            if (mysqli_num_rows($query) == 1) {

                $sqlname = "select name from teachers where email='" . $email . "' ";

                $username = mysqli_query($conn, $sql);

                $username = mysqli_fetch_assoc($username);


                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $username["name"];
                $_SESSION['access'] = "teacher";

                header("Location: ../pages/teacherdash.php");

            } else {
                echo "Invalid credentials";
            }
        }




    } else {
        header("Location: ../pages/teacherdash.php");
    }
}
?>