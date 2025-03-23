<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .logout-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .logout-button {
            background-color: #ff4b4b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .logout-button:hover {
            background-color: #ff1c1c;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h1>Are you sure you want to log out?</h1>
        <button class="logout-button" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            // Perform logout actions here
            // For example, clear session or local storage
            localStorage.removeItem('userToken'); // Example: Remove a stored token
            sessionStorage.clear(); // Clear session storage

            // Redirect to the login page or homepage
            window.location.href = 'login.php'; // Replace with your login page URL
        }
    </script>
</body>
</html>