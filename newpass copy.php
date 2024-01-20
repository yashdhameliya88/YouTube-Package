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
    <script>
    function validateForm() {

        var newPassword = document.getElementById("new_password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        if (newPassword === "" || confirmPassword === "") {
            alert("All fields are required");
            return false;
        }

        return true;
    }
    </script>
</head>

<body oncontextmenu="return false;">
    <?php
    include('db.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $email = $_GET['email'];

        $checkSql = "SELECT * FROM tbluser WHERE id = '$id' AND email = '$email'";
        $result = $conn->query($checkSql);

        if ($result->num_rows > 0) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $newPassword = $_POST['new_password'];
                $confirmPassword = $_POST['confirm_password'];

                    if ($newPassword === $confirmPassword) {
                        echo "confirm";
                        // Your password change logic here
                        $updateSql = "UPDATE tbluser SET password = '$newPassword' WHERE id = $id";
                        //$conn->query($updateSql);

                        if ($conn->query($updateSql) === TRUE) {
                            echo '<script>';
                        echo 'alert("Password reset successfully!");';
                        echo 'window.location.href = "login.php";'; // Redirect to login.php after clicking OK
                        echo '</script>';
                        }else {
                            echo '<script>';
                            echo 'alert("New password and confirm password do not match.");';
                            echo 'window.location.href = "";'; // Redirect to same page after clicking OK
                            echo '</script>';
                        }
                        
                    } 
               
            }

           
    }
    else{
        include "usernot.php"; 
    }
} else {
    include "invalidrequest.php"; 
}

    ?>

    <!-- Header Start-->
    <div class="navbar" id="navbar">
        <a href="product.php?id=<?php echo $id;?>&email=<?php echo $email;?>" class="logo">Technical House</a>
        <a href="#" class="icon" onclick="toggleNavbar()">&#9776;</a>
        <a href="#" class="close-icon" onclick="toggleNavbar()">&#10006;</a>
        <a href="index.php" class="login">Log out</a>
        <a href="product.php?id=<?php echo $id;?>&email=<?php echo $email;?>" class="login">Product</a>
        <a href="changepass.php?id=<?php echo $id;?>&name=<?php echo $name;?>&email=<?php echo $email;?>"
            class="login">Change Password</a>
        <a class="login"><?php echo $name;?></a>

    </div>
    <!-- Header End-->

    <!-- Main Product Start-->
    <section class="text-gray-600 body-font" style="background-color: #f7f9fd;">
        <div class="container mx-auto flex px-5 py-2 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="img/49 Copy.png">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">

                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><b>New Password</b> </h1>
                <form action="" method="POST" style="padding: 25px;" onclick="return validateForm()">

                    <div class="relative mb-4">
                        <label for="new_password" class="leading-7 text-sm text-gray-600">New Password</label>
                        <input type="password" id="new_password" name="new_password"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            required>
                    </div>
                    <div class="relative mb-4">
                        <label for="confirm_password" class="leading-7 text-sm text-gray-600">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            required>
                    </div>
                    <button type="submit" value="submit"
                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                        style="width: 100%;">Submit</button>
                </form>

            </div>
        </div>
    </section>
    <!-- Main Product End-->

    <?php
        include("footer.php");
    ?>

</body>

</html>