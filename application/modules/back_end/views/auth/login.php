<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SSM &mdash; Backoffice (Login)</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/bootstrap-social/bootstrap-social.css'); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('resources/back_end/assets/css/components.css'); ?>">
</head>

<body>
<div id="app">
    <section class="section" style="background-color: #fff;">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 order-2 bg-white my-auto">
                <div class="p-5 m-3">
                    <div class="text-center">
                        <img src="<?php echo base_url('resources/back_end/assets/img/smm/logo-smm.png'); ?>" alt="logo" width="120" class="shadow-light mb-5 mt-2">
                    </div>
                    <h4 class="text-dark font-weight-normal text-center">Welcome to <span class="font-weight-bold">SMM Backoffice</span></h4>
                    <form method="POST" action="<?php echo base_url($lang . '/backoffice/login_process'); ?>"" class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your username
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon icon-right" tabindex="4">
                                Login
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            Back to Website <a href="<?php echo base_url('home') ?>" target="_blank">social.co.th</a>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
<!--                        Copyright &copy; Your Company. Made with 💙 by Stisla-->
<!--                        <div class="mt-2">-->
<!--                            <a href="#">Privacy Policy</a>-->
<!--                            <div class="bullet"></div>-->
<!--                            <a href="#">Terms of Service</a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url('resources/back_end/assets/img/unsplash/login-bg.jpg'); ?>">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Good Mornig</h1>
                            <h5 class="font-weight-normal text-muted-transparent">SMM, Backoffice</h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/stisla.js'); ?>"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="<?php echo base_url('resources/back_end/assets/js/scripts.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/custom.js"'); ?>"></script>
</body>
</html>
