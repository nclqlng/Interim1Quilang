<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NU Laguna Learning Resource Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --nu-blue: #35408E;
            --nu-blue-dark: #2a346f;
            --nu-gold: #FFCC33;
            --nu-gold-dark: #e6b82e;
            --nu-light: #FFFFFF;
            --nu-gray: #F8F9FA;
            --nu-dark: #212529;
            --nu-blue-light: #E6E8F5;
            --nu-blue-lighter: #F5F6FB;
            --nu-gold-light: #FFF5D9;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--nu-blue-lighter);
            color: var(--nu-dark);
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            letter-spacing: -0.025em;
        }

        /* Navigation */
        .navbar {
            background-color: var(--nu-blue) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 1rem 0;
            transition: var(--transition);
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 1rem;
            background-color: var(--nu-gold);
            transition: var(--transition);
        }

        .nav-link:hover:after {
            width: calc(100% - 2rem);
        }

        /* Buttons */
        .btn-nu {
            background-color: var(--nu-gold);
            color: var(--nu-blue);
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            transition: var(--transition);
            border: 2px solid var(--nu-gold);
        }

        .btn-nu:hover {
            background-color: transparent;
            color: var(--nu-gold);
            border-color: var(--nu-gold);
            transform: translateY(-2px);
        }

        .btn-nu-outline {
            background-color: transparent;
            color: var(--nu-gold);
            border: 2px solid var(--nu-gold);
        }

        .btn-nu-outline:hover {
            background-color: var(--nu-gold);
            color: var(--nu-blue);
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            overflow: hidden;
            background-color: var(--nu-light);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--nu-blue) 0%, var(--nu-blue-dark) 100%);
            color: white;
            padding: 6rem 0 5rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd' opacity='0.1'%3E%3Cg fill='%23FFCC33' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Utility Classes */
        .rounded-xl {
            border-radius: 1rem !important;
        }

        .text-shadow {
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* Footer */
        footer {
            background-color: var(--nu-blue);
            color: white;
            position: relative;
            overflow: hidden;
        }

        footer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/NU_shield.png') }}" alt="NU Laguna Shield" class="me-2" style="height: 40px;">
            <div class="d-flex flex-column">
                <span class="fw-bold" style="line-height: 1; font-size: 1.1rem;">NU LAGUNA</span>
                <span class="text-nu-gold" style="line-height: 1; font-size: 0.8rem;">LEARNING RESOURCE CENTER</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.index') }}">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('authors.index') }}">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publishers.index') }}">Publishers</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-5">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="h4 text-nu-gold mb-3">NU Laguna LRC</h3>
                    <p>The Learning Resource Center at National University Laguna provides students and faculty with access to academic resources.</p>
                    <div class="mt-4">
                        <a href="#" class="text-nu-gold me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-nu-gold me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-nu-gold me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-nu-gold"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h4 class="h5 text-nu-gold mb-3">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="{{ route('books.index') }}" class="text-white">Books</a></li>
                        <li class="mb-2"><a href="{{ route('authors.index') }}" class="text-white">Authors</a></li>
                        <li><a href="{{ route('publishers.index') }}" class="text-white">Publishers</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h4 class="h5 text-nu-gold mb-3">Contact</h4>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-nu-gold"></i> National Highway, Laguna</li>
                        <li class="mb-2"><i class="fas fa-phone me-2 text-nu-gold"></i> (02) 1234-5678</li>
                        <li><i class="fas fa-envelope me-2 text-nu-gold"></i> lrc@nu-laguna.edu.ph</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4 class="h5 text-nu-gold mb-3">Hours</h4>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2">Monday - Friday: 8AM - 6PM</li>
                        <li>Saturday: 9AM - 3PM</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-nu-gold opacity-25">
            <div class="text-center">
                <p class="mb-0">© {{ date('Y') }} National University Laguna - Learning Resource Center. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>