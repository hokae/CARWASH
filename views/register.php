
<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/dist/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-image" style="background-image: url('../images/lg2.jpg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="position: relative; overflow: hidden;">
                                <video autoplay loop muted style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                    <source src="../images/car.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <!-- Your background here -->
                                <div class="content" style="position: relative; padding-top: 70px;">
                                    <img src="../images/was.png" alt="">
                                </div>
                            </div>           
                            <div class="col-lg-6 bg-secondary bg-gradient">     
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">REGISTER</h1>
                                    </div>
                                    <form action="../page/authentication.php?function=register&&sub_page=register" method="POST">
                                       
                                        <div class="form-group">
                                           
                                            <input type="text" id="name" name="name" class="form-control form-control-user" placeholder="Full name" required aria-label="Full name">
                                        </div>
                                        <div class="form-group">
                                           
                                            <input type="email" id="email"  name="email" class="form-control form-control-user" placeholder="Email" required aria-label="Email">
                                        </div>
                                        <div class="form-group">
                                           
                                            <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password" required aria-label="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-user" placeholder="Confirm Password" required aria-label="Confirm Password">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block">Register</button>
                                        <hr>
                                            <a href="#" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                            <a href="#" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                            </a>
                                        <hr>
                                        <div class="text-center">
                                            <p> <a class="small text-success" href="authentication.php?sub_page=login">Already have an account?</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./assets/dist/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/dist/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/dist/js/sb-admin-2.min.js"></script>

</body>

</html>