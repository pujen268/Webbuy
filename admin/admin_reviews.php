<?php include('admin_header.php'); ?>
<div class="container mt-4">
    <h2>Reviews</h2>
    <p>View and manage product reviews from customers here.</p>

    <!-- Reviews List -->
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Customer Reviews</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Reviews -->
                    <tr>
                        <td>Product A</td>
                        <td>John Doe</td>
                        <td>
                            <span class="badge bg-warning">4/5</span>
                        </td>
                        <td>This is a great product! Highly recommend.</td>
                        <td>
                            <a href="approve_review.php?id=101" class="btn btn-success btn-sm">Approve</a>
                            <a href="delete_review.php?id=101" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product B</td>
                        <td>Jane Smith</td>
                        <td>
                            <span class="badge bg-warning">3/5</span>
                        </td>
                        <td>Good, but could use some improvements.</td>
                        <td>
                            <a href="approve_review.php?id=102" class="btn btn-success btn-sm">Approve</a>
                            <a href="delete_review.php?id=102" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product C</td>
                        <td>Bob Lee</td>
                        <td>
                            <span class="badge bg-danger">2/5</span>
                        </td>
                        <td>Not satisfied with the quality of the product.</td>
                        <td>
                            <a href="approve_review.php?id=103" class="btn btn-success btn-sm">Approve</a>
                            <a href="delete_review.php?id=103" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- More reviews can be dynamically listed here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('admin_footer.php'); ?>