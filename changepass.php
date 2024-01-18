<?php
    include('db.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $email = $_GET['email'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $oldPassword = $_POST['old_password'];
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            // Check if old password is correct
            $checkSql = "SELECT id FROM tbluser WHERE id = '$id' AND password = '$oldPassword'";
            $checkResult = $conn->query($checkSql);

            if ($checkResult->num_rows > 0) {
                // Check if new password and confirm password match
                if ($newPassword === $confirmPassword) {
                    // Your password change logic here
                    $updateSql = "UPDATE tbluser SET password = '$newPassword' WHERE id = $id";
                    $conn->query($updateSql);

                    echo '<script>';
                    echo 'alert("Password changed successfully!");';
                    echo 'window.location.href = "login.php";'; // Redirect to login.php after clicking OK
                    echo '</script>';
                } else {
                    echo "New password and confirm password do not match.";
                }
            } else {
                echo "Incorrect old password.";
            }
        }
    } else {
        echo "Invalid request.";
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">

                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><b>Change Password</b> </h1>
                
                <form action="login.php" method="POST" style="padding: 25px;">
                    
                    <div class="relative mb-4">
                        <label for="old_password" class="leading-7 text-sm text-gray-600">Old Password</label>
                        <input type="text" id="old_password" name="old_password"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            require>
                    </div>
                    <div class="relative mb-4">
                        <label for="new_password" class="leading-7 text-sm text-gray-600">New Password</label>
                        <input type="password" id="new_password" name="new_password"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            require>
                    </div>
                    <div class="relative mb-4">
                        <label for="confirm_password" class="leading-7 text-sm text-gray-600">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            require>
                    </div>
                    <button type="submit" value="Login" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Change Password</button>
                </form>
                <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
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