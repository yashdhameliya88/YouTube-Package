
<?php
include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Retrieve data
    $sql = "SELECT * FROM tbluser WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $password = generateRandomPassword();

        // Update password in the database
        $updateSql = "UPDATE tbluser SET password = '$password' WHERE id = $id";
        $conn->query($updateSql);
    } else {
        echo "No data found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}

function generateRandomPassword($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
      <!-- Header Start-->
      <?php
include("header.php");
?>
<!-- Main Product Start-->
<section class="text-gray-600 body-font" style="background-color: #f7f9fd;">
    <div class="container mx-auto flex px-5 py-2 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="img/49 Copy.png">
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><b>Payment successful</b>
        </h1>
        <b><h3>Here is your ID and Password please save it.</h3></b>
        <br class="hidden lg:inline-block">
        <p>ID: <?php echo $email; ?></p>
    <p>Password: <?php echo $password; ?></p>
        <div class="flex justify-center">
          <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg button1"
            href="https://rzp.io/l/ytpack" target="_blank">Buy Now</a>
        </div>
      </div>
    </div>
  </section>
<!-- Main Product End-->
  
</body>
</html>