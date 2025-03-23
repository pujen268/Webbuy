<?php include('admin_header.php'); ?>
<div class="container mt-4">
    <h2>Users</h2>
    <p>Manage users here. You can view, edit, or delete user accounts.</p>

    <div class="mb-4">
        <a href="add_user.php" class="btn btn-success">Add New User</a>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">User List</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>#001</td>
                        <td>john_doe</td>
                        <td>johndoe@example.com</td>
                        <td>Admin</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="edit_user.php?id=001" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_user.php?id=001" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td>jane_smith</td>
                        <td>janesmith@example.com</td>
                        <td>User</td>
                        <td><span class="badge bg-danger">Inactive</span></td>
                        <td>
                            <a href="edit_user.php?id=002" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_user.php?id=002" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#003</td>
                        <td>bob_lee</td>
                        <td>boblee@example.com</td>
                        <td>User</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="edit_user.php?id=003" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_user.php?id=003" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('admin_footer.php'); ?>