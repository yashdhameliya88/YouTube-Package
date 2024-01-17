<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .navbar a.login, .navbar a.order, .navbar a.profile {
            float: right;
        }

        .navbar a.icon {
            float: left;
            display: none;
        }

        .navbar a.close-icon {
            float: left;
            display: none;
        }

        @media screen and (max-width: 600px) {
            .navbar a:not(.icon):not(.close-icon) {
                display: none;
            }

            .navbar a.icon {
                float: right;
                display: block;
            }

            .navbar a.close-icon {
                float: left;
                display: none;
            }

            .navbar.responsive a.icon {
                position: absolute;
                top: 0;
                right: 0;
                display: none;
            }

            .navbar.responsive a.close-icon {
                position: absolute;
                top: 0;
                right: 0;
                display: block;
            }

            .navbar.responsive a:not(.icon):not(.close-icon) {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>
<body>

<div class="navbar" id="navbar">
    <a href="index.php" class="logo">Technical House</a>
    <a href="#" class="icon" onclick="toggleNavbar()">&#9776;</a>
    <a href="#" class="close-icon" onclick="toggleNavbar()">&#10006;</a>
    <a href="login.php" class="login">Login</a>
    <a href="successpayment.php" class="order">My Order</a>
</div>

<script>
    function toggleNavbar() {
        var navbar = document.getElementById("navbar");
        navbar.classList.toggle("responsive");
    }
</script>

</body>
</html>
