<?php
$page_title = 'Zoren Trading | Premium B2B Industrial Supply & Trading Company';
$page_desc = 'Zoren Trading is a global B2B supplier of Chemical Products, Construction Materials, Valves, Hydraulic Components, Electrical Items, and Industrial Machinery.';
$custom_head = <<<'HTML'
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Zoren Trading",
      "url": "https://www.zorentrading.com",
      "logo": "https://www.zorentrading.com/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-XXXXXXXXXX",
        "contactType": "customer service"
      }
    }
    </script>
    <meta property="og:title" content="Zoren Trading | Global Industrial Supplier">
    <meta property="og:description" content="Premium B2B supplier of industrial raw materials, flow control solutions, construction materials, and heavy machinery for global projects.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.zorentrading.com/">
    <meta name="keywords" content="industrial trading, B2B supplier, chemical products, construction materials, valves, hydraulic fittings, electrical products, laboratory equipment, machinery">
HTML;
include 'header.php';
?>


    <!-- Hero Section -->
    <header class="hero-section">
        <!-- Placeholder for actual background image/video -->
        <img src="assets/images/hero.png" alt="Industrial Facility" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-badge mb-3 d-inline-flex align-items-center">
                        <span class="badge-dot"></span>
                        <span class="text-uppercase tracking-wide font-heading">Global Industrial Network</span>
                    </div>
                    <h1 class="hero-headline">Empowering the Future of Industrial Supply</h1>
                    <p class="hero-subheadline">Your trusted enterprise partner for Chemical Products, Construction Materials, Machinery, and Flow Control Solutions.</p>
                    <div class="hero-buttons">
                        <a href="request-quote.php" class="btn btn-primary-custom btn-lg"><i class="fas fa-file-invoice"></i> Request Quote</a>
                        <a href="products.php" class="btn btn-outline-custom btn-lg"><i class="fas fa-box-open"></i> Explore Products</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

    <!-- About Preview Section -->
    <section class="section-padding bg-light-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <img src="assets/images/about_corporate.png" alt="Zoren Trading Infrastructure" class="img-fluid rounded shadow-lg" style="height: 400px; width: 100%; object-fit: cover;">
                        <div class="experience-badge bg-white shadow rounded p-3 text-center position-absolute" style="bottom: -20px; right: 20px;">
                            <h3 class="text-accent-blue mb-0" style="font-size: 2.5rem; font-weight: 800;">24+</h3>
                            <p class="text-muted fw-bold mb-0 text-uppercase" style="font-size: 0.8rem;">Years<br>Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h4 class="text-uppercase" style="color: var(--accent-blue); font-weight: 700; font-size: 0.9rem; letter-spacing: 2px;">About Zoren Trading</h4>
                    <h2 class="section-title">Leading the Global Industrial Supply Chain</h2>
                    <p class="mb-4 text-muted">Zoren Trading is a premier global B2B industrial supply and trading company. We specialize in delivering high-quality materials and equipment to major factories, EPC companies, and construction firms worldwide.</p>
                    <div class="row mb-4">
                        <div class="col-sm-6 col-12 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success fs-4 me-3"></i>
                                <span class="fw-bold">Certified Quality</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-globe text-primary fs-4 me-3"></i>
                                <span class="fw-bold">Global Network</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-truck-loading text-warning fs-4 me-3"></i>
                                <span class="fw-bold">Reliable Logistics</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-headset text-danger fs-4 me-3"></i>
                                <span class="fw-bold">24/7 Support</span>
                            </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary-custom">Discover More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h4 class="text-uppercase" style="color: var(--accent-blue); font-weight: 700; font-size: 0.9rem; letter-spacing: 2px;">Our Portfolio</h4>
                <h2 class="section-title text-center">Comprehensive Product Categories</h2>
                <p class="section-subtitle mx-auto">Everything you need for your industrial, construction, and manufacturing projects in one place.</p>
            </div>
            
            <div class="row g-4">
                <!-- Category 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-flask category-icon"></i>
                        <h3 class="category-title">Chemical Products</h3>
                        <p class="category-desc">Industrial chemicals, solvents, acids, and water treatment solutions.</p>
                        <a href="chemical-products.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-hard-hat category-icon"></i>
                        <h3 class="category-title">Construction Materials</h3>
                        <p class="category-desc">Cement, steel products, structural materials, and waterproofing.</p>
                        <a href="construction-materials.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-cubes category-icon"></i>
                        <h3 class="category-title">Industrial Raw Materials</h3>
                        <p class="category-desc">Metals, minerals, polymers, and essential rubber products.</p>
                        <a href="industrial-raw-materials.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-faucet category-icon"></i>
                        <h3 class="category-title">Valves & Flow Control</h3>
                        <p class="category-desc">Ball, butterfly, gate, and safety relief valves for all industries.</p>
                        <a href="valves-flow-control.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-compress-arrows-alt category-icon"></i>
                        <h3 class="category-title">Hydraulic Products</h3>
                        <p class="category-desc">High-pressure hoses, fittings, tube assemblies, and connectors.</p>
                        <a href="hydraulic-products.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-bolt category-icon"></i>
                        <h3 class="category-title">Electrical Products</h3>
                        <p class="category-desc">MCCB, MCB, cables, panels, and industrial electrical components.</p>
                        <a href="electrical-products.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-tools category-icon"></i>
                        <h3 class="category-title">Fasteners & Hardware</h3>
                        <p class="category-desc">Bolts, nuts, U-bolts, thread rods, and custom foundation bolts.</p>
                        <a href="fasteners-hardware.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Category 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="category-card">
                        <i class="fas fa-microscope category-icon"></i>
                        <h3 class="category-title">Laboratory Equipment</h3>
                        <p class="category-desc">Glassware, precision testing, and measurement instruments.</p>
                        <a href="laboratory-equipment.php" class="category-link">View Products <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Extra Category for alignment -->
                <div class="col-lg-12 text-center mt-5">
                    <a href="products.php" class="btn btn-outline-custom">View All Categories</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Gallery Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-center">Product Gallery</h2>
                <p class="section-subtitle mx-auto">A visual showcase of our premium industrial supplies and equipment.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item overflow-hidden rounded shadow-sm border">
                        <img src="assets/images/products/valves.png" alt="Valves & Flow Control" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="p-3 text-center bg-white">
                            <h5 class="mb-0 font-heading" style="color: var(--primary-dark);">Valves & Flow Control</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item overflow-hidden rounded shadow-sm border">
                        <img src="assets/images/products/machinery.png" alt="Industrial Machinery" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="p-3 text-center bg-white">
                            <h5 class="mb-0 font-heading" style="color: var(--primary-dark);">Industrial Machinery</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item overflow-hidden rounded shadow-sm border">
                        <img src="assets/images/products/fasteners.png" alt="Fasteners & Hardware" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="p-3 text-center bg-white">
                            <h5 class="mb-0 font-heading" style="color: var(--primary-dark);">Fasteners & Hardware</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item overflow-hidden rounded shadow-sm border">
                        <img src="assets/images/products/hydraulic.png" alt="Hydraulic Products" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="p-3 text-center bg-white">
                            <h5 class="mb-0 font-heading" style="color: var(--primary-dark);">Hydraulic Products</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item overflow-hidden rounded shadow-sm border">
                        <img src="assets/images/products/electrical.png" alt="Electrical Products" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="p-3 text-center bg-white">
                            <h5 class="mb-0 font-heading" style="color: var(--primary-dark);">Electrical Products</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item overflow-hidden rounded shadow-sm border">
                        <img src="assets/images/products/piping.png" alt="Piping Systems" class="img-fluid w-100" style="height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="p-3 text-center bg-white">
                            <h5 class="mb-0 font-heading" style="color: var(--primary-dark);">Piping Systems</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="gallery.php" class="btn btn-outline-primary">View Full Gallery</a>
            </div>
        </div>
    </section>

    <!-- Industries Served Section -->
    <section class="section-padding bg-light-grey">
        <div class="container">
            <div class="text-center mb-5">
                <h4 class="text-uppercase" style="color: var(--accent-blue); font-weight: 700; font-size: 0.9rem; letter-spacing: 2px;">Market Reach</h4>
                <h2 class="section-title text-center">Industries We Serve</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="industry-box">
                        <img src="assets/images/oil.png" alt="Oil & Gas">
                        <div class="industry-box-overlay">
                            <h4>Oil & Gas</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="industry-box">
                        <img src="assets/images/construction.png" alt="Construction">
                        <div class="industry-box-overlay">
                            <h4>Construction & EPC</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="industry-box">
                        <img src="assets/images/chemical.png" alt="Chemical Plants">
                        <div class="industry-box-overlay">
                            <h4>Chemical Plants</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Generation CTA Section -->
    <section class="section-padding" style="background-color: var(--primary-dark); color: var(--white);">
        <div class="container text-center">
            <h2 class="mb-4" style="color: var(--white);">Ready to Start Your Next Project?</h2>
            <p class="mb-5" style="color: var(--light-grey); font-size: 1.1rem;">Contact us today to request a comprehensive quote for your industrial supply needs.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="request-quote.php" class="btn btn-primary-custom"><i class="fas fa-file-invoice"></i> Request a Quote</a>
                <a href="tel:+97477713981" class="btn btn-outline-custom" style="color: var(--white); border-color: var(--white);"><i class="fas fa-phone-alt"></i> Call Now</a>
            </div>
        </div>
    </section>

        <!-- Contact & Map Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-0 bg-white rounded overflow-hidden shadow-lg border">
                <!-- Map -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.7584482754773!2d51.5889301!3d25.177632799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45cd1eb20c599f%3A0xafc660ede2c4e0dc!2sZoren%20Trading%20and%20Services!5e0!3m2!1sen!2sin!4v1781551262589!5m2!1sen!2sin" width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Contact Form -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="h-100 p-4 p-lg-5 d-flex flex-column justify-content-center">
                        <h3 class="mb-4 text-center text-lg-start" style="color: var(--primary-dark);">Quick Inquiry</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="premium-form-label">Full Name *</label>
                                    <div class="form-icon-wrap">
                                        <input type="text" class="premium-input w-100" placeholder="John Doe" required>
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="premium-form-label">Company Name</label>
                                    <div class="form-icon-wrap">
                                        <input type="text" class="premium-input w-100" placeholder="Your Enterprise">
                                        <i class="fas fa-building"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="premium-form-label">Email Address *</label>
                                    <div class="form-icon-wrap">
                                        <input type="email" class="premium-input w-100" placeholder="sales@example.com" required>
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="premium-form-label">Phone / WhatsApp *</label>
                                    <div class="form-icon-wrap">
                                        <input type="tel" class="premium-input w-100" placeholder="+974 7771 3981" required>
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="premium-form-label">Requirement Details *</label>
                                    <textarea class="premium-input w-100" rows="5" placeholder="Specify product categories, technical specs, or quantities..." required></textarea>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary-custom premium-submit-btn w-100"><i class="fas fa-paper-plane me-2"></i> Submit Enquiry Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php include 'footer.php'; ?>
