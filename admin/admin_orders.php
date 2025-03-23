<?php include('admin_header.php'); ?>
<div class="container mt-4">
    <h2>Orders</h2>
    <p>Manage and view customer orders here.</p>

    <!-- Orders List -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Order List</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Orders -->
                    <tr>
                        <td>#1001</td>
                        <td>John Doe</td>
                        <td>2025-02-01</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <a href="view_order.php?id=1001" class="btn btn-info btn-sm">View</a>
                            <a href="edit_order.php?id=1001" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_order.php?id=1001" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#1002</td>
                        <td>Jane Smith</td>
                        <td>2025-02-02</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <a href="view_order.php?id=1002" class="btn btn-info btn-sm">View</a>
                            <a href="edit_order.php?id=1002" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_order.php?id=1002" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#1003</td>
                        <td>Bob Lee</td>
                        <td>2025-02-03</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td>
                            <a href="view_order.php?id=1003" class="btn btn-info btn-sm">View</a>
                            <a href="edit_order.php?id=1003" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_order.php?id=1003" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- Additional orders can be dynamically loaded here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('admin_footer.php'); ?>