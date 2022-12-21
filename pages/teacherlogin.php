<?php include('../components/header.php') ?>

<div class="container-fluid overflow-hidden d-flex justify-content-center">

    <div style="height: 100vh; margin: -30px; width: min(500px,80vw);"
        class="d-flex justify-content-center align-items-center">
        <form class="w-100" action="../actions/teacherlogin.php" method="POST">
            <h3 class="text-center my-5">Teacher Login</h3>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" name="t-email" required />
                <label class="form-label" for="form1Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" name="t-password" required />
                <label class="form-label" for="form1Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->


            <!-- Submit button -->
            <button type="submit" name="t-login" class="btn btn-primary btn-block">Sign in</button>

            <div class="d-flex justify-content-center my-5"><a href="./teacherlogin.php" class="link">STUDENT LOGIN</a>
            </div>
        </form>
    </div>
</div>

<?php include('../components/footer.php') ?>