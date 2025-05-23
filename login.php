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
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</head>
<?php 
    require_once "connection.php";

    if(isset($_post["btnsubmit"]))
    {
        $user_email = trim($_post['email']);
        $user_password = md5(trim($_post['password']));
        $q = "SELECT * FROM tb_user WHERE user_email='$user_email' && user_password='$user_password'";
        $qr = mysqli_query($conn,$q);
        if(mysqli_num_row($qr)){
        while($d = mysqli_fetch_assoc($qr)){
            $_SESSION["id"] = $d["user_id"];
            $_SESSION["nama"] = $d["user_fname"].' '.$d["user_lname"];
            $_SESSION["email"] = $d["user_email"];
            }
        }
    }
?>
<body class="bg-gradient-secondary"  style=" margin-top:10%">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">login</h1>
                                    </div>
                                    <form class="user" method="post" action="checklogin.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="user_email" name="email" required aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="user_password" name="password" required placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="checkbox" onClick="myFunction()">&nbsp;&nbsp; show password
                                        </div>

                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div> 
                                        </div> -->

                                        <button type="submit" name="btnsubmit" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<script>
    function myFunction() {
        var x = document.getElementById("user_password");
        if (x.type === "password"){
            x.type = "text";
        }
        else{
            x.type = "password";
        }
    }
</script>

</body>

</html>