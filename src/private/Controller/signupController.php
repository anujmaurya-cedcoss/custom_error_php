<?php
if (isset($_POST)) {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
    $repass = isset($_POST['repass']) ? $_POST['repass'] : "";
}
if ($name != "" && $email != "" && $pass != "" && $pass == $repass) {
    $success = "All details are filled";
    header("location:../View/signup/signup.php?msg=$success");
} else {
    $error = "Please fill all the values correctly";
    header("location:../View/signup/signup.php?msg=$error");
}
