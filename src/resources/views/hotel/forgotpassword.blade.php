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
                    <!-- Header -->
                    <div class="details">
                        <!-- logo Start -->
                        <a href="index" class="logo">
                            <img src="/images/logo.png">
                        </a>
                        <!-- logo End -->
                        <h2>Forgot Password</h2>
                        <p>Please enter your email address below and we'll email you a link to a page where you can easily create a new password!</p>
                        <!-- Form -->
                        <form method="post" class="login" action="index">
                            <!-- Email-->
                            <div class="form-group Email">
                                <input type="email" class="input-text" name="email" id="email" placeholder="Email Address">
                            </div>
                            <!-- Btn -->
                             <input type="submit" name="submit" class="submit" value="Send Me Email">
                        </form>
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            I want to <a href="login">return to login</a>
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
