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
<?php
include('db.php');

if (isset($_GET['id'])) {
$id = $_GET['id'];
$email = $_GET['email'];

$checkSql = "SELECT * FROM tbluser WHERE id = '$id' AND email = '$email'";
$result = $conn->query($checkSql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $id = $row['id'];
  $email = $row['email'];
  $name = $row['name'];
?>
    <!-- Header Start-->
    <div class="navbar" id="navbar">
        <a href="product.php?id=<?php echo $id;?>&email=<?php echo $email;?>" class="logo">Technical House</a>
        <a href="#" class="icon" onclick="toggleNavbar()">&#9776;</a>
        <a href="#" class="close-icon" onclick="toggleNavbar()">&#10006;</a>
        <a href="index.php" class="login">Log out</a>
        <a href="changepass.php?id=<?php echo $id;?>&name=<?php echo $name;?>&email=<?php echo $email;?>" class="login">Change Password</a>
        <a class="login"><?php echo $name;?></a>
        
    </div>

    <script>
    function toggleNavbar() {
        var navbar = document.getElementById("navbar");
        navbar.classList.toggle("responsive");
    }
    </script>
    <!-- Header End -->

    <!-- Product Download Start! -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-2 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Technical House</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Premium YouTube Package</h1>
                <hr>
            </div>

            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Motion Graphics</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/17U6hjCh3HEHD9Vb3YCjY9w"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Title Animation</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/17U6hjCh3HEHD9Vb3YCjY9w"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Thumbnail Bundle</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1bdomOqdvgXCG1aBy0MRLnA"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Subscribe Buttons</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/14ls8pZ-DYE0RdXKEB0VIKg"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">SEO Checklist</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1cp5Fh91C3pCj0L4mWB2qfQ"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Ranking Tools</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1ziDmTUsEhYAK8acZfsnjsg"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Outros Templates</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1utpCkI6uk5Gi6BeuEPxaAw"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Intro Logo</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1NVUxQCc56HhoIlHggFCgAg"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">End Screens</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1_cHUY0uq4jH7Lj9md7rOXg"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Channel Banners</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1xCtO1zvvsyNbAODdkhUSGQ"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Video Transitions</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1F_gbfNfUM7gt2CA_UaqAdQ"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Video Course</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1T4hUfvZoeGg8csXmbTJ92Q"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Premium Transitions</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1h9ILsm5orxv61T1zDYlwgQ"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Transition Sound Effects</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1tpGcOzy1egRgNoC7TOQ-rg"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Text Animations</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1vx7gen_t03BPsr1lg1D-UQ"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Subscribe Buttons</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1OePIV11evyoaBBtnw5VM0Q"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Sound Effects</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1ZDCbQn9zW1YRiQlbleAO2Q"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Royalty Free BG Music</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/10kc4uuhfDzNzzIB99JIoBA"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Viral Sound Effects</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1XvdQUX12XpyKgSdzLwuW5Q"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full w-21 bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Lower Third Pack</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1T1Y-aY19I9Sy7QtXuKLmUA"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Logo Templete</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1PtBY_B2M39ii-GaeRabsdA"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">End Screen Templete</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/10zGJecZ8094EWrxXxlnS9w"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Channel Art</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1KcOipW8j9ujSqXwvFyFg_Q"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-4 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                                <img src="img/th-logo.png" alt="Avatar" style="width:40px">
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Animated Backgrounds</h2>
                        </div>
                        <div class="flex-grow" style="padding-left: 40px;">
                            <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg buttonyt"
                                style="border-radius: 30px;" href="https://teraboxapp.com/s/1jvo0OkgFWzXI_Ff5gQl6jQ"
                                target="_blank">Download</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Download End! -->
    <b>
        <marquee style="background-color:black; color:yellow;"> DO NOT SELL THIS PACKAGE WITHOUT OUR PERMISSION.
        </marquee>
    </b>
    <!-- Footer Start! -->
    <?php
include("footer.php");
?>
    <!-- Footer End! -->
    <?php
    }
    else{
        include "usernot.php"; 
    }
    
}
else {
   
    include "invalidrequest.php"; 
  exit();
}

?>
</body>

</html>