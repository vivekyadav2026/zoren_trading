$pages = @(
    @{ file="chemical-products.html"; title="Chemical Products"; desc="Industrial chemicals, solvents, acids, and water treatment solutions for your enterprise needs." },
    @{ file="construction-materials.html"; title="Construction Materials"; desc="High-quality construction materials including cement, steel products, structural elements, and adhesives." },
    @{ file="industrial-raw-materials.html"; title="Industrial Raw Materials"; desc="Premium industrial raw materials, metals, minerals, polymers, and rubber products." },
    @{ file="valves-flow-control.html"; title="Valves & Flow Control Solutions"; desc="Ball valves, butterfly valves, gate valves, and automated valves for robust flow control." },
    @{ file="hydraulic-products.html"; title="Hydraulic Hoses & Fittings"; desc="Durable hydraulic hoses, fittings, tube assemblies, and connectors." },
    @{ file="electrical-products.html"; title="Electrical Products"; desc="Industrial electrical components, MCCB, cables, and control panels." },
    @{ file="fasteners-hardware.html"; title="Fasteners & Hardware"; desc="Heavy-duty fasteners, bolts, nuts, U-bolts, and flanges." },
    @{ file="laboratory-equipment.html"; title="Laboratory Equipment"; desc="Precision testing instruments and glassware for industrial laboratories." },
    @{ file="industrial-machinery.html"; title="Industrial Machinery"; desc="Heavy machinery including forklifts, cranes, excavators, and telehandlers." },
    @{ file="industries-we-serve.html"; title="Industries We Serve"; desc="Learn about the diverse industries Zoren Trading serves including Oil & Gas, Construction, and Manufacturing." },
    @{ file="certifications-quality.html"; title="Certifications & Quality"; desc="Our commitment to global standards and certifications." },
    @{ file="projects.html"; title="Projects & Supply Capabilities"; desc="Explore our successful projects and robust supply chain capabilities." },
    @{ file="gallery.html"; title="Gallery"; desc="Visual gallery of our products, facilities, and projects." },
    @{ file="blog.html"; title="Blog / News"; desc="Latest news, insights, and updates from the industrial trading world." },
    @{ file="faq.html"; title="FAQs"; desc="Frequently asked questions about our products, shipping, and order processes." },
    @{ file="request-quote.html"; title="Request A Quote"; desc="Request a customized quote for bulk industrial supplies." }
)

$template = @"
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{TITLE}} | Zoren Trading</title>
    <meta name="description" content="{{DESC}}">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <i class="fas fa-industry text-primary fs-2"></i>
                <span class="navbar-brand-text">ZOREN TRADING</span>
            </a>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="products.html">Products</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-custom" href="contact.html">Contact</a></li>
                </ul>
                <div class="d-none d-lg-flex">
                    <a href="request-quote.html" class="btn btn-primary-custom">Request A Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-light-grey py-5 border-bottom border-light">
        <div class="container text-center py-5">
            <h1 class="display-4 font-heading fw-bold" style="color: var(--primary-dark);">{{TITLE}}</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">{{DESC}}</p>
        </div>
    </div>

    <section class="section-padding" style="min-height: 50vh;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-4">Content for {{TITLE}}</h3>
                    <p class="text-muted">This page is designed to showcase our premium offerings in this category. For inquiries, please use the floating buttons or visit the contact page.</p>
                    <a href="request-quote.html" class="btn btn-primary-custom mt-4">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Action Buttons -->
    <div class="floating-container">
        <a href="https://wa.me/91XXXXXXXXXX" class="floating-btn floating-whatsapp" data-tooltip="Chat on WhatsApp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+91XXXXXXXXXX" class="floating-btn floating-call" data-tooltip="Call Us Now">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
"@

foreach ($page in $pages) {
    $content = $template -replace '\{\{TITLE\}\}', $page.title -replace '\{\{DESC\}\}', $page.desc
    Set-Content -Path $page.file -Value $content
    Write-Host "Created $($page.file)"
}
