<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hotel Empire - Hotel Reservation HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="../css/external/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/external/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../css/external/slider.css">
    <link rel="stylesheet" href="../css/external/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../css/external/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/external/flaticon.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="../css/custom/style.css">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/external/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <!-- <link href="../css/app.css" rel="stylesheet"> -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="form-page-body">

   <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Content Box Start -->
                <div class="form-content-box">
                    <div class="details">
                        <!-- logo Start -->
                        <a href="index" class="logo">
                            <img src="/images/logo.png">
                        </a>
                        <!-- logo End -->
                        <h2>New to Hotel Empire? Sign up now!</h2>
                        <p>or signin with</p>
                        <!-- Social Buttons-->
                        <div class="social-buttons">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#" class="btn btn-social btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <span class="btn-text">Twitter</span>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#" class="btn btn-social btn-facebook">
                                        <i class="fa fa-google"></i>
                                        <span class="btn-text">Google</span>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <a href="#" class="btn btn-social btn-google">
                                        <i class="fa fa-facebook"></i>
                                        <span class="btn-text">Facebook</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Divider-->
                        <div class="divider">
                            <span class="or-text">OR</span>
                        </div>
                        <!-- Form -->
                        <form method="post" action="index" class="login">
                            <!-- Your Full Name -->
                            <div class="form-group">
                                <input type="text" class="input-text" name="fullname" id="fullname" placeholder="Your Full Name">
                            </div>
                            <!-- Email-->
                            <div class="form-group">
                                <input type="email" class="input-text" name="email" id="email" placeholder="Email Address">
                            </div>
                            <!-- password -->
                            <div class="form-group">
                                <input type="password" class="input-text" name="password" id="password" placeholder="Password">
                            </div>
                            <!-- Confirm password -->
                            <div class="form-group">
                                <input type="password" class="input-text" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                            </div>
                            <!-- Btn -->
                            <input type="submit" name="submit" class="submit" value="login">
                            <p>By signing up, you agree to our terms of services and privacy policy.</p>
                        </form>
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            Already have an account? <a href="login">Log in</a>
                        </span>
                    </div>
                </div>
                <!-- Form Content Box End -->
            </div>
        </div>
    </div>
<!-- Form Page Body End -->
<!-- form-page-body ENd -->
<script src="../js/jquery-2.2.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
<script src="../js/flatpickr.js"></script>
<!-- Custom javascript -->
<script src="../js/app1.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89110077-1', 'auto');
    ga('send', 'pageview');

</script>
    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
</body>
</html>
