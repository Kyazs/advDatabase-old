<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <title>ZCJ Visitor Management System</title>
    <style>
        * {
            font-family: 'Quicksand', sans-serif;
        }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            height: 100%;
        }

        .sidebar {
            background-color: #254C79;
            width: 250px;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }

        .sidebar h3 {
            color: white;
            margin: 0 0 20px 0;
            text-align: center;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #B26D31;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #254C79;
            margin-bottom: 20px;
            text-align: center;
            font-size: 30px;
        }

        .contact-info {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }

        .contact-info h3 {
            color: #254C79;
            margin-bottom: 15px;
        }

        .contact-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
        <img src="../../assets/images/ZCJ-logo.png" alt="ZCJ Logo">
            <h3>ZCJ Visitor Management System</h3>
            <a href="../../resources/visitor/accDashboard.php">Dashboard</a>
            <a href="../../resources/visitor/accQR.php">QR Code</a>
            <a href="../../resources/visitor/accProfile.php">Profile</a>
            <a href="../../resources/visitor/accContact.php">Contact Us</a>
            <a href="../../resources/visitor/accAbout.php">About Us</a>
            <a href="../../public/index.php">Logout</a>

        </div>
        
        <div class="main-content">
            <h2>CONTACT US</h2>
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>If you have any questions or inquiries, please feel free to reach out to us:</p>
                <p><strong>Email:</strong> support@zjcvisitors.com</p>
                <p><strong>Phone:</strong> +63 912 345 6789</p>
                <p><strong>Address:</strong> 123 ZJC Street, Zamboanga City, Philippines</p>
                <p>We look forward to hearing from you!</p>
            </div>
        </div>
    </div>
</body>
</html>
