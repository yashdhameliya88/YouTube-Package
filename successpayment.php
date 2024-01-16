<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if password has been generated
    $checkSql = "SELECT * FROM tbluser WHERE id = $id AND password_generated = 0";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $password = generateRandomPassword();

        // Update password and set the flag
        $updateSql = "UPDATE tbluser SET password = '$password', password_generated = 1 WHERE id = $id";
        $conn->query($updateSql);
    } else {
        // Password has already been generated
        $selectSql = "SELECT * FROM tbluser WHERE id = $id";
        $result = $conn->query($selectSql);
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $password = $row['password'];
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
    <section class="text-gray-600 body-font" style="background-color: #d7d7d7;">
        <div class="container mx-auto flex px-5 py-2 md:flex-row flex-col items-center">
            <!-- Content Start -->
            <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center" style="max-width: 600px;">
                <tr bgcolor="#d7d7d7">
                    <td
                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                    </td>
                </tr>

                <!-- This encapsulation is required to ensure correct rendering on Windows 10 Mail app. -->
                <tr bgcolor="#d7d7d7">
                    <td
                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                        <!-- Seperator Start -->
                        <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center"
                            style="max-width: 600px; width: 100%;">
                            <tr bgcolor="#d7d7d7">
                                <td height="30"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                        </table>
                        <!-- Seperator End -->

                        <!-- Generic Pod Left Aligned with Price breakdown Start -->
                        <table align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="white"
                            class="bordered-left-right"
                            style="border-left: 10px solid #d7d7d7; border-right: 10px solid #d7d7d7; max-width: 600px; width: 100%;">
                            <tr height="50">
                                <td colspan="3"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr align="center">
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td class="text-primary"
                                    style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                    <img src="http://dgtlmrktng.s3.amazonaws.com/go/emails/generic-email-template/tick.png"
                                        alt="GO" width="50"
                                        style="border: 0; font-size: 0; margin: 0; max-width: 100%; padding: 0;">
                                </td>
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr height="17">
                                <td colspan="3"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr align="center">
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td class="text-primary"
                                    style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                    <h1
                                        style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">
                                        Payment received</h1>
                                </td>
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr height="30">
                                <td colspan="3"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                        Hi <?php echo $name; ?>,
                                    </p>
                                </td>
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr height="10">
                                <td colspan="3"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                        Your transaction was successful!</p>
                                    <br>
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0; ">
                                        <strong>Payment Details:</strong><br />

                                        Amount: 49.00 ₹ <br />
                                    </p><br>
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0; ">
                                        <strong>Your Login ID and Password:</strong><br />

                                        ID: <b style="color:blue;"><?php echo $email; ?></b> <br />             
                                        Password: <b style="color:blue;"><?php echo $password; ?></b>
                                    </p>
                                    <br>
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                        We advise to keep this as screenshoot for future reference.&nbsp;&nbsp;&nbsp;&nbsp;<br />
                                    </p>
                                </td>
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr height="30">
                                <td
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td
                                    style="border-bottom: 1px solid #D3D1D1; color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr height="30">
                                <td colspan="3"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                            <tr align="center">
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                                <td
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                        <strong>Login to Download YouTube Package</strong>
                                    </p><br>
                                    <a class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg button1"
                        href="https://rzp.io/l/ytpack" target="_blank">Login</a>
                                    <p
                                        style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                    </p>
                                </td>
                                <td width="36"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>

                            <tr height="50">
                                <td colspan="3"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>

                        </table>
                        <!-- Generic Pod Left Aligned with Price breakdown End -->

                        <!-- Seperator Start -->
                        <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center"
                            style="max-width: 600px; width: 100%;">
                            <tr bgcolor="#d7d7d7">
                                <td height="50"
                                    style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                </td>
                            </tr>
                        </table>
                        <!-- Seperator End -->

                    </td>
                </tr>
            </table>


        </div>
    </section>
    <!-- Main Product End-->

    <!-- Footer Start -->
<?php
include "footer.php";
?>
    <!-- Footer End -->
</body>

</html>