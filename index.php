<?php include('components/header.php') ?>


<div class="col-lg-12 position-absolute w-100">
    <div class="mx-auto card" style="height: 0px;">
        <div class="card-body" style=" transform: scale(0.8); margin-top: -20px;">
            <h1 class="text-center">Attendance Management System</h1>
        </div>
    </div>
</div>

<section class="vh-100" style="transform: scale(0.9);">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="./assets/loginsvg.svg" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="actions/studentlogin.php" method="POST">
                    <h3 class="text-center my-5">Student Login</h3>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input name="s-email" type="email" id="form1Example13" class="form-control form-control-lg"
                            placeholder="Email id" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input name="s-password" type="password" id="form1Example23"
                            class="form-control form-control-lg" placeholder="Password" />

                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">



                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="s-login">Sign in</button>


                    <div class="d-flex justify-content-center my-5"><a href="pages/teacherlogin.php"
                            class="link">TEACHER
                            LOGIN</a></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- MDB -->

<?php include('components/footer.php') ?>