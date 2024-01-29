<?php 
require './class.php';
if(isset($_POST['submit'])) {

    $smail = $_POST['username'];
    $spassword = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $smail);
    $password = mysqli_real_escape_string($conn, $spassword);
    
    $login = new Code();
    $login->login($email, $password);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='icon' href="../assets/images/nirmaaniitm.svg" type='type="image/icon type'></link>
    <link rel='stylesheet' href="../assets/bootstrap/css/bootstrap.min.css"/>
    <link rel='stylesheet' href='../style.css'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12 col-sm-6 mb-3">
                    <center><img src="../assets/images/nirmaaniitm.svg" width='150px'></img></center><br>
                    <center><h5 class="pt-2"><b>Startup Management System - Finance</b></h5></center>
            </div>
            <div class="col-lg-12 login-color">
                    <div class="row">
                    <center>
                            <div class="col-md-4 col-sm-12 login-color">
                                <div class="card mt-5 mb-5">
                                    <div class="card-body text-left">
                                        <h3 class="font-italic"><b>Login</b></h3><br>
                                        <form method="post" action="" id="login-form">
                                            <div class="input-group mb-4">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control form-control-sm" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required autofocus>
                                            </div>
                                            <div class="input-group mb-4">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                                <input type="password" class="form-control form-control-sm" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-success btn-sm">Login</button>
                                            <div class="d-flex justify-content-between mt-4">
                                                <a class="textnone" href="#">Forgot Password</a>
                                                <a class="textnone" href="../"><i>Home</i></a>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <a class="textnone" href="signup.php">Sign Up</a>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                    </center>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>