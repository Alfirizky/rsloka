<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/landing-page.min.css" rel="stylesheet">

    <style type="text/css">
        header.masthead {
            position: relative;
            background-color: #343a40;
            background: url("assets/img/baru.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 25rem;
            padding-bottom: 25 rem;
        }

        .call-to-action {
            position: relative;
            background-color: #343a40;
            background: url("https://png.pngtree.com/thumb_back/fw800/background/20200314/pngtree-world-health-day-blue-background-image_331733.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 10rem;
            padding-bottom: 10rem;
        }

        .call-to-action .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.2;
        }

        .testimonials {
            padding-top: 10rem;
            padding-bottom: 10rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo2.jpg'); ?>" width="150" height="50" class="d-inline-block align-top" alt=""></a>
            <a class="btn btn-primary" href="<?= base_url(); ?>auth">Sign In</a>
        </div>
    </nav>

    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Booking Hospital With an Easy Way!</h1>
                </div>
                <div class="col-xl-4 mx-auto">
                    <div class="col-lg">
                        <a type="submit" href="<?= base_url(); ?>auth/registrasi" class="btn btn-block btn-lg btn-primary">Sign up!</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img src="http://cdn2.tstatic.net/wartakota/foto/bank/images/dr-mehmet-oz_20180405_041315.jpg">
                        <p></p>
                        <br />
                        <h5>Dr Mehmet Oz</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img src="http://cdn2.tstatic.net/wartakota/foto/bank/images/dr-thomas-frist-jr_20180405_042726.jpg">
                        <p></p>
                        <br />
                        <h5>Dr. Thomas Frist, Jr.</h5>
                        <p class="font-weight-light mb-0">"This website is amazing. I've been using it to helping people."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img src="http://cdn2.tstatic.net/wartakota/foto/bank/images/dr-kathy-fields_20180405_042427.jpg">
                        <p></p>
                        <br />
                        <h5>Dr. Kathy Fields</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                </div>
                <div class="col-xl-4 mx-auto">
                    <div class="form-row">
                        <div class="col-lg">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; RSLoka.com 2019. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>