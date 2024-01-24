<?php
$apiKey = "rzp_live_uKtN55KQReOrk3";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical House</title>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("mobile").value;

            if (name === "" || email === "" || mobile === "") {
                alert("All fields must be filled out");
                return false;
            }

            // Check if mobile number is exactly 10 digits
            if (mobile.length !== 10) {
                alert("Mobile number must be exactly 10 digits");
                return false;
            }

            // Check if email ends with "@gmail.com"
            if (!email.endsWith("@gmail.com")) {
                alert("Email must end with @gmail.com");
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

                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><b>Check Out</b> </h1>

                <form action="payscript.php" method="POST" style="padding: 25px;" onsubmit="return validateForm()">
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            required>
                            
                    </div>
                    <div class="relative mb-4">
                        <label for="mobile" class="leading-7 text-sm text-gray-600">Mobile No.</label>
                        <input type="tel" id="mobile" name="mobile"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            pattern="[0-9]{10}" required>
                        <small class="text-red-500">Note: Mobile number should be 10-digit only.</small>
                    </div>
                    <button type="submit"
                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" style="width:100%;">Check Out</button>
                    <br><br>
                        <center>
                            <b><p>I have an account: </a><a href="login.php" style="cursor: pointer; text-decoration: none; color: blue;" onmouseover="this.style.textDecoration='underline'; this.style.color='blue'" onmouseout="this.style.textDecoration='none'; this.style.color='blue'">Login</a>
                            </p></b>
                        </center>
                    
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
