<?php
$current_page = basename($_SERVER['PHP_SELF']);
$is_product_active = in_array($current_page, [
    'products.php', 
    'chemical-products.php', 
    'construction-materials.php', 
    'industrial-raw-materials.php', 
    'valves-flow-control.php', 
    'hydraulic-products.php', 
    'electrical-products.php', 
    'fasteners-hardware.php', 
    'laboratory-equipment.php', 
    'industrial-machinery.php',
    'facility-management.php'
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Zoren Trading | Premium B2B Industrial Supply & Trading Company'; ?></title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : 'Zoren Trading is a global B2B supplier of Chemical Products, Construction Materials, Valves, Hydraulic Components, Electrical Items, and Industrial Machinery.'; ?>">
    
    <!-- Custom Head Content (e.g. SEO, OG tags, Schema markup) -->
    <?php if (isset($custom_head)) { echo $custom_head; } ?>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-8 d-flex flex-wrap align-items-center gap-3 top-bar-contacts">
                    <a href="tel:+97477713981"><i class="fas fa-phone-alt me-2"></i> +974 7771 3981</a>
                    <a href="mailto:info@zorentradingservices.com"><i class="fas fa-envelope me-2"></i> info@zorentradingservices.com</a>
                    <span class="text-nowrap"><i class="fas fa-clock me-2"></i> Mon - Sat: 8:00 AM - 5:00 PM</span>
                </div>
                <!-- <div class="col-lg-3 col-md-4 text-end top-bar-social">
                    <a href="https://www.facebook.com/profile.php?id=61591135315928" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/zorentrading202" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/zoren-trading-43218a418/?isSelfProfile=true" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/zorentradingservices" target="_blank"><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/images/logo.png" alt="Zoren Trading Logo" style="height: 55px; max-height: 55px; width: auto; object-fit: contain; margin-right: 10px;">
                <span class="navbar-brand-text">ZOREN TRADING</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link nav-link-custom<?php echo ($current_page == 'index.php') ? ' active' : ''; ?>" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom<?php echo ($current_page == 'about.php') ? ' active' : ''; ?>" href="about.php">About Us</a></li>
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link nav-link-custom dropdown-toggle<?php echo $is_product_active ? ' active' : ''; ?>" href="products.php" data-bs-toggle="dropdown" data-bs-auto-close="outside">Products</a>
                        <div class="dropdown-menu shadow w-100 mega-menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h6 class="mega-menu-title">Industrial Materials</h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="chemical-products.php"><i class="fas fa-chevron-right"></i> Chemical Products</a></li>
                                            <li><a href="construction-materials.php"><i class="fas fa-chevron-right"></i> Construction Materials</a></li>
                                            <li><a href="industrial-raw-materials.php"><i class="fas fa-chevron-right"></i> Raw Materials</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="mega-menu-title">Flow & Fluid Control</h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="valves-flow-control.php"><i class="fas fa-chevron-right"></i> Valves & Flow Control</a></li>
                                            <li><a href="hydraulic-products.php"><i class="fas fa-chevron-right"></i> Hydraulic Hoses & Fittings</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="mega-menu-title">Hardware & Electrical</h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="electrical-products.php"><i class="fas fa-chevron-right"></i> Electrical Products</a></li>
                                            <li><a href="fasteners-hardware.php"><i class="fas fa-chevron-right"></i> Fasteners & Hardware</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="mega-menu-title">Equipment & Machinery</h6>
                                        <ul class="mega-menu-list">
                                            <li><a href="laboratory-equipment.php"><i class="fas fa-chevron-right"></i> Laboratory Equipment</a></li>
                                            <li><a href="industrial-machinery.php"><i class="fas fa-chevron-right"></i> Industrial Machinery</a></li>
                                            <li><a href="facility-management.php"><i class="fas fa-chevron-right"></i> Facility Management</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-custom<?php echo ($current_page == 'industries-we-serve.php') ? ' active' : ''; ?>" href="industries-we-serve.php">Industries</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom<?php echo ($current_page == 'contact.php') ? ' active' : ''; ?>" href="contact.php">Contact</a></li>
                </ul>
                <div class="d-none d-lg-flex">
                    <a href="request-quote.php" class="btn btn-primary-custom">Request A Quote</a>
                </div>
            </div>
        </div>
    </nav>
