<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Technical House</title>
</head>

<body>

    <?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $email = $_GET['email'];

    // Check if password has been generated
    $checkSql = "SELECT * FROM tbluser WHERE id = '$id' AND email = '$email' AND password_generated = 0";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $password = generateRandomPassword();

        // Update password and set the flag
        $updateSql = "UPDATE tbluser SET password = '$password', password_generated = 1 WHERE id = $id";
        $conn->query($updateSql);

        include "recivepayment.php";
    } else {
        $checkSql1 = "SELECT * FROM tbluser WHERE id = '$id' AND email = '$email' AND password_generated = 1";
        $result1 = $conn->query($checkSql1);

        if($result1->num_rows > 0)
        {
            // Password has already been generated
        //$selectSql = "SELECT * FROM tbluser WHERE id = '$id' AND email = '$email'";
        //$result = $conn->query($selectSql);
        $row1 = $result1->fetch_assoc();
        $name = $row1['name'];
        $email = $row1['email'];
        $password = $row1['password'];

        include "recivepayment.php";
        }
        else{
            include "usernot.php";
        }
    }
} else {
    include "invalidrequest.php";
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


</body>

</html>