<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./navbarstyle.css">
    <title>Technical House</title>
</head>
<body oncontextmenu="return false;">

<div class="navbar" id="navbar">
    <a href="index.php" class="logo">Technical House</a>
    <a href="#" class="icon" onclick="toggleNavbar()">&#9776;</a>
    <a href="#" class="close-icon" onclick="toggleNavbar()">&#10006;</a>
    <a href="login.php" class="login">Login</a>
</div>

<script>
    function toggleNavbar() {
        var navbar = document.getElementById("navbar");
        navbar.classList.toggle("responsive");
    }
</script>

</body>
</html>
