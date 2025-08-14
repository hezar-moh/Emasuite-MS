<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>EMASUITE - Home</title>
    <style>
        body {
            background: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);
            color: #fff;
            padding: 60px 0 40px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 40px;
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #4e54c8;
        }
        footer {
            background: #343a40;
            color: #fff;
            padding: 20px 0;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">EMASUITE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.ema.co.tz/about">About us</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li> --}}
                </ul>
                @if (Route::has('login'))
                    <div class="d-flex gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-light">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Welcome to EMASUITE</h1>
            <p class="lead mb-4">Global industry-specific ERP Suite tailored for SMEs spanning various sectors including Supply Chain, Logistics, Manufacturing, Courier Services,</p>
            <a href="{{ route('register') }}" class="btn btn-lg btn-light text-primary fw-bold shadow-sm">Get Started</a>
        </div>
    </section>

    <center><span><h3><b>OUR PARTNERS</b><h3></span></center>
    <!-- Features Section -->
    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <img src="{{asset('./assets/images/logos/image.png')}}" width="100px" alt="">
                        </div>
                        <h5 class="card-title fw-bold">UjuziNet Edtech</h5>
                        <p class="card-text">UjuziNet is an edtech startup that deals with digital technology solutions in Agriculture, Education and Multimedia..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                               <img src="{{asset('./assets/images/logos/anza.png')}}" width="100px" alt="">
                        </div>
                        <h5 class="card-title fw-bold">The ANZA-TUT </h5>
                        <p class="card-text">Anza Entrepreneurs provides business development services that assist to strengthen business operations, increase profitability, scale job creation in Tanzania. In the last 10 years</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                         <img src="{{asset('./assets/images/logos/dti.png')}}" width="100px" alt="">
                        </div>
                        <h5 class="card-title fw-bold">Deutsches Institut für Bautechnik</h5>
                        <p class="card-text">The Deutsches Institut für Bautechnik (DIBt) plays a pivotal role in the construction industry: with its approvals and assessments,.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="container text-center my-5">
        <h2 class="fw-bold mb-3">Ready to boost your business?</h2>
        <p class="mb-4">The Power of Business Systems: People, Product, Process, and Distribution (PPPD) in Business Sustainability.</p>
        <a href="#" class="btn btn-primary btn-lg">Start Now</a>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} EMASUITE. All rights reserved.</p>
            <small>Made with <span style="color: #e25555;">&#10084;</span> for your business.</small>
        </div>
    </footer>

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
