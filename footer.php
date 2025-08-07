<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- Clinic Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-tooth text-primary me-2 fs-3"></i>
                    <h5 class="mb-0 text-white">Vivid Smiles Dental Care</h5>
                </div>
                <p class="text-light">Your smile, our priority! We provide comprehensive dental care with the latest technology and a caring approach.</p>
                
                <!-- Social Media Links -->
                <div class="social-links">
                    <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-primary me-3"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="mb-3 text-white">Contact Information</h5>
                <div class="contact-info">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        <span class="text-light">123 Dental Street, Health City, HC 12345</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-phone text-primary me-2"></i>
                        <span class="text-light">(555) 123-4567</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        <span class="text-light">info@vividsmilesdental.com</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-clock text-primary me-2"></i>
                        <span class="text-light">Mon-Fri: 8AM-6PM, Sat: 9AM-3PM</span>
                    </div>
                </div>
            </div>
            
            <!-- Quick Navigation -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="mb-3 text-white">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-light text-decoration-none"><i class="fas fa-chevron-right text-primary me-2"></i>Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-light text-decoration-none"><i class="fas fa-chevron-right text-primary me-2"></i>About Us</a></li>
                    <li class="mb-2"><a href="services.php" class="text-light text-decoration-none"><i class="fas fa-chevron-right text-primary me-2"></i>Our Services</a></li>
                    <li class="mb-2"><a href="team.php" class="text-light text-decoration-none"><i class="fas fa-chevron-right text-primary me-2"></i>Meet Our Team</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-light text-decoration-none"><i class="fas fa-chevron-right text-primary me-2"></i>Contact Us</a></li>
                    <li class="mb-2"><a href="contact.php#booking-form" class="text-light text-decoration-none"><i class="fas fa-chevron-right text-primary me-2"></i>Book Appointment</a></li>
                </ul>
            </div>
        </div>
        
        <hr class="border-secondary my-4">
        
        <!-- Copyright -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 text-light">&copy; <?php echo date('Y'); ?> Vivid Smiles Dental Care. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 text-light">Designed with <i class="fas fa-heart text-danger"></i> for better oral health</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/main.js"></script>

<script>
    // Initialize Swiper for testimonials
    if (document.querySelector('.testimonials-swiper')) {
        const swiper = new Swiper('.testimonials-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
    }
</script>

</body>
</html>
