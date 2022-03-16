@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
        <title>
            Material Dashboard PRO by Creative Tim
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ url('assets/css/material-dashboard.css?v=3.0.1') }}" rel="stylesheet" />
    </head>

    <body class="">
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <nav
                        class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                        <div class="container-fluid ps-2 pe-0">
                            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 "
                                href="../../../pages/dashboards/analytics.html">

                            </a>
                            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon mt-2">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">

                                <ul class="navbar-nav navbar-nav-hover mx-auto ">
                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a role="button"
                                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                            id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                                            Admissions
                                            <img src=" ../../../assets/img/down-arrow-dark.svg " alt="down-arrow"
                                                class="arrow ms-1 d-lg-block d-none">
                                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                                class="arrow ms-1 d-lg-none d-block">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3"
                                            aria-labelledby="dropdownMenuAccount">
                                            <div class="d-none d-lg-flex">
                                                <div class="col-12 ps-0 d-flex justify-content-center flex-column">
                                                    <ul class="list-group">
                                                        <li
                                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                                                id="dropdownSignIn">
                                                                <i class="material-icons opacity-6 me-2 text-md">login</i>
                                                                <span>Requirements</span>
                                                                <img src="../../../assets/img/down-arrow.svg"
                                                                    alt="down-arrow" class="arrow ms-auto">
                                                            </a>
                                                            <div class="dropdown-menu mt-0 py-3 px-2"
                                                                aria-labelledby="dropdownSignIn">
                                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                    href="../../../pages/authentication/signin/basic.html">
                                                                    <span>Academic requirements</span>
                                                                </a>
                                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                    href="../../../pages/authentication/signin/cover.html">
                                                                    <span>Nationality</span>
                                                                </a>
                                                                <a class="dropdown-item ps-3 border-radius-md"
                                                                    href="../../../pages/authentication/signin/illustration.html">
                                                                    <span>Cut off points</span>
                                                                </a>
                                                                <a class="dropdown-item ps-3 border-radius-md"
                                                                   href="{{route('apply')}}">
                                                                    <span>Apply</span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        {{-- <li
                                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                                            id="dropdownSignIn">
                                                            <i class="material-icons opacity-6 me-2 text-md">login</i>
                                                            <span>Admitted</span>
                                                            <img src="../../../assets/img/down-arrow.svg"
                                                                alt="down-arrow" class="arrow ms-auto">
                                                        </a>
                                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                                            aria-labelledby="dropdownSignIn">
                                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                href="../../../pages/authentication/signin/basic.html">
                                                                <span>Academic requirements</span>
                                                            </a>
                                                           
                                                        </div>
                                                    </li> --}}
                                                </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                            id="dropdownSignUp">
                                            <i class="material-icons opacity-6 me-2 text-md">assignment</i>
                                            <span>Admitted List</span>
                                            <img src="{{ url('assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                                class="arrow ms-auto">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="../../../pages/authentication/signup/basic.html">
                                                <span>Colleges</span>
                                            </a>
                                            <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                href="../../../pages/authentication/signup/cover.html">
                                                <span>Academic Year</span>
                                            </a>

                                        </div>
                                    </li>
                                    </li>
                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a role="button"
                                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                            id="dropdownMenuSchools" data-bs-toggle="dropdown" aria-expanded="false">
                                            Academic Units
                                            <img src=" ../../../assets/img/down-arrow-dark.svg " alt="down-arrow"
                                                class="arrow ms-1 d-lg-block d-none">
                                            <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                                                class="arrow ms-1 d-lg-none d-block">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3"
                                            aria-labelledby="dropdownMenuSchools">
                                            <div class="d-none d-lg-flex">
                                                <div class="col-12 ps-0 d-flex justify-content-center flex-column">
                                                    <ul class="list-group">
                                                        <li
                                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                                                id="dropdownSignIn">
                                                                <i class="material-icons opacity-6 me-2 text-md">login</i>
                                                                <span>Schools</span>
                                                                <img src="../../../assets/img/down-arrow.svg"
                                                                    alt="down-arrow" class="arrow ms-auto">
                                                            </a>
                                                            <div class="dropdown-menu mt-0 py-3 px-2"
                                                                aria-labelledby="dropdownSignIn">
                                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                    href="../../../pages/authentication/signin/basic.html">
                                                                    <span>Colleges</span>
                                                                </a>
                                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                    href="../../../pages/authentication/signin/cover.html">
                                                                    <span>Departments</span>
                                                                </a>

                                                            </div>
                                                        </li>

                                                        <li
                                                            class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                            <a class="dropdown-item border-radius-md ps-3 d-flex align-items-center mb-1 text-dark"
                                                                id="dropdownPasswordReset">
                                                                <i
                                                                    class="material-icons opacity-6 me-2 text-md">restart_alt</i>
                                                                <span>Affiliated Institutions</span>
                                                                <img src="../../../assets/img/down-arrow.svg"
                                                                    alt="down-arrow" class="arrow ms-auto">
                                                            </a>
                                                            <div class="dropdown-menu mt-0 py-3 px-2"
                                                                aria-labelledby="dropdownPasswordReset">
                                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                                    href="../../../pages/authentication/reset/basic.html">
                                                                    <span>Loren Ipsum</span>
                                                                </a>

                                                            </div>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item  mx-2">
                                <a role="button" href="{{ route('login') }}"
                                    class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                    id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                                    Login

                                </a>

                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item  mx-2">
                                <a role="button" href="{{ route('register') }}"
                                    class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                    id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                                    Register

                                </a>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- End Navbar -->
        </div>
<!-- Modal for admission form -->
<div class="row">
  <div class="col-md-4">

    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-deault" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title font-weight-normal" id="modal-title-default">Type your modal title</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-primary">Save changes</button>
            <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<!-- End modal for admission form -->
        <main class="main-content mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('{{ url('img/logos/education.jpeg') }}'); background-size: cover;">
                                    
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="card-header text-center">
                                        <h4 class="font-weight-bolder">Sign In</h4>
                                        <p class="mb-0">Enter your email and password to sign in</p>
                                    </div>
                                    <div class="card-body mt-2">
                                        <form method="POST" action="{{ route('login') }}" id="formlogin">
                                            @if (Session::has('fail'))
                                                <div class="alert alert-danger">{{ Session::get('fail') }}
                                                </div>
                                            @endif
                                            @csrf
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-check form-switch d-flex align-items-center mb-3">
                                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                                <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember
                                                    me</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign
                                                    in</button>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </form>
                                    </div>
                                    {{-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class = "mb-4 text-sm mx-auto">
                                            Don't have an account?
                                            <a href  = "{{ route('register') }}"
                                               class = "text-primary text-gradient font-weight-bold">Sign
                                                up</a>
                                        </p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--   Core JS Files   -->
        <script src="../../../assets/js/core/popper.min.js"></script>
        <script src="../../../assets/js/core/bootstrap.min.js"></script>
        <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <!-- Kanban scripts -->
        <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
        <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../../../assets/js/material-dashboard.min.js?v=3.0.1"></script>
    </body>

    </html>
@endsection
