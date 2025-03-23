<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebBuy - E-Commerce</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        /* Remove default margin and padding */
        html, body {
            margin: 0;
            padding: 0;
        }

        /* Custom Styles for Header */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #007bff;
        }

        .navbar-nav .nav-item {
            white-space: nowrap;
            /* Prevents text from wrapping */
        }

        .navbar-nav .nav-link {
            display: flex;
            align-items: center;
            /* Aligns text and icon in one line */
            gap: 6px;
            /* Adds spacing between icon and text */
            font-size: 0.9rem; /* Smaller font size for links */
        }

        .search-bar {
            width: 400px; /* Increased width for better visibility */
            margin-left: auto; /* Push search bar to the right */
        }

        .search-bar .form-control {
            border-radius: 0; /* Square corners for the search input */
        }

        .search-bar .btn {
            border-radius: 0; /* Square corners for the search button */
        }

        @media (max-width: 767px) {
            .navbar-nav .nav-link {
                font-size: 0.9rem; /* Smaller font size for mobile */
            }

            .navbar-nav {
                text-align: center;
            }

            .search-bar {
                width: 100%; /* Full width on mobile */
                margin-left: 0; /* Reset margin for mobile */
            }
        }

        body {
            padding-top: 70px; /* Add padding to body to account for fixed navbar */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/WEBBUYLOGO.png" alt="WebBuy Logo" height="50" width="60">
            </a>

            <!-- Toggler button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php"><i class="fas fa-image"></i> GALLERY</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us.php"><i class="fas fa-info-circle"></i> ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php"><i class="fas fa-envelope"></i> CONTACT US</a></li>
                </ul>
            </div>

            <!-- Search Bar -->
            <form class="d-flex ms-3 search-bar" action="#" method="get">
                <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <!-- Account Dropdown -->
            <div class="dropdown ms-3">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                    <i class="fas fa-user"></i> Account
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <li><a class="dropdown-item" href="sign-up.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/validate.js"></script>
</body>

</html>