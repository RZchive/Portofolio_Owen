<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/fontgoogleapi.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<!-- Awal Form -->
<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                   
                                    <form class="user" method="post" action="<?= base_url() ?>register/simpan">
                                        <div class="form-group">

                                            <input type="text" class="form-control 
                                            form-control-user" id="Nama" name="Nama" placeholder="Nama Lengkap" value="<?= set_value('Nama') ?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small> '); ?>
                                        </div>
                                        <div class="form-group">

                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small> '); ?>

                                        </div>
                                       
                                        <div class="form-group">

                                            <input type="password" class="form-control form-control-user" id="Password" name="Password" placeholder="Password" value="<?= set_value('Password') ?>">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small> '); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register Account
                                        </button>
                                      
                                    </form>
                                    <hr>
                                   
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url() ?>Login">Sudah Punya Akun?Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/assets/js/sb-admin-2.min.js"></script>

</body>
<!-- Awal Form -->
</html>