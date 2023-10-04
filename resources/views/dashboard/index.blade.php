<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Proprio Direct | Dashboard </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/tecdig.css?v=1.0.0">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-default navs-shape">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{ route('dashboard') }}" class="navbar-brand d-flex justify-content-center align-items-center">
                <!--Logo start-->
                <img src="assets/images/logo.svg" class="sidebar-color-logo  ">
                <!--logo End-->
                <h4 class="logo-title m-0">Proprio Direct</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="collapse navbar-collapse" id="sidebar-parent">
                <ul class="navbar-nav iq-main-menu py-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            @include('dashboard.includes.sidebar')
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-5 py-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        {{-- <div class="col-md-12">
                            <div class="card banner">
                                <div class="card-body ">
                                    <div class="row justify-content-center align-items-center banner-container">
                                        <div class="col-lg-6 banner-item">
                                            <div class="banner-text">
                                                <h1 class="fw-bold mb-4">
                                                    Hello <span class="text-secondary">{{  Auth::user()->name}} !</span>
                                                </h1>
                                            </div>
                                            <p class="mb-4">Welcome to your marketing dashboard. media insights and track your visitors.</p>
                                            <button type="button" class="btn btn-primary">Get Started</button>
                                        </div>
                                        <div class="col-lg-6 banner-img">
                                            <div class="img">
                                                <img src="assets/images/dashboard/01.png" class="img-fluid w-75" alt="img8">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12 col-lg-12">
                            <div class="card overflow-hidden">
                                <div class="card-header d-flex justify-content-between flex-wrap">
                                    <div class="header-title">
                                        <h4 class="card-title mb-2">Transactions</h4>
                                    </div>
                                    {{-- <div class="btn-group" role="group"
                                        aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="btncheck1">
                                        <label class="btn btn-outline-primary" for="btncheck1">Today</label>

                                        <input type="checkbox" class="btn-check" id="btncheck2">
                                        <label class="btn btn-outline-primary" for="btncheck2">This Week</label>

                                        <input type="checkbox" class="btn-check" id="btncheck3">
                                        <label class="btn btn-outline-primary" for="btncheck3">This Month</label>
                                    </div> --}}
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive mt-4">
                                        <table id="basic-table" class="table table-striped mb-0 transactions-table"
                                            role="grid">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>PHONE</th>
                                                    <th>ADDRESS</th>
                                                    <th>bedrooms</th>
                                                    <th>bathrooms</th>
                                                    <th>square</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse (App\Models\ApartmentDetails::all() as $detail)
                                                <tr>
                                                    <td>{{ $detail->name }}</td>
                                                    <td>{{ $detail->email }}</td>
                                                    <td>{{ $detail->phone }}</td>
                                                    <td>{{ $detail->address }}</td>
                                                    <td>{{ $detail->bedrooms }}</td>
                                                    <td>{{ $detail->bathrooms }}</td>
                                                    <td>{{ $detail->square }}</td>
                                                </tr>
                                                @empty
                                                    
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-12 col-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between flex-wrap">
                                    <div class="header-title">
                                        <h4 class="card-title">Users</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex  align-items-center justify-content-between" style="position: relative;">
                                        <div>
                                            <h6 class="mb-3">Subscribes</h6>
                                            <span>57 m</span> <br />
                                            <span class="text-success">21.77%</span>
                                        </div>
                                        <div id="d-activity-1" class="rounded-bar-chart"></div>
                                    </div>
                                    <hr>
                                    <div class="d-flex  align-items-center justify-content-between">
                                        <div>
                                            <h6 class="mb-3">Unsubscribe</h6>
                                            <span>36 k</span><br />
                                            <span class="text-danger">95.77%</span>
                                        </div>
                                        <div id="d-activity" class="rounded-bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </main>

    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="assets/js/libs.min.js"></script>
    <!-- widgetchart JavaScript -->
    <script src="assets/js/charts/widgetcharts.js"></script>
    <!-- mapchart JavaScript -->
    <script src="assets/js/charts/vectore-chart.js"></script>
    <script src="assets/js/charts/dashboard.js"></script>
    <!-- fslightbox JavaScript -->
    <script src="assets/js/fslightbox.js"></script>
    <!-- settings JavaScript -->
    <script src="assets/js/setting.js"></script>
    <!-- Form Wizard Script -->
    <script src="assets/js/form-wizard.js"></script>
    <!-- app JavaScript -->
    <script src="assets/js/app.js"></script>

</body>

</html>
