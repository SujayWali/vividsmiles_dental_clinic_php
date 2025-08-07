<?php 
$pageTitle = "Contact Us";

// Process form submission
$message = '';
$messageType = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $preferredDate = htmlspecialchars($_POST['preferred_date']);
    $service = htmlspecialchars($_POST['service']);
    $messageText = htmlspecialchars($_POST['message']);
    
    $to = "info@vividsmilesdental.com"; // Replace with your clinic email
    $subject = "New Appointment Request from " . $name;
    $emailMessage = "
    New Appointment Request Details:
    
    Name: $name
    Email: $email
    Phone: $phone
    Preferred Date: $preferredDate
    Service Requested: $service
    
    Message:
    $messageText
    
    This request was submitted from the Vivid Smiles Dental Care website.
    ";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $emailMessage, $headers)) {
        $message = "Thank you! Your appointment request has been sent successfully. We'll contact you soon to confirm your appointment.";
        $messageType = "success";
    } else {
        $message = "Sorry, there was an error sending your message. Please try again or call us directly.";
        $messageType = "error";
    }
}

include 'includes/header.php'; 
?>

<?php include 'includes/nav.php'; ?>

<!-- Page Header -->
<section class="hero-section" style="min-height: 50vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="hero-content text-white">
                    <h1 class="hero-title">Contact Us</h1>
                    <p class="hero-subtitle">Get in touch to schedule your appointment or ask any questions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="service-title">Visit Our Office</h4>
                    <p>123 Dental Street<br>Health City, HC 12345<br>United States</p>
                    <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary">
                        <i class="fas fa-directions me-2"></i>Get Directions
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4 class="service-title">Call Us</h4>
                    <p><strong>Main Line:</strong><br>(555) 123-4567</p>
                    <p><strong>Emergency:</strong><br>(555) 123-4568</p>
                    <a href="tel:+15551234567" class="btn btn-outline-primary">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4 class="service-title">Office Hours</h4>
                    <div class="text-start">
                        <p><strong>Monday - Friday:</strong><br>8:00 AM - 6:00 PM</p>
                        <p><strong>Saturday:</strong><br>9:00 AM - 3:00 PM</p>
                        <p><strong>Sunday:</strong><br>Emergency Only</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Form -->
<section id="booking-form" class="section-padding bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="section-title">Book Your Appointment</h2>
                    <p class="section-subtitle">Fill out the form below and we'll contact you to confirm your appointment</p>
                </div>
                
                <?php if ($message): ?>
                    <div class="alert alert-<?php echo $messageType == 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                        <i class="fas fa-<?php echo $messageType == 'success' ? 'check-circle' : 'exclamation-triangle'; ?> me-2"></i>
                        <?php echo $message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>
                
                <div class="service-card">
                    <form method="POST" action="" class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="preferred_date" class="form-label">Preferred Date</label>
                            <input type="date" class="form-control" id="preferred_date" name="preferred_date" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        
                        <div class="col-12">
                            <label for="service" class="form-label">Service Needed</label>
                            <select class="form-control" id="service" name="service">
                                <option value="">Select a service...</option>
                                <option value="General Checkup">General Checkup & Cleaning</option>
                                <option value="Cosmetic Consultation">Cosmetic Consultation</option>
                                <option value="Teeth Whitening">Teeth Whitening</option>
                                <option value="Dental Implants">Dental Implants</option>
                                <option value="Orthodontics">Orthodontics (Braces/Invisalign)</option>
                                <option value="Root Canal">Root Canal Treatment</option>
                                <option value="Emergency">Dental Emergency</option>
                                <option value="Pediatric">Pediatric Dentistry</option>
                                <option value="Other">Other (Please specify in message)</option>
                            </select>
                        </div>
                        
                        <div class="col-12">
                            <label for="message" class="form-label">Additional Information</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Please share any additional details about your dental needs, concerns, or questions..."></textarea>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="consent" required>
                                <label class="form-check-label" for="consent">
                                    I consent to Vivid Smiles Dental Care contacting me about my appointment request and dental care information. *
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-calendar-check me-2"></i>Request Appointment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Find Our Location</h2>
            <p class="section-subtitle">We're conveniently located in the heart of Health City</p>
        </div>
        
        <div class="map-container">
            <!-- Replace this with your actual Google Maps embed code -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.123456789!2d-74.0060152!3d40.7128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjEiTiA3NMKwMDAnMjEuNiJX!5e0!3m2!1sen!2sus!4v1234567890"
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-6">
                <h5><i class="fas fa-car text-primary me-2"></i>Parking Information</h5>
                <p>Free parking is available in our dedicated lot behind the building. Additional street parking is available on Dental Street and Health Avenue.</p>
            </div>
            <div class="col-lg-6">
                <h5><i class="fas fa-bus text-primary me-2"></i>Public Transportation</h5>
                <p>We're easily accessible by public transit. The Health City Metro stop is just 2 blocks away, and several bus routes stop nearby.</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title text-start">Dental Emergencies</h2>
                <p class="mb-4">Dental emergencies can happen at any time. If you're experiencing severe tooth pain, trauma, or other urgent dental issues, don't wait. Contact us immediately for prompt care.</p>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h5><i class="fas fa-phone text-danger me-2"></i>Emergency Line</h5>
                        <p class="mb-2"><strong>(555) 123-4568</strong></p>
                        <p class="text-muted">Available 24/7 for urgent cases</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5><i class="fas fa-clock text-primary me-2"></i>Response Time</h5>
                        <p class="mb-2"><strong>Within 1 Hour</strong></p>
                        <p class="text-muted">We'll get back to you quickly</p>
                    </div>
                </div>
                
                <a href="tel:+15551234568" class="btn btn-danger btn-lg">
                    <i class="fas fa-phone me-2"></i>Call Emergency Line
                </a>
            </div>
            <div class="col-lg-6">
                <div class="service-card">
                    <h5 class="mb-3">Common Dental Emergencies:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Severe toothache or pain</li>
                        <li class="mb-2"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Knocked-out or broken tooth</li>
                        <li class="mb-2"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Lost filling or crown</li>
                        <li class="mb-2"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Dental trauma from accident</li>
                        <li class="mb-2"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Severe swelling or abscess</li>
                        <li class="mb-2"><i class="fas fa-exclamation-triangle text-warning me-2"></i>Uncontrolled bleeding</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Quick answers to common questions</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How far in advance should I book an appointment?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We recommend booking routine checkups 4-6 weeks in advance. For urgent concerns, we often have same-day or next-day availability. Emergency cases are seen immediately.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you accept my insurance?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We work with most major dental insurance plans. Our team will verify your benefits and help you understand your coverage before treatment. We also offer flexible payment options for uninsured patients.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What should I bring to my first appointment?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Please bring a valid ID, your insurance card, a list of current medications, and any dental records from previous dentists. Arrive 15 minutes early to complete paperwork.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you offer sedation dentistry?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer various sedation options including nitrous oxide (laughing gas) and oral sedation to help anxious patients feel comfortable during treatment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>