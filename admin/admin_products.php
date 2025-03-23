<?php include('admin_header.php'); ?>
<div class="container mt-4">
    <h2>Products</h2>
    <p>Manage your products here. You can add, edit, or remove products.</p>

    <!-- Add Product Button -->
    <div class="mb-4">
        <a href="add_product.php" class="btn btn-success">Add New Product</a>
    </div>

    <!-- Products List -->
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Product List</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Products -->
                    <tr>
                        <td>#101</td>
                        <td>Product A</td>
                        <td>$29.99</td>
                        <td>150</td>
                        <td>
                            <a href="edit_product.php?id=101" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_product.php?id=101" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#102</td>
                        <td>Product B</td>
                        <td>$39.99</td>
                        <td>80</td>
                        <td>
                            <a href="edit_product.php?id=102" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_product.php?id=102" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#103</td>
                        <td>Product C</td>
                        <td>$49.99</td>
                        <td>200</td>
                        <td>
                            <a href="edit_product.php?id=103" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_product.php?id=103" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- More products can be dynamically listed here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('admin_footer.php'); ?>