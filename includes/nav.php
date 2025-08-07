<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/images/logosvg.svg" alt="Vivid Smiles Logo" class="me-2" style="height: 60px; width: auto;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" href="about.php">
                        <i class="fas fa-info-circle me-1"></i>About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>" href="services.php">
                        <i class="fas fa-stethoscope me-1"></i>Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" href="contact.php">
                        <i class="fas fa-phone me-1"></i>Contact
                    </a>
                </li>
                <li class="nav-item ms-2">
                    <a class="btn btn-primary btn-sm" href="contact.php#booking-form">
                        <i class="fas fa-calendar-plus me-1"></i>Book Now
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
