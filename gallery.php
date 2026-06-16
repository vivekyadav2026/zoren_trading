<?php
$page_title = 'Gallery | Zoren Trading';
$page_desc = 'Visual gallery of our products, facilities, and projects.';
include 'header.php';
?>


    <div class="page-banner" style="background-image: url('assets/images/about.png');">
        <div class="banner-overlay"></div>
        <div class="container text-center">
            <h1 class="display-4 font-heading fw-bold text-white mb-3">Gallery</h1>
            <p class="lead text-light mx-auto" style="max-width: 700px;">Visual gallery of our products, facilities, and projects.</p>
        </div>
    </div>

    <!-- Product Gallery Section -->
    <section class="section-padding" style="min-height: 50vh;">
        <div class="container">
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
                <a href="request-quote.php" class="btn btn-primary-custom mt-4">Request a Quote</a>
            </div>
        </div>
    </section>

    

    
<?php include 'footer.php'; ?>
