<?php
$mssg = "Payment Successfull";
?>

<?php
  
    // Include database connection file
    include 'db.php';

    // Start the session
    //session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve form data
        $name = $_POST['name'];
		$email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // Validate form data
       
            // Hash the password before saving to the database
            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $sql = "INSERT INTO tbluser (name, email, mobile) VALUES ('$name', '$email', '$mobile')";
            
            if ($conn->query($sql) === TRUE) {
                // Registration successful
                //header("Location: successpayment.php");
                echo "Data stored successfully in the database.";
                exit();
            } else {
                // Registration failed
                // $error = "Payment failed. Please try again.";
                echo "Payment failed. Please try again.";
            }

       
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
    <h1><?php echo $mssg; ?></h1>
</body>
</html>