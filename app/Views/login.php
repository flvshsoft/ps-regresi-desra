<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>/public/assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth" style="background-image:url('https://dev.bintang-rezeki.co.id/assets/images/bg.jpg')">
                <div class="row flex-grow mx-auto" style="background-color: #FFFFFF;">
                    <!-- <div class=" mx-auto"> -->
                    <div class="col-lg-8 ml-auto">
                        <div class="auth-form-light auth-left text-center p-0">
                            <div class="brand-logo">
                                <img src="<?= base_url() ?>/public/assets/images/logo.png" alt="Logo">
                            </div>
                            <!-- Tambahkan gambar atau konten lainnya di sini -->
                            <img src="https://dev.bintang-rezeki.co.id/assets/images/help.png" height="400px" width="700px" alt="Gambar Saya">
                            <p class="text-muted">© 2023 Hak Cipta Anda</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <div class="auth-form-light text-center p-5">
                            <h4 class=" text-bold">Welcome Back</h4>
                            <h6 class="font-weight-light">Sign in to your account</h6><br>
                            <form class="pt-3" action="<?= base_url('/proses_login') ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" id="exampleSelectGender">
                                        <option>Select Branch</option>
                                        <option>PKU</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-danger btn-lg font-weight-medium auth-form-btn" type="submit">Login</button>
                                </div><br>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>/public/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/misc.js"></script>
</body>


</html>