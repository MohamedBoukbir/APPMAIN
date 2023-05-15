<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/new-animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new-owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/new-bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/new-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-login.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>



    @livewireStyles
</head>

<body style="background-color: #FFF">
    <div class="container-fluid bg-white p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                {{-- <img src="{{ asset('img/big-logo.png') }}" alt="" style="width: 60px;margin-right: 15px;"> --}}
                <h1 class="m-0 text-muted">HomeHelp</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    {{-- <a href="index.html" class="nav-item nav-link active">Home</a> --}}
                    <a href="#" class="nav-item nav-link">Help</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">1</a>
                            <a href="job-detail.html" class="dropdown-item">2</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">1</a>
                            <a href="testimonial.html" class="dropdown-item">2</a>
                            <a href="404.html" class="dropdown-item">3</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Messages</a>
                </div>
                {{-- <a href="{{ route('signup') }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-lg-block"><i
                        class="fa fa-user me-3"></i>Sign Up</a> --}}
                {{-- <a href="{{ route('signin') }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-lg-block ">Sign
                    In<i class="fa fa-arrow-right ms-3"></i></a> --}}
                <style>
                    li {
                        list-style-type: none;
                    }
                </style>
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ asset('img/profile.png') }}" alt="" style="width: 30px">
                            <span class="status online"></span>
                        </span>
                        {{-- <span>{{ Auth::user()->username}}</span> --}}
                        {{-- <span>username</span> --}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item disabled" href="#">{{ Auth::user()->username }}</a>
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i>
                            Settings</a>


                        {{-- <a class="dropdown-item" href="login.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="mr-1"></i> Logout</a> --}}

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit"> Logout</button>
                        </form>
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                    </div>
                </li>
                <style>
                    .btn-upgrade {
                        width: 10%;
                        height: 50px;
                        /* min-width: 230px; */
                        /* padding: 10px 20px; */
                        background: transparent;
                        cursor: pointer;
                        background-color: #f49758;
                        color: #fff;
                        border: 2px solid #f49758;
                        padding: 5px;
                        border-radius: 6px;
                        box-sizing: border-box;
                        font-size: 11px;
                        font-weight: 600;
                        text-align: center;
                        text-decoration: none;
                        transition: background-color .3s, border-color .3s;
                        margin: 15px;
                        box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
                    }
                </style>
                <button type="button" class="btn-upgrade">
                    Upgrade to Premium
                </button>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="margin-top:50px">
                <div class="col-md-6 offset-md-3">
                    <style>
                        .step-wizard {
                            /* background-color: #21d4fd; */
                            /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                            /* height: 100vh; */
                            width: 100%;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .step-wizard-list {
                            background: #fff;
                            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
                            color: #333;
                            list-style-type: none;
                            border-radius: 10px;
                            display: flex;
                            padding: 20px 10px;
                            position: relative;
                            z-index: 10;
                        }

                        .step-wizard-item {
                            padding: 0 20px;
                            flex-basis: 0;
                            -webkit-box-flex: 1;
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                            max-width: 100%;
                            display: flex;
                            flex-direction: column;
                            text-align: center;
                            min-width: 170px;
                            position: relative;
                        }

                        .step-wizard-item+.step-wizard-item:after {
                            content: "";
                            position: absolute;
                            left: 0;
                            top: 19px;
                            background: #00B074;
                            width: 100%;
                            height: 2px;
                            transform: translateX(-50%);
                            z-index: -10;
                        }

                        .progress-count {
                            height: 40px;
                            width: 40px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 50%;
                            font-weight: 600;
                            margin: 0 auto;
                            position: relative;
                            z-index: 10;
                            color: transparent;
                        }

                        .progress-count:after {
                            content: "";
                            height: 40px;
                            width: 40px;
                            background: #00B074;
                            position: absolute;
                            left: 50%;
                            top: 50%;
                            transform: translate(-50%, -50%);
                            border-radius: 50%;
                            z-index: -10;
                        }

                        .progress-count:before {
                            content: "";
                            height: 10px;
                            width: 20px;
                            border-left: 3px solid #fff;
                            border-bottom: 3px solid #fff;
                            position: absolute;
                            left: 50%;
                            top: 50%;
                            transform: translate(-50%, -60%) rotate(-45deg);
                            transform-origin: center center;
                        }

                        .progress-label {
                            font-size: 14px;
                            font-weight: 600;
                            margin-top: 10px;
                        }

                        .current-item .progress-count:before,
                        .current-item~.step-wizard-item .progress-count:before {
                            display: none;
                        }

                        .current-item~.step-wizard-item .progress-count:after {
                            height: 10px;
                            width: 10px;
                        }

                        .current-item~.step-wizard-item .progress-label {
                            opacity: 0.5;
                        }

                        .current-item .progress-count:after {
                            background: #fff;
                            border: 2px solid #00B074;
                        }

                        .current-item .progress-count {
                            color: #00B074;
                        }
                    </style>

                    <section class="step-wizard">
                        <ul class="step-wizard-list">
                            <li class="step-wizard-item">
                                <span class="progress-count">1</span>
                                <span class="progress-label">Billing Info</span>
                            </li>
                            <li class="step-wizard-item current-item">
                                <span class="progress-count">2</span>
                                <span class="progress-label">Payment Method</span>
                            </li>
                            <li class="step-wizard-item">
                                <span class="progress-count">3</span>
                                <span class="progress-label">Checkout</span>
                            </li>
                            <li class="step-wizard-item">
                                <span class="progress-count">4</span>
                                <span class="progress-label">Success</span>
                            </li>
                        </ul>
                    </section>
                    {{-- <h1>Multi Step form</h1><hr> --}}
                    <livewire:multi-step-form />
                </div>
            </div>
        </div>

    </div>



    @livewireScripts
</body>

</html>
