<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - WebBuy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f8f9fa;
            background: linear-gradient(to right, #eef2f3, #dfe9f3);
            font-family: Arial, sans-serif;
        }

        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .back-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 1rem;
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .back-btn:hover {
            color: #0056b3;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #007bff;
            margin: 0 auto 20px;
            display: block;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-control-file {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f8f9fa;
            width: 100%;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 5px;
            display: none;
        }

        .error.show {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Profile Container -->
    <div class="profile-container">
        <!-- Back Button -->
        <a href="javascript:history.back()" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back
        </a>

        <!-- User Image -->
        <img src="assets/CAR1.jpg" alt="User Profile" class="profile-img">

        <!-- Form to Edit Profile -->
        <h2 class="text-center mb-4">Edit Profile</h2>

        <!-- Profile Edit Form -->
        <form id="editProfileForm" action="edit-profile.php" method="POST" enctype="multipart/form-data">
            <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <span id="usernameError" class="error">Username is required and must be at least 3 characters.</span>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <span id="emailError" class="error">Please enter a valid email address.</span>
            </div>

            <!-- Bio -->
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="4" required></textarea>
                <span id="bioError" class="error">Bio must be at least 10 characters.</span>
            </div>

            <!-- Location -->
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
                <span id="locationError" class="error">Location is required.</span>
            </div>

            <!-- Profile Picture -->
            <div class="form-group">
                <label for="profilePicture">Profile Picture</label>
                <input type="file" class="form-control-file" id="profilePicture" name="profilePicture">
                <span id="profilePictureError" class="error">Please upload a valid image file.</span>
            </div>

            <!-- Save Changes Button -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Validation Script -->
    <script>
        document.getElementById('editProfileForm').addEventListener('submit', function (event) {
            let isValid = true;

            // Validate Username
            const username = document.getElementById('username').value.trim();
            if (username.length < 3) {
                document.getElementById('usernameError').classList.add('show');
                isValid = false;
            } else {
                document.getElementById('usernameError').classList.remove('show');
            }

            // Validate Email
            const email = document.getElementById('email').value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById('emailError').classList.add('show');
                isValid = false;
            } else {
                document.getElementById('emailError').classList.remove('show');
            }

            // Validate Bio
            const bio = document.getElementById('bio').value.trim();
            if (bio.length < 10) {
                document.getElementById('bioError').classList.add('show');
                isValid = false;
            } else {
                document.getElementById('bioError').classList.remove('show');
            }

            // Validate Location
            const location = document.getElementById('location').value.trim();
            if (location.length < 3) {
                document.getElementById('locationError').classList.add('show');
                isValid = false;
            } else {
                document.getElementById('locationError').classList.remove('show');
            }

            // Validate Profile Picture (Optional)
            const profilePicture = document.getElementById('profilePicture').files[0];
            if (profilePicture) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!allowedTypes.includes(profilePicture.type)) {
                    document.getElementById('profilePictureError').classList.add('show');
                    isValid = false;
                } else {
                    document.getElementById('profilePictureError').classList.remove('show');
                }
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</body>

</html>