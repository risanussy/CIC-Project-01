
    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" style="background-image: url('<?= base_url('assets/img/log/logg.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; display: flex; justify-content: center; align-items: center;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-1">
                                        <img src="<?= base_url('assets/img/log/bc.jpg'); ?>" alt="Logo B Community" class="logo-image" width="100px">
                                    </h1>
                                    </div>
                                    <div class="p-2">
                                        <p>
                                            <span class="fas fa-lock mr-2"></span>
                                            <strong style="font-size: 1.1em;">Login</strong>
                                        </p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="user" placeholder="Username" name="user">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye" id="togglePassword"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $('#togglePassword').click(function() {
                                                    var passwordInput = $('#exampleInputPassword');
                                                    var passwordFieldType = passwordInput.attr('type');
                                                    
                                                    if (passwordFieldType === 'password') {
                                                        passwordInput.attr('type', 'text');
                                                        $('#togglePassword').removeClass('fa-eye').addClass('fa-eye-slash');
                                                    } else {
                                                        passwordInput.attr('type', 'password');
                                                        $('#togglePassword').removeClass('fa-eye-slash').addClass('fa-eye');
                                                    }
                                                });
                                            });
                                        </script>
                                        <div class="form-group">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" style="font-weight: bold; font-size: 1.1rem; color: green;">
                                            <i class="fas fa-home"></i> Home
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
