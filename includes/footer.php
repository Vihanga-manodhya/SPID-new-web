<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPID</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../assets/css/all.min.css">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main-content {
            flex: 1 0 auto;
        }

        .footer {
            background: #2c3135;
            color: #fff;
            padding: 40px 0 0 0;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            display: block;
            padding: 2px 0;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: #dadada !important;
            padding-left: 8px;
        }

        .footer img {
            max-width: 100%;
            height: auto;
        }

        .vcount_bar {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #000000;
            padding: 15px 0;
            color: #ffffff;
            margin-top: 30px;
            text-align: center;
        }

        .vctxt {
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 0;
            letter-spacing: 0.5px;
        }

        .footer p.small {
            margin-bottom: 10px;
            line-height: 1.4;
        }

        /* Mobile Responsive Adjustments */
        @media (max-width: 768px) {
            .footer {
                padding: 30px 0 0 0;
            }

            .footer-column {
                margin-bottom: 20px;
            }

            .footer-links {
                margin-bottom: 15px;
            }

            .footer h3 {
                margin-top: 15px;
                margin-bottom: 10px;
                font-size: 1.2rem;
            }

            .vctxt {
                font-size: 14px;
            }

            .footer .widget img {
                max-width: 200px;
                margin-bottom: 15px;
            }
        }

        /* Small Mobile Devices */
        @media (max-width: 576px) {
            .footer {
                padding: 20px 0 0 0;
            }

            .footer-links li {
                margin-bottom: 6px;
            }

            .vcount_bar {
                padding: 12px 0;
                margin-top: 20px;
            }

            .footer .award-img {
                width: 40% !important;
            }

            .vctxt {
                font-size: 12px;
            }
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: #fff;
            color: #224b6f;
            text-align: center;
            line-height: 35px;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-3px);
            color: #fff;
        }

        .social-icons .fa-facebook:hover {
            background: #3b5998;
        }

        .social-icons .fa-whatsapp:hover {
            background: #25d366;
        }

        .social-icons .fa-youtube:hover {
            background: #ff0000;
        }

        .social-icons .fa-instagram:hover {
            background: #e4405f;
        }
    </style>
</head>

<body>

    <!-- Main Content Block -->
    <div class="main-content">
        <div class="container my-5">
            <!-- Your main content here -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row gy-3">
                <!-- Column 1: Logo and Description -->
                <div class="col-lg-4 col-md-6">
                    <div class="widget">
                        <div class="mb-3">
                            <img src="../assets/images/logo-2.png" alt="SPID Logo" class="img-fluid">
                        </div>
                        <p class="small">Southern Provincial Irrigation Department (SPID) came into being with the formation of Southern Provincial Council in 1989. The functions and duties of the province formerly carried out by the Central Irrigation Department were handed over to the newly formed Provincial Irrigation Department as per 13th amendment to the Constitution.</p>
                        <img src="../assets/images/award.jpg" alt="Award" class="img-fluid award-img" style="width: 60%;">
                        <div class="social-icons">
                            <a href="#" target="_blank" aria-label="Visit our Facebook page"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="_blank" aria-label="Contact us on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" target="_blank" aria-label="Visit our YouTube channel"><i class="fab fa-youtube"></i></a>
                            <a href="#" target="_blank" aria-label="Visit our Instagram profile"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <ul class="list-unstyled footer-links">
                        <li><a href="#" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="spid-about-us.php" class="text-light text-decoration-none">About Us</a></li>
                        <li><a href="spid-galle-district.php" class="text-light text-decoration-none">Galle District Office</a></li>
                        <li><a href="spid-matara-district.php" class="text-light text-decoration-none">Matara District Office</a></li>
                        <li><a href="spid-hambantota-district.php" class="text-light text-decoration-none">Hambantota District Office</a></li>
                        <li><a href="spid-contact-us.php" class="text-light text-decoration-none">Contact Us</a></li>
                        <li><a href="spid-services.php" class="text-light text-decoration-none">Services</a></li>
                    </ul>
                </div>

                <!-- Column 3: Additional Links -->
                <div class="col-lg-3 col-md-6">
                    <ul class="list-unstyled footer-links">
                        <li><a href="spid-tender-notices.php" class="text-light text-decoration-none">Tender Notices</a></li>
                        <li><a href="spid-project-and-research.php" class="text-light text-decoration-none">Research & Development</a></li>
                        <li><a href="spid-related-links.php" class="text-light text-decoration-none">Related Links</a></li>
                        <li><a href="https://spidgis.maps.arcgis.com/home/index.html" target="_blank" class="text-light text-decoration-none">GIS</a></li>
                        <li><a href="http://www.irrigationdept.sp.gov.lk/spidmis/" class="text-light text-decoration-none">MIS</a></li>
                        <li><a href="http://www.irrigationdept.sp.gov.lk/library/" class="text-light text-decoration-none">LIS</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Information -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="h5 mb-3 text-light">Contact us</h3>
                    <p class="small mb-3">
                        <strong>Address:</strong><br>
                        Provincial Director of Irrigations office,<br>
                        5th floor,<br>
                        District Secretariat Building,<br>
                        Galle, Sri Lanka.
                    </p>
                    <p class="small mb-2">
                        <strong>Telephone:</strong> +94 91 222 3206
                    </p>
                    <p class="small mb-2">
                        <strong>Fax:</strong> +94 91 224 5176
                    </p>
                    <p class="small">
                        <strong>E-Mail:</strong> info@irrigationdept.sp.gov.lk
                    </p>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="vcount_bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="vctxt">
                            All Rights Reserved - Southern Provincial Irrigation Department
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>