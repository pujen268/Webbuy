<?php include('admin_header.php'); ?>
<div class="container mt-4">
    <h2>Coupons</h2>
    <p>Create, manage, or delete discount coupons for your customers.</p>

    
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Create New Coupon</h3>
            <form action="add_coupon.php" method="POST">
                <div class="mb-3">
                    <label for="coupon-code" class="form-label">Coupon Code</label>
                    <input type="text" id="coupon-code" name="coupon-code" class="form-control" required placeholder="Enter coupon code">
                </div>
                <div class="mb-3">
                    <label for="discount-amount" class="form-label">Discount Amount (%)</label>
                    <input type="number" id="discount-amount" name="discount-amount" class="form-control" required placeholder="Enter discount percentage">
                </div>
                <div class="mb-3">
                    <label for="expiry-date" class="form-label">Expiry Date</label>
                    <input type="date" id="expiry-date" name="expiry-date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Coupon</button>
            </form>
        </div>
    </div>

    <div classadada="card"> 
        <div class="card-body">
            <h3 class="card-title">Active Coupons</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Coupon Code</th>
                        <th>Discount (%)</th>
                        <th>Expiry Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SPRING20</td>
                        <td>20%</td>
                        <td>2025-05-01</td>
                        <td>
                            <a href="edit_coupon.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_coupon.php?id=1" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
       
                        <td>SUMMER15</td>
                        <td>15%</td>
                        <td>2025-06-30</td>
                        <td>
                            <a href="edit_coupon.php?id=2" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_coupon.php?id=2" class="btn btn-danger btn-sm">Delete</a>
                             
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>  

<?php include('admin_footer.php'); ?>  
