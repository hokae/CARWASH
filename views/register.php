<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/dist/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<section id="forms" class="forms section-padding">
        <div class="wrapper">
            <form action="../page/authentication.php?function=register&&sub_page=register" method="POST">
                <h1>REGISTER</h1>
                <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="name" placeholder="Full name" required aria-label="Full name">
                </div>
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Email" required aria-label="Email">
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required aria-label="Password">
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required aria-label="Confirm Password">
                </div>
                <button type="submit" class="low">Register</button>
                <div class="register-link">
                    <p> <a href="authentication.php?sub_page=login">Already have an account?</a></p>
                </div>
            </form>
        </div>
    </section>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/dist/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/dist/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/dist/js/sb-admin-2.min.js"></script>

</body>

</html>