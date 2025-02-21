<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .contact-info {
            background-color: #e0e0e0;
            border-radius: 0px 0px 0px 50px;
            padding: 0.5rem 1rem;
            width: 100%;
            height: 40px;
            top: 0px;
            position: absolute;

        }

        .stafflink {
            background-color: #e0e0e0;
            border-radius: 0px 0px 0px 50px;
            padding: 0.5rem 1rem;
            height: 40px;
            width: 160px;
            color: rgb(0, 0, 0);
            position: absolute;
            right: 110px;
            outline: 5px solid white;
            top: 0px;
        }
        .top-links {
            background-color: #0087A9;
            border-radius: 0px 0px 0px 50px;
            padding: 0.5rem 1rem;
            height: 40px;
            color: white;
            position: absolute;
            right: 0px;
            top: 0px;
        }
        .nav-link.active {
            color: #0d6efd !important;
            font-weight: bold;
        }
        .secondary-nav {
            background-color: #f8f9fa;
            padding: 10px;
        }
        .news-tenders {
            background-color: #0087A9;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0px 0px 49px 0px;
            width: 200px;
        }
        .ticker {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .search-box {
            max-width: 250px;
        }

        a {
    color: blue; /* Default link color */
    text-decoration: none; /* Removes underline */
}

a:hover {
    color: red; /* Color when mouse hovers */
    text-decoration: underline; /* Adds underline on hover */
}

a:active {
    color: green; /* Color when clicked */
}






        @media (max-width: 768px) {
            .contact-info, .stafflink, .top-links {
                width: 100%;
                position: static;
                margin-bottom: 10px;
                text-align: center;
            }
            .stafflink, .top-links {
                outline: none;
            }
            .secondary-nav {
                flex-direction: column;
                align-items: flex-start;
            }
            .news-tenders {
                width: 100%;
                margin-bottom: 10px;
            }
            .search-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="p-2">
        <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="col-lg">
                <div class="ms-2">
                    <img src="logonew.png" width="260px">
               </div>
            </div>
            <div class="col-lg">
                <div class="contact-info mb-2 mb-md-0">
                    Contact us: +94 11 2581 162 | info@irrigation.gov.lk
                </div>
                <div class="stafflink mb-2 mb-md-0">
                    <a href="#" class=" me-3" style="color:#0087A9;">Staff Login</a>
                </div>
                <div class="top-links">
                    <a href="#" class="text-white me-3">Sinhala</a>
                    <a href="#" class="text-white">தமிழ்</a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> <!-- Changed justify-content-center to justify-content-end -->
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Research</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Downloads</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="secondary-nav d-flex flex-column flex-md-row justify-content-between align-items-center px-3">
            <div class="d-flex align-items-center mb-2 mb-md-0">
                <div class="news-tenders">News | Tenders</div>
                <div class="ticker ms-3">12.00 P.M Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
            <div class="d-flex align-items-center">
                <i class="fas fa-sync-alt text-muted me-2"></i>
                <i class="fas fa-bell text-muted me-3"></i>
                <div class="input-group search-box">
                    <input type="text" class="form-control form-control-sm" placeholder="Search service">
                    <span class="input-group-text bg-white border-0"><i class="fas fa-search text-muted"></i></span>
                </div>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>