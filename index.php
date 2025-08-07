<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

<?php include 'includes/nav.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content text-white">
                    <h1 class="hero-title fade-in">Your Perfect Smile Starts Here</h1>
                    <p class="hero-subtitle fade-in">Experience world-class dental care with personalized attention. With years of expertise and a commitment to excellence, we’re here to help you achieve a healthy, beautiful smile you deserve.</p>
                    <div class="fade-in">
                        <a href="contact.php#booking-form" class="btn btn-light btn-hero me-3">
                            <i class="fas fa-calendar-check me-2"></i>Book Appointment
                        </a>
                        <a href="services.php" class="btn btn-outline-light btn-hero">
                            <i class="fas fa-stethoscope me-2"></i>Our Services
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="hero-image fade-in">
                    <i class="fas fa-tooth text-white" style="font-size: 15rem; opacity: 0.1;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Preview -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image">
                    <img src="/assets/images/smiles.jpg" 
                         alt="Modern Dental Office" class="img-fluid about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title text-start">About Us</h2>
                <p class="section-subtitle text-start">Providing exceptional dental care with personalized attention</p>
                <p class="mb-4">At Vivid Smiles Complete Dental Care, we combine cutting-edge technology with compassionate care to deliver the best possible dental experience. Our dedicated professional is committed to helping you achieve optimal oral health in a comfortable, welcoming environment.</p>
                
                <ul class="feature-list">
                    <li><i class="fas fa-check-circle"></i> State-of-the-art dental technology</li>
                    <li><i class="fas fa-check-circle"></i> Dedicated and caring dental professional</li>
                    <li><i class="fas fa-check-circle"></i> Comprehensive dental services</li>
                    <li><i class="fas fa-check-circle"></i> Patient-centered approach</li>
                </ul>
                
                <a href="about.php" class="btn btn-primary mt-3">
                    <i class="fas fa-arrow-right me-2"></i>Learn More About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive dental care for the whole family</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <h4 class="service-title">General Dentistry</h4>
                    <p>Complete oral health care including cleanings, fillings, and preventive treatments for optimal dental health.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h4 class="service-title">Cosmetic Dentistry</h4>
                    <p>Transform your smile with our cosmetic services including teeth whitening, veneers, and smile makeovers.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h4 class="service-title">Oral Surgery</h4>
                    <p>Expert surgical procedures including tooth extractions, dental implants, and wisdom tooth removal.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="services.php" class="btn btn-primary">
                <i class="fas fa-list me-2"></i>View All Services
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Quality Care</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="stat-item">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label">Happy Patients</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Satisfaction Rate</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Emergency Care</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Preview -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Patients Say</h2>
            <p class="section-subtitle">Real stories from real patients</p>
        </div>
        
        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"The best dental experience I've ever had! The staff is incredibly professional and caring. My smile has never looked better!"</p>
                        <h5 class="testimonial-author">Sarah Johnson</h5>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Dr. Smith and his team made my dental implant procedure completely painless. I'm so grateful for their expertise and care."</p>
                        <h5 class="testimonial-author">Michael Chen</h5>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"My kids actually look forward to their dental visits now! The team is amazing with children and makes everything fun."</p>
                        <h5 class="testimonial-author">Emily Rodriguez</h5>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="cta-section">
            <h2 class="mb-4">Ready to Transform Your Smile?</h2>
            <p class="lead mb-4">Book your appointment today and take the first step towards a healthier, more beautiful smile.</p>
            <a href="contact.php#booking-form" class="btn btn-primary btn-lg">
                <i class="fas fa-phone me-2"></i>Schedule Your Visit
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>