
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
    
    <link href="<?php echo base_url('assets/template_admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/template_admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body style="background-color:#E199A5;">

<style>
    .pink {
        background-color:#E199A5 !important;
        border:transparent !important;
    }
</style>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block" style="background-image: url('<?php echo base_url("assets/template_website/assets/regist.jpg") ?>'); background-position:center; background-size:cover; "></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="<?php echo base_url('customer/register/proses') ?> " enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="First Name">
                                        <?php echo form_error('first_name', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="last_name"
                                            placeholder="Last Name">
                                        <?php echo form_error('last_name', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Username">
                                    <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email Address">
                                    <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="no_telp"
                                        placeholder="Phone Number">
                                    <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password1" class="form-control"
                                             placeholder="password">
                                        <?php echo form_error('password1', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password2"
                                            id="exampleRepeatPassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea  class="form-control" name="alamat" placeholder="Address"></textarea>
                                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block pink">Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('customer/login') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/template_admin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/template_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/template_admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/template_admin/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>