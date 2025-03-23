<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="assetsadmin/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background: #343a40;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            display: block;
            color: white;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #007bff;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h4 class="text-center">Admin Panel</h4>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="admin_users.php">Users</a>
        <a href="admin_products.php">Products</a>
        <a href="admin_categories.php">Categories</a>
        <a href="admin_orders.php">Orders</a>
        <a href="admin_reviews.php">Reviews</a>
        <a href="admin_coupons.php">Coupons</a>
        <a href="admin_index.php">Logout</a>

    </div>

    <div class="content">