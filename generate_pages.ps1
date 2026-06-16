$pages = @(
    @{ file="chemical-products.php"; title="Chemical Products"; desc="Industrial chemicals, solvents, acids, and water treatment solutions for your enterprise needs." },
    @{ file="construction-materials.php"; title="Construction Materials"; desc="High-quality construction materials including cement, steel products, structural elements, and adhesives." },
    @{ file="industrial-raw-materials.php"; title="Industrial Raw Materials"; desc="Premium industrial raw materials, metals, minerals, polymers, and rubber products." },
    @{ file="valves-flow-control.php"; title="Valves & Flow Control Solutions"; desc="Ball valves, butterfly valves, gate valves, and automated valves for robust flow control." },
    @{ file="hydraulic-products.php"; title="Hydraulic Hoses & Fittings"; desc="Durable hydraulic hoses, fittings, tube assemblies, and connectors." },
    @{ file="electrical-products.php"; title="Electrical Products"; desc="Industrial electrical components, MCCB, cables, and control panels." },
    @{ file="fasteners-hardware.php"; title="Fasteners & Hardware"; desc="Heavy-duty fasteners, bolts, nuts, U-bolts, and flanges." },
    @{ file="laboratory-equipment.php"; title="Laboratory Equipment"; desc="Precision testing instruments and glassware for industrial laboratories." },
    @{ file="industrial-machinery.php"; title="Industrial Machinery"; desc="Heavy machinery including forklifts, cranes, excavators, and telehandlers." },
    @{ file="industries-we-serve.php"; title="Industries We Serve"; desc="Learn about the diverse industries Zoren Trading serves including Oil & Gas, Construction, and Manufacturing." },
    @{ file="certifications-quality.php"; title="Certifications & Quality"; desc="Our commitment to global standards and certifications." },
    @{ file="projects.php"; title="Projects & Supply Capabilities"; desc="Explore our successful projects and robust supply chain capabilities." },
    @{ file="gallery.php"; title="Gallery"; desc="Visual gallery of our products, facilities, and projects." },
    @{ file="blog.php"; title="Blog / News"; desc="Latest news, insights, and updates from the industrial trading world." },
    @{ file="faq.php"; title="FAQs"; desc="Frequently asked questions about our products, shipping, and order processes." },
    @{ file="request-quote.php"; title="Request A Quote"; desc="Request a customized quote for bulk industrial supplies." },
    @{ file="facility-management.php"; title="Facility Management"; desc="Smart building automation, maintenance materials, safety systems, and comprehensive operations support." }
)

$template = @"
<?php
`$page_title = '{{TITLE}} | Zoren Trading';
`$page_desc = '{{DESC}}';
include 'header.php';
?>

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
                    <a href="request-quote.php" class="btn btn-primary-custom mt-4">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
"@

foreach ($page in $pages) {
    $content = $template -replace '\{\{TITLE\}\}', $page.title -replace '\{\{DESC\}\}', $page.desc
    Set-Content -Path $page.file -Value $content
    Write-Host "Created $($page.file)"
}
