<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoren Trading - Official Letterhead Template</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-dark: #0A192F;
            --primary-blue: #1E3A8A;
            --accent-blue: #2563EB;
            --text-main: #1E293B;
            --text-muted: #64748B;
            --light-grey: #F8FAFC;
            --border-color: #E2E8F0;
        }

        /* --- Page Layout & Print Setup --- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            background-color: #E2E8F0; /* Grey background for desktop view */
            line-height: 1.6;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .letterhead-container {
            width: 210mm;
            min-height: 297mm; /* A4 size standard */
            margin: 40px auto;
            padding: 20mm 20mm 25mm 20mm;
            background-color: #ffffff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* --- Watermark Background --- */
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            opacity: 0.04;
            pointer-events: none;
            z-index: 1;
            background-image: url('assets/images/logo.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

        /* --- Header Section --- */
        .header {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid var(--light-grey);
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-img {
            height: 65px;
            width: auto;
            object-fit: contain;
        }

        .brand-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-dark);
            letter-spacing: 0.5px;
            line-height: 1.1;
        }

        .brand-subtitle {
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--accent-blue);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 2px;
        }

        .contact-info {
            text-align: right;
            font-size: 0.82rem;
            color: var(--text-muted);
            line-height: 1.5;
            max-width: 300px;
        }

        .contact-info p {
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
        }

        .contact-info i {
            color: var(--accent-blue);
            width: 14px;
            text-align: center;
        }

        /* --- Branding Design Line --- */
        .design-bar {
            height: 6px;
            width: 100%;
            background: linear-gradient(90deg, var(--primary-dark) 0%, var(--accent-blue) 70%, var(--primary-blue) 100%);
            margin-bottom: 25px;
            border-radius: 3px;
        }

        /* --- Document Meta (Ref & Date) --- */
        .doc-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            font-size: 0.9rem;
            color: var(--text-main);
            position: relative;
            z-index: 2;
        }

        .meta-ref span, .meta-date span {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .editable-meta {
            border-bottom: 1px dashed var(--border-color);
            padding: 0 5px;
            outline: none;
            display: inline-block;
            min-width: 100px;
        }

        /* --- Recipient Area --- */
        .recipient-section {
            margin-bottom: 30px;
            font-size: 0.95rem;
            position: relative;
            z-index: 2;
        }

        .recipient-title {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }

        .recipient-details {
            line-height: 1.5;
            outline: none;
            border: 1px dashed transparent;
            padding: 5px;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .recipient-details:hover, .recipient-details:focus {
            border-color: var(--accent-blue);
            background-color: var(--light-grey);
        }

        /* --- Document Body --- */
        .letter-body {
            flex-grow: 1;
            font-size: 10.5pt;
            line-height: 1.7;
            text-align: justify;
            position: relative;
            z-index: 2;
            color: #2D3748;
        }

        .letter-subject {
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 25px;
            color: var(--primary-dark);
            text-decoration: underline;
            outline: none;
            border: 1px dashed transparent;
            padding: 5px;
        }
        
        .letter-subject:hover, .letter-subject:focus {
            border-color: var(--accent-blue);
            background-color: var(--light-grey);
        }

        .editable-content {
            outline: none;
            border: 1px dashed transparent;
            padding: 10px;
            border-radius: 4px;
            min-height: 250px;
            transition: all 0.2s;
        }

        .editable-content:hover, .editable-content:focus {
            border-color: var(--accent-blue);
            background-color: var(--light-grey);
        }

        /* --- Sign-off Area --- */
        .sign-off {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            position: relative;
            z-index: 2;
        }

        .signature-block {
            width: 200px;
        }

        .sig-line {
            height: 1px;
            background-color: var(--text-main);
            margin-bottom: 10px;
            margin-top: 50px;
        }

        .sig-title {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 2px;
        }

        .sig-subtitle {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        /* --- Footer Area --- */
        .footer {
            margin-top: 40px;
            border-top: 2px solid var(--light-grey);
            padding-top: 15px;
            position: relative;
            z-index: 2;
        }

        .footer-logo-line {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--primary-dark);
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .footer-tagline {
            color: var(--accent-blue);
        }

        .footer-address-line {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-align: center;
            line-height: 1.4;
        }

        /* --- Utility Action Bar (Desktop only) --- */
        .action-bar {
            width: 210mm;
            margin: 20px auto 0 auto;
            background-color: var(--primary-dark);
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
        }

        .action-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-title i {
            color: var(--accent-blue);
        }

        .action-desc {
            font-size: 0.8rem;
            color: #94a3b8;
        }

        .action-buttons {
            display: flex;
            gap: 12px;
        }

        .action-btn {
            background-color: var(--accent-blue);
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .action-btn:hover {
            background-color: var(--primary-blue);
            transform: translateY(-1px);
        }

        .action-btn-secondary {
            background-color: #334155;
        }

        .action-btn-secondary:hover {
            background-color: #475569;
        }

        /* --- Mobile Responsiveness for Screens --- */
        @media screen and (max-width: 840px) {
            .letterhead-container {
                display: block !important;
                width: 95% !important;
                margin: 20px auto !important;
                padding: 20px 15px 25px 15px !important;
                min-height: auto !important;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05) !important;
            }

            .action-bar {
                width: 95% !important;
                margin: 10px auto 0 auto !important;
                flex-direction: column !important;
                gap: 15px !important;
                text-align: center !important;
                align-items: center !important;
                padding: 15px !important;
            }

            .action-buttons {
                width: 100% !important;
                justify-content: center !important;
                display: flex !important;
                gap: 10px !important;
            }

            .header {
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                text-align: center !important;
                gap: 20px !important;
                padding-bottom: 15px !important;
                margin-bottom: 20px !important;
                border-bottom: 2px solid var(--light-grey) !important;
            }

            .logo-section {
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                text-align: center !important;
                gap: 10px !important;
            }

            .contact-info {
                display: block !important;
                text-align: center !important;
                max-width: 100% !important;
            }

            .contact-info p {
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
                text-align: center !important;
                margin-bottom: 6px !important;
            }

            .design-bar {
                display: block !important;
                height: 5px !important;
                width: 100% !important;
                margin-bottom: 20px !important;
            }

            .doc-meta {
                display: flex !important;
                flex-direction: column !important;
                gap: 10px !important;
                margin-bottom: 20px !important;
                font-size: 0.9rem !important;
            }

            .meta-ref, .meta-date {
                display: block !important;
                text-align: left !important;
            }

            .recipient-section {
                display: block !important;
                margin-bottom: 20px !important;
                font-size: 0.9rem !important;
                text-align: left !important;
            }

            .recipient-details {
                display: block !important;
                width: 100% !important;
            }

            .letter-subject {
                display: block !important;
                font-size: 0.95rem !important;
                margin-bottom: 20px !important;
                line-height: 1.4 !important;
                text-align: center !important;
                white-space: normal !important;
            }

            .editable-content {
                min-height: 200px !important;
                padding: 5px !important;
                font-size: 10pt !important;
            }

            .sign-off {
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                gap: 30px !important;
                margin-top: 30px !important;
            }

            .signature-block {
                width: 100% !important;
                text-align: center !important;
                display: block !important;
            }

            .sig-line {
                margin-top: 20px !important;
                width: 150px !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .watermark {
                width: 180px !important;
                height: 180px !important;
            }

            .footer {
                margin-top: 30px !important;
                padding-top: 15px !important;
                display: block !important;
            }

            .footer-logo-line {
                display: flex !important;
                flex-direction: column !important;
                gap: 6px !important;
                text-align: center !important;
                align-items: center !important;
            }

            .footer-address-line {
                font-size: 0.7rem !important;
                text-align: center !important;
                margin-top: 10px !important;
                display: block !important;
            }
        }

        /* --- Print Media Query Overrides --- */
        @media print {
            body {
                background-color: #ffffff;
                color: #000000;
            }

            .letterhead-container {
                margin: 0;
                padding: 0;
                box-shadow: none;
                width: 100%;
                height: 100%;
                min-height: auto;
            }

            .action-bar {
                display: none !important;
            }

            /* Enable watermark background print on browsers */
            .watermark {
                opacity: 0.05 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .editable-content, .recipient-details, .editable-meta, .letter-subject {
                border: none !important;
                background-color: transparent !important;
                padding: 0 !important;
            }
        }
    </style>
</head>
<body>

    <!-- Action Bar (Desktop Utilities) -->
    <div class="action-bar">
        <div>
            <div class="action-title">
                <i class="fas fa-file-invoice"></i> Zoren Trading Letterhead Creator
            </div>
            <div class="action-desc">
                Click on any text area inside the page border below to customize details, then print.
            </div>
        </div>
        <div class="action-buttons">
            <button class="action-btn action-btn-secondary" onclick="resetLetter()">
                <i class="fas fa-undo"></i> Reset Template
            </button>
            <button class="action-btn" onclick="window.print()">
                <i class="fas fa-print"></i> Print / Save PDF
            </button>
        </div>
    </div>

    <!-- Letterhead Document Page -->
    <div class="letterhead-container" id="printable-area">
        
        <!-- Watermark background -->
        <div class="watermark"></div>

        <!-- Document Top Block -->
        <div>
            <!-- Header section -->
            <div class="header">
                <div class="logo-section">
                    <img src="assets/images/logo.png" alt="Zoren Trading Logo" class="logo-img">
                    <div>
                        <div class="brand-name">ZOREN TRADING</div>
                        <div class="brand-subtitle">Trading & Services</div>
                    </div>
                </div>
                
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> B Ring Road, Zone 15, Al Doha Al Jadeeda, Doha, Qatar</p>
                    <p><i class="fas fa-phone-alt"></i> +974 7771 3981 | +974 6001 1038</p>
                    <p><i class="fas fa-envelope"></i> info@zorentradingservices.com</p>
                    <p><i class="fas fa-envelope"></i> sales@zorentradingservices.com</p>
                    <p><i class="fas fa-globe"></i> www.zorentradingservices.com</p>
                </div>
            </div>

            <!-- Decorative colorful branding bar -->
            <div class="design-bar"></div>

            <!-- Meta details (editable) -->
            <div class="doc-meta">
                <div class="meta-ref">
                    <span>Ref:</span> 
                    <div class="editable-meta" contenteditable="true" id="ref-field">ZT/QT/2026/042</div>
                </div>
                <div class="meta-date">
                    <span>Date:</span> 
                    <div class="editable-meta" contenteditable="true" id="date-field"><?php echo date('F d, Y'); ?></div>
                </div>
            </div>

            <!-- Recipient details (editable) -->
            <div class="recipient-section">
                <div class="recipient-title">To,</div>
                <div class="recipient-details" contenteditable="true" id="recipient-field">
                    The Procurement Director,<br>
                    Global Infrastructure & Contracting Corp,<br>
                    Doha, State of Qatar
                </div>
            </div>

            <!-- Subject Line (editable) -->
            <div class="letter-subject" contenteditable="true" id="subject-field">
                Subject: Quotation for Bulk Supply of Industrial Valves and Piping Materials
            </div>

            <!-- Letter Body content (editable) -->
            <div class="letter-body">
                <div class="editable-content" contenteditable="true" id="body-field">
                    <p style="margin-bottom: 15px;">Dear Sir/Madam,</p>
                    
                    <p style="margin-bottom: 15px;">With reference to your inquiry dated June 18, 2026, regarding supply specifications for the upcoming metro line expansion project, we are pleased to submit our formal quotation and catalogs for your review.</p>
                    
                    <p style="margin-bottom: 15px;">Zoren Trading is a globally certified B2B supplier specializing in premium-grade Industrial Chemicals, Valves, Flow Control Systems, Construction Steel, and Heavy Machinery. Our supply chain network guarantees rigorous quality checks according to ASME/API global standards and prompt delivery schedules directly to your construction sites.</p>
                    
                    <p style="margin-bottom: 15px;">Enclosed with this cover letter, you will find the complete breakdown of technical specifications, itemized unit prices, payment schedules, and shipping options. We offer a 10% volume discount for bulk orders exceeding QAR 150,000, along with comprehensive local logistics support.</p>
                    
                    <p style="margin-bottom: 15px;">We look forward to partnering with your esteemed organization for this prestigious national infrastructure project. Should you require further clarifications or a customized payment plan, please do not hesitate to contact our operations team at info@zorentradingservices.com.</p>
                    
                    <p>Thanking you and assuring you of our best professional services at all times.</p>
                </div>
            </div>
        </div>

        <!-- Document Bottom Block -->
        <div>
            <!-- Signatures -->
            <div class="sign-off">
                <div class="signature-block">
                    <div class="sig-line"></div>
                    <div class="sig-title" contenteditable="true">Prepared By</div>
                    <div class="sig-subtitle" contenteditable="true">Logistics Operations</div>
                </div>
                <div class="signature-block" style="text-align: right;">
                    <div class="sig-line"></div>
                    <div class="sig-title" contenteditable="true">For Zoren Trading</div>
                    <div class="sig-subtitle" contenteditable="true">Authorized Signatory</div>
                </div>
            </div>

            <!-- Footer Details -->
            <div class="footer">
                <div class="footer-logo-line">
                    <span>Zoren Trading & Services</span>
                    <span class="footer-tagline">Excellence in Global B2B Supply</span>
                </div>
                <div class="footer-address-line">
                    Registered Office: B Ring Road, Zone 15, Al Doha Al Jadeeda, Doha, State of Qatar<br>
                    CR No: 125487B | Email: sales@zorentradingservices.com | Hotline: +974 7771 3981
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts to save/reset content states -->
    <script>
        function resetLetter() {
            if(confirm("Are you sure you want to reset the letter contents back to the original template?")) {
                document.getElementById('ref-field').innerText = "ZT/QT/2026/042";
                document.getElementById('date-field').innerText = "<?php echo date('F d, Y'); ?>";
                document.getElementById('recipient-field').innerHTML = "The Procurement Director,<br>Global Infrastructure & Contracting Corp,<br>Doha, State of Qatar";
                document.getElementById('subject-field').innerText = "Subject: Quotation for Bulk Supply of Industrial Valves and Piping Materials";
                document.getElementById('body-field').innerHTML = `<p style="margin-bottom: 15px;">Dear Sir/Madam,</p><p style="margin-bottom: 15px;">With reference to your inquiry dated June 18, 2026, regarding supply specifications for the upcoming metro line expansion project, we are pleased to submit our formal quotation and catalogs for your review.</p><p style="margin-bottom: 15px;">Zoren Trading is a globally certified B2B supplier specializing in premium-grade Industrial Chemicals, Valves, Flow Control Systems, Construction Steel, and Heavy Machinery. Our supply chain network guarantees rigorous quality checks according to ASME/API global standards and prompt delivery schedules directly to your construction sites.</p><p style="margin-bottom: 15px;">Enclosed with this cover letter, you will find the complete breakdown of technical specifications, itemized unit prices, payment schedules, and shipping options. We offer a 10% volume discount for bulk orders exceeding QAR 150,000, along with comprehensive local logistics support.</p><p style="margin-bottom: 15px;">We look forward to partnering with your esteemed organization for this prestigious national infrastructure project. Should you require further clarifications or a customized payment plan, please do not hesitate to contact our operations team at info@zorentradingservices.com.</p><p>Thanking you and assuring you of our best professional services at all times.</p>`;
            }
        }
    </script>
</body>
</html>
