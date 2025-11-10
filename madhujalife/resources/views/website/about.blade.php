@extends('website.layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">About Us</h1>
    <ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active text-white">About</li>
    </ol>
</div>
<!-- Page Header End -->


<!-- About Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="https://www.rural21.com/fileadmin/img/content/Issue/En-2021-02/Rural21_2_2021_S06.jpg" class="img-fluid rounded" alt="About Madhujalife">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <h5 class="text-primary mb-3">Welcome to Madhujalife</h5>
                <h1 class="display-5 mb-4">Pure Wellness. Natural Care. Trusted Health.</h1>
                <p class="mb-4">
                    <strong>Madhujalife</strong> is a trusted name in wellness and healthcare products,
                    offering a complete range of <strong>Personal Care, Herbal Health Care, Hair Care,</strong>
                    and <strong>Pharmaceutical Solutions</strong>.  
                    Our aim is to combine nature and science to promote holistic well-being and enhance your daily lifestyle.
                </p>
                <p class="mb-4">
                    We are committed to creating products that are safe, effective, and environmentally responsible.
                    From herbal formulations to premium-quality personal care items, every product is crafted
                    with precision and passion to meet the highest quality standards.
                </p>
                <a href="{{ url('contact') }}" class="btn btn-primary py-3 px-5">Get in Touch</a>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->


<!-- Mission & Vision Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h5 class="text-primary">Our Philosophy</h5>
            <h2 class="display-6">Our Mission & Vision</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Our Mission</h4>
                    <p class="mb-0">
                        To enrich lives through natural, herbal, and scientifically developed products that
                        promote complete wellness — inside and out. We aim to make health and beauty accessible
                        to every household with the trusted touch of Madhujalife.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3">Our Vision</h4>
                    <p class="mb-0">
                        To become a global leader in the herbal and pharmaceutical industry by offering
                        innovative, affordable, and sustainable wellness products that empower a healthier tomorrow.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission & Vision End -->


<!-- Product Categories Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h5 class="text-primary">Our Products</h5>
            <h2 class="display-6">Explore What Madhujalife Offers</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="p-4 bg-light rounded text-center h-100">
                    <img src="https://images.verifiedmarketresearch.com/assets/Top-7-personal-care-product-companies-empowering-beauty-and-enhancing-well-being.jpg" class="img-fluid mb-3" alt="Personal Care">
                    <h5>Personal Care</h5>
                    <p>Gentle and effective products designed for daily freshness, hygiene, and comfort.</p>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="p-4 bg-light rounded text-center h-100">
                    <img src="https://indianherbopharma.com/wp-content/uploads/2021/07/ALOEVERA-AMLA-JUICE-scaled.jpg" class="img-fluid mb-3" alt="Herbal Health Care">
                    <h5>Herbal Health Care</h5>
                    <p>Natural herbal supplements to strengthen immunity and support a healthy lifestyle.</p>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="p-4 bg-light rounded text-center h-100">
                    <img src="https://img.forestessentialsindia.com/pub/media/catalog/category/Hair_Cat_Mobile.jpg" class="img-fluid mb-3" alt="Hair Care">
                    <h5>Hair Care</h5>
                    <p>Herbal hair oils, shampoos, and treatments that nourish your hair naturally.</p>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="p-4 bg-light rounded text-center h-100">
                    <img src="https://img.freepik.com/free-vector/pharmaceutical-medicine-healthcare-template-vector-social-media-post_53876-117769.jpg?semt=ais_hybrid&w=740&q=80" class="img-fluid mb-3" alt="Pharmaceutical">
                    <h5>Pharmaceutical</h5>
                    <p>Scientifically developed and trusted pharmaceutical formulations for better health.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Categories End -->


<!-- Subscribe Newsletter Start -->
<div class="container-fluid py-5 bg-primary text-white">
    <div class="container text-center">
        <div class="wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="mb-4 text-primary">Stay Connected with Madhujalife</h2>
            <p class="mb-4">Subscribe to our newsletter and get the latest updates, offers, and wellness tips directly in your inbox.</p>
            <form class="d-flex justify-content-center flex-wrap" style="max-width: 600px; margin: auto;">
                <input type="email" class="form-control rounded-pill me-2 mb-2 mb-sm-0" placeholder="Enter your email" required>
                <button type="submit" class="btn btn-primary rounded-pill px-4 mt-2">Subscribe</button>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe Newsletter End -->

@endsection
