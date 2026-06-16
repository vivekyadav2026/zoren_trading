<?php
$page_title = 'Our Products | Zoren Trading';
$page_desc = 'Explore Zoren Trading\'s comprehensive range of industrial products including chemicals, construction materials, valves, hydraulic fittings, and heavy machinery.';
$custom_head = <<<'HTML'
<meta property="og:title" content="Industrial Products Portfolio | Zoren Trading">
HTML;
include 'header.php';
?>


    <div class="page-banner" style="background-image: url('assets/images/about.png');">
        <div class="banner-overlay"></div>
        <div class="container text-center">
            <h1 class="display-4 font-heading fw-bold text-white mb-3">Our Products</h1>
            <p class="lead text-light mx-auto" style="max-width: 700px;">A comprehensive portfolio of industrial raw materials, flow control solutions, and construction supplies for global enterprise projects.</p>
        </div>
    </div>

    <!-- Products Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <!-- Product Categories -->
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-flask category-icon mb-3"></i>
                        <h3 class="category-title">Chemical Products</h3>
                        <p class="category-desc">Industrial chemicals, solvents, acids, alkalis, and water treatment solutions.</p>
                        <a href="chemical-products.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-hard-hat category-icon mb-3"></i>
                        <h3 class="category-title">Construction Materials</h3>
                        <p class="category-desc">Cement, steel products, pipes, structural materials, and waterproofing.</p>
                        <a href="construction-materials.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-cubes category-icon mb-3"></i>
                        <h3 class="category-title">Industrial Raw Materials</h3>
                        <p class="category-desc">High-grade metals, minerals, polymers, and essential rubber products.</p>
                        <a href="industrial-raw-materials.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-faucet category-icon mb-3"></i>
                        <h3 class="category-title">Valves & Flow Control</h3>
                        <p class="category-desc">Ball, butterfly, gate, globe, and safety relief valves for all flow applications.</p>
                        <a href="valves-flow-control.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-compress-arrows-alt category-icon mb-3"></i>
                        <h3 class="category-title">Hydraulic Hoses & Fittings</h3>
                        <p class="category-desc">Hydraulic hoses, fittings, tube assemblies, and heavy-duty connectors.</p>
                        <a href="hydraulic-products.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-bolt category-icon mb-3"></i>
                        <h3 class="category-title">Electrical Products</h3>
                        <p class="category-desc">MCCB, MCB, industrial cables, control panels, and reliable switches.</p>
                        <a href="electrical-products.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-tools category-icon mb-3"></i>
                        <h3 class="category-title">Fasteners & Hardware</h3>
                        <p class="category-desc">Industrial bolts, nuts, U-bolts, anchor bolts, thread rods, and flanges.</p>
                        <a href="fasteners-hardware.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-microscope category-icon mb-3"></i>
                        <h3 class="category-title">Laboratory Equipment</h3>
                        <p class="category-desc">Precision glassware, testing instruments, and measuring equipment.</p>
                        <a href="laboratory-equipment.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card text-start">
                        <i class="fas fa-truck-pickup category-icon mb-3"></i>
                        <h3 class="category-title">Industrial Machinery</h3>
                        <p class="category-desc">Heavy machinery including forklifts, cranes, excavators, and backhoes.</p>
                        <a href="industrial-machinery.php" class="category-link mt-3">Explore Category <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<?php include 'footer.php'; ?>
