<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - WebBuy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
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

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #007bff;
            margin-bottom: 15px;
        }

        .profile-header h2 {
            margin: 10px 0 5px;
            font-size: 1.8rem;
        }

        .profile-header p {
            color: #666;
            font-size: 1rem;
        }

        .info-section {
            margin-top: 20px;
        }

        .info-section h5 {
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .info-section p {
            color: #555;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            padding: 15px;
            font-size: 1.2rem;
        }

        .card-body {
            padding: 20px;
        }

        .btn-edit {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-edit:hover {
            background: #0056b3;
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

        <!-- Profile Header -->
        <div class="profile-header">
            <img src="assets/CAR1.jpg" alt="User Profile" class="profile-img">
            <h2>John Doe</h2>
            <p>johndoe@example.com</p>
            <a href="edit-profile.php" class="btn btn-edit">
                <i class="fas fa-user-edit"></i> Edit Profile
            </a>
        </div>

        <!-- Profile Information -->
        <div class="info-section">
            <div class="card">
                <div class="card-header">Bio</div>
                <div class="card-body">
                    <p>Passionate web developer with experience in front-end and back-end technologies.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Location</div>
                <div class="card-body">
                    <p>New York, USA</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Joined On</div>
                <div class="card-body">
                    <p>January 15, 2023</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>