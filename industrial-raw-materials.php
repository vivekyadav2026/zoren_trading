<?php
$page_title = 'Industrial Raw Materials | Zoren Trading';
$page_desc = 'Premium industrial raw materials, metals, minerals, polymers, and rubber products.';
include 'header.php';
?>


    <div class="page-banner" style="background-image: url('assets/images/about.png');">
        <div class="banner-overlay"></div>
        <div class="container text-center">
            <h1 class="display-4 font-heading fw-bold text-white mb-3">Industrial Raw Materials</h1>
            <p class="lead text-light mx-auto" style="max-width: 700px;">Premium industrial raw materials, metals, minerals, polymers, and rubber products.</p>
        </div>
    </div>

        <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="assets/images/products/raw_materials.png" alt="Industrial Raw Materials" class="img-fluid rounded shadow-lg">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h3 class="mb-4 text-primary-dark font-heading">Essential Industrial Raw Materials</h3>
                    <p class="text-muted mb-4">We source and supply essential raw materials required for continuous production cycles in manufacturing facilities. Our global network allows us to provide consistent, high-purity materials to keep your production lines running efficiently.</p>
                    
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex"><i class="fas fa-check text-accent-blue me-3 mt-1"></i> <div><strong>Metals & Alloys:</strong> Aluminum Ingots, Copper Cathodes, Zinc, and Brass.</div></li>
                        <li class="mb-3 d-flex"><i class="fas fa-check text-accent-blue me-3 mt-1"></i> <div><strong>Polymers & Plastics:</strong> PE, PP, PVC Resin, PET, and Polystyrene.</div></li>
                        <li class="mb-3 d-flex"><i class="fas fa-check text-accent-blue me-3 mt-1"></i> <div><strong>Industrial Minerals:</strong> Limestone, Silica Sand, Bentonite, and Barite.</div></li>
                        <li class="mb-3 d-flex"><i class="fas fa-check text-accent-blue me-3 mt-1"></i> <div><strong>Rubber Products:</strong> Natural Rubber, Synthetic Rubber (SBR, NBR), and Carbon Black.</div></li>
                        <li class="mb-3 d-flex"><i class="fas fa-check text-accent-blue me-3 mt-1"></i> <div><strong>Additives:</strong> Pigments, Fillers, and Plasticizers.</div></li>
                    </ul>
                    
                    <a href="request-quote.php" class="btn btn-primary-custom mt-4">Request a Full Catalog</a>
                </div>
            </div>
        </div>
    </section>

    

        <!-- Quick Enquiry Section -->
    <section class="section-padding bg-light-grey border-top border-light" id="quick-enquiry">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-4">
                        <h2 class="font-heading fw-bold" style="color: var(--primary-dark);">Quick Enquiry</h2>
                        <p class="text-muted">Need a fast quote or technical specifications? Drop us a message.</p>
                    </div>
                    <div class="premium-form-wrapper">
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
                                <div class="col-md-12 text-center mt-4">
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
