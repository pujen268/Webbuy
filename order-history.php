<?php include('includes/after_login_header.php'); ?>

<!-- Custom CSS -->
<style>
    /* Add Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #eef2f3, #dfe9f3);
        color: #333;
    }

    /* Smooth fade-in effect for the page */
    .fade-in {
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    /* Table styling */
    .table {
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .table:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .table th,
    .table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #f0f0f0;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
        color: #555;
    }

    .table tr:last-child td {
        border-bottom: none;
    }

    .table tr {
        transition: background-color 0.3s ease;
    }

    .table tr:hover {
        background-color: #f9f9f9;
    }

    /* Badge styling */
    .badge {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 500;
        border-radius: 20px;
    }

    .badge.bg-success {
        background-color: #28a745 !important;
    }

    .badge.bg-warning {
        background-color: #ffc107 !important;
    }

    /* Button styling */
    .btn {
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    /* Responsive design */
    @media (max-width: 767px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .btn {
            width: 100%;
            margin-bottom: 10px;
        }

        .table {
            width: 100%;
        }

        .table th,
        .table td {
            padding: 10px;
        }
    }

    /* Additional spacing and alignment */
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    h2 {
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
    }

    .alert {
        border-radius: 8px;
        font-weight: 500;
    }

    .text-center {
        margin-top: 30px;
    }
</style>

<div class="container mt-5 fade-in">
    <h2 class="text-center mb-4">Your Order History</h2>

    <!-- Check if there are orders -->
    <?php
    // In a real application, you would fetch orders from the database here
    $orders = [
        ['id' => 1, 'date' => 'January 15, 2025', 'status' => 'Shipped', 'total' => 50],
        ['id' => 2, 'date' => 'January 10, 2025', 'status' => 'Delivered', 'total' => 30],
        // Add more orders here as needed
    ];

    if (empty($orders)) {
        echo '<div class="alert alert-warning text-center">You have no past orders. Start shopping now!</div>';
    } else {
        echo '<table class="table table-bordered">';
        echo '<thead>
                <tr>
                    <th>#</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Details</th>
                </tr>
              </thead>
              <tbody>';

        foreach ($orders as $order) {
            echo '<tr>
                    <td>' . $order['id'] . '</td>
                    <td>' . $order['date'] . '</td>
                    <td><span class="badge ' . ($order['status'] == 'Delivered' ? 'bg-success' : 'bg-warning') . '">' . $order['status'] . '</span></td>
                    <td>$' . $order['total'] . '</td>
                    <td><a href="order-details.php?id=' . $order['id'] . '" class="btn btn-info btn-sm">View Details</a></td>
                  </tr>';
        }

        echo '</tbody></table>';
    }
    ?>

    <!-- If no orders, display an encouragement to shop -->
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-primary btn-lg">Start Shopping</a>
    </div>
</div>
<br>

<?php include('includes/footer.php'); ?>