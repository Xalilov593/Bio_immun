<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bio Immun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/home/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/home/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/home/css/style.css" rel="stylesheet">
</head>

<body>
{{--<!-- Spinner Start -->--}}
{{--<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">--}}
{{--    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>--}}
{{--</div>--}}
{{--<!-- Spinner End -->--}}


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-0">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-6 ps-5 text-start">
            <div class="h-100 d-inline-flex align-items-center text-light">
                <span>Follow Us:</span>
                <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                <span>+012 345 6789</span>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">Milky</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <div class="dropdown-menu bg-light m-0">

                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                </div>
            </div>
            <a href="{{route('product.page')}}" class="nav-item nav-link">Products</a>
            <a href="" class="nav-item nav-link">Blogs</a>
            <a href="{{route('advice.page')}}" class="nav-item nav-link">Advices</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
            @php
                use App\Http\Controllers\CartController;
                $itemCount = CartController::getCartItemCount();
            @endphp

            <a href="{{ route('cart.index') }}" class="nav-item nav-link">
                <button type="button" class="btn btn-primary position-relative">
                    <i class="bi bi-cart"></i>
                    @if($itemCount > 0)
                        <span class="badge bg-danger position-absolute top-0 start-100 translate-middle rounded-pill">
                {{ $itemCount }}
            </span>
                    @endif
                </button>
            </a>
            <a href="{{route('login')}}" class="nav-item nav-link">
                <button type="button" class="btn btn-primary">Sign In</button>
            </a>
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>
<!-- Navbar End -->
@yield('content')



<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5" >
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Our Office</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Business Hours</h5>
                <p class="mb-1">Monday - Friday</p>
                <h6 class="text-light">09:00 am - 07:00 pm</h6>
                <p class="mb-1">Saturday</p>
                <h6 class="text-light">09:00 am - 12:00 pm</h6>
                <p class="mb-1">Sunday</p>
                <h6 class="text-light">Closed</h6>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative w-100">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                           placeholder="Your email">
                    <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        SignUp
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-secondary text-body copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/home/lib/wow/wow.min.js"></script>
<script src="/assets/home/lib/easing/easing.min.js"></script>
<script src="/assets/home/lib/waypoints/waypoints.min.js"></script>
<script src="/assets/home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/assets/home/lib/counterup/counterup.min.js"></script>
<script src="/assets/home/lib/parallax/parallax.min.js"></script>
<script src="/assets/home/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="/assets/home/js/main.js"></script>
</body>

</html>

