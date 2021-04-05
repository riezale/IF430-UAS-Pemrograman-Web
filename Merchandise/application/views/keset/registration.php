<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url(); ?>index.php/keset/registration">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username Here..." value="<?= set_value('username'); ?>"><?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Here..." value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="cpassword" name="cpassword" placeholder="Confirm Password"><?= form_error('cpassword', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </div>
                                        <div class="form-group" id="jeniskelamin">
                                            <label for=" jeniskelamin">Gender</label>
                                            <br>
                                            <select id="jeniskelamin" name="jeniskelamin">
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control form-control-user" id="tgllahir" name="tgllahir" placeholder="Confirm Password"><?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?></small>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('keset/index') ?>">Have an Account?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>