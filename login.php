<?php

include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo '<script>';
                    echo 'alert("Email and Password are required");';
                    echo 'window.location.href = "";'; // Redirect to same page after clicking OK
                    echo '</script>';
    } else {
        $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login successful
            $row = $result->fetch_assoc();
            $id = $row['id']; // Assuming your tbluser has an 'id' column
            $email = $row['email'];
            header("Location: product.php?id=$id&email=$email");
            exit();
        } else {
            echo '<script>';
                    echo 'alert("Invalid email or password");';
                    echo 'window.location.href = "";'; // Redirect to same page after clicking OK
                    echo '</script>';
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical House</title>
    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email === "" || password === "") {
                alert("Email and Password are required");
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <!-- Header Start-->
    <?php
    include("header.php");
    ?>
    <!-- Header End-->

    <!-- Main Product Start-->
    <section class="text-gray-600 body-font" style="background-color: #f7f9fd;">
        <div class="container mx-auto flex px-5 py-2 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="img/49 Copy.png">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">

                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><b>Login</b> </h1>
                <p class="leading-relaxed mb-5 text-gray-600">Use Your Email and Password for Login.</p>
                <form action="login.php" method="POST" style="padding: 25px;" onsubmit="return validateForm()">
                    
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            required>
                    </div>
                    <div class="relative mb-4">
                        <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            required>
                    </div>
                    <button type="submit" value="Login" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login</button>
                </form>
                
            </div>
        </div>
        </div>
    </section>
    <!-- Main Product End-->

    <?php
    include("footer.php");
    ?>
</body>

</html>
