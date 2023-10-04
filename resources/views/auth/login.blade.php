<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Proprio Direct</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/tecdig.css') }}">
</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                <div class="card-body">
                                    <a href="{{ route('dashboard') }}"
                                        class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <img src="{{ asset('assets/images/logo.svg') }}" class="sidebar-color-logo  ">
                                        <!--logo End-->
                                        <h3 class="logo-title ms-2 text-primary">Proprio Direct</h3>
                                    </a>
                                    <h2 class="mb-2 text-center">Sign In</h2>
                                    <p class="text-center">Login to stay connected.</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="············" aria-describedby="login-password"
                                                        tabindex="2" name="password" required
                                                        autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="customCheck1"
                                                        name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="customCheck1">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 d-flex d-md-block d-none  justify-content-center bg-soft-secondary p-0 mt-n1 vh-100">
                    <img src="{{ asset('assets/images/auth/01.png') }}" class="img-fluid" alt="images">
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('public/assets/js/libs.min.js') }}"></script>
    <!-- widgetchart JavaScript -->
    <script src="{{ asset('public/assets/js/charts/widgetcharts.js') }}"></script>
    <!-- mapchart JavaScript -->
    <script src="{{ asset('public/assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('public/assets/js/charts/dashboard.js') }}"></script>
    <!-- fslightbox JavaScript -->
    <script src="{{ asset('public/assets/js/fslightbox.js') }}"></script>
    <!-- settings JavaScript -->
    <script src="{{ asset('public/assets/js/setting.js') }}"></script>
    <!-- Form Wizard Script -->
    <script src="{{ asset('public/assets/js/form-wizard.js') }}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('public/assets/js/app.js') }}"></script>

</body>

</html>
