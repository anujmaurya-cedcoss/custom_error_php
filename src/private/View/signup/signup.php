<?php
if(isset($_GET['msg'])) {
    echo "<h3>$_GET[msg]</h3>";
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sign Up</title>
</head>

<body>
    <div class="signup-form">
        <section class="vh-100 bg-image"
            style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                    <form action="../../Controller/signupController.php" method="POST">

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1cg" name='name'
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1cg">Your Name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3cg" name='email'
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3cg">Your Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example4cg" name='pass'
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cg">Password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4cdg" name='repass'
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cdg">Repeat your
                                                password</label>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit"
                                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                        </div>
                                        <p style="color:red;text-align:center">
                                            <?php
                                            if (isset($_GET)) {
                                                if ($_GET['msg'] == 'Error')
                                                    echo "Please fill all details !";
                                            }
                                            ?>
                                        </p>
                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                                href="../login/login.php" class="fw-bold text-body"><u>Login
                                                    here</u></a></p>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="./script.js"></script>

</html>