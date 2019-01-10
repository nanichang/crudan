<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crudan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('assets/images/img-01.jpg');">
            <div class="wrap-login100 p-t-50 p-b-30">
                <!-- <form class="login100-form validate-form"> -->
                    <div class="login100-form-avatar">
                        <img src="assets/images/logo.png" alt="AVATAR">
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <a class="login100-form-btn" href="{{ route('corporate') }}">
                            Corporate Registration
                        </a>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <a class="login100-form-btn" href="{{ route('individual') }}">
                            Individual Registration
                        </a>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>     
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>