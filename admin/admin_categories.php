<?php include('admin_header.php'); ?>
<div class="container mt-4">
    <h2 class="text-center">Categories</h2>
    <p class="text-center">Manage product categories here. You can add, edit, or delete categories.</p>

    <!-- Add Category Form -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Add New Category</h3>
            <form action="add_category.php" method="POST">
                <div class="mb-3">
                    <label for="category-name" class="form-label">Category Name</label>
                    <input type="text" id="category-name" name="category-name" class="form-control" required placeholder="Enter category name">
                </div>
                <div class="mb-3">
                    <label for="category-description" class="form-label">Description</label>
                    <textarea id="category-description" name="category-description" class="form-control" rows="4" placeholder="Enter category description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Category</button>
            </form>
        </div>
    </div>

    <!-- Category List -->
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Existing Categories</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Electronics</td>
                            <td>Devices like phones, laptops, etc.</td>
                            <td>
                                <a href="edit_category.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_category.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fashion</td>
                            <td>Clothing, accessories, etc.</td>
                            <td>
                                <a href="edit_category.php?id=2" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_category.php?id=2" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <!-- More categories will be listed here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('admin_footer.php'); ?>