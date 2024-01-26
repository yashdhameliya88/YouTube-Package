<?php
// $apiKey = "rzp_live_uKtN55KQReOrk3";
$apiKey = "rzp_live_iJjqNwsB6EeNNi";
?>

<?php
  
    // Include database connection file
    include 'db.php';

    // Start the session
    //session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = generateRandomId();
        // Retrieve form data
        $name = $_POST['name'];
		$email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // Validate form data
       
            // Hash the password before saving to the database
            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $sql = "INSERT INTO tbluser (id, name, email, mobile) VALUES ('$id','$name', '$email', '$mobile')";
            
            if ($conn->query($sql) === TRUE) {
                // $last_id = $conn->insert_id;
                $last_id = $id;
                $last_email = $email;
                // Registration successful
                //header("Location: successpayment.php");
                $errors = "Data stored successfully in the database.";
                //exit();
            } else {
                // Registration failed
                // $error = "Payment failed. Please try again.";
                $errors = "Payment failed. Please try again.";
            }

       
    }

    function generateRandomId($length = 8) {
        $characters = '0123456789';
        $id = '';
        for ($i = 0; $i < $length; $i++) {
            $id .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $id;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Technical House</title>
</head>

<body>

    <!-- Header Start-->
    <?php
include("header.php");
?>
    <!-- Header End-->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"
                        style="text-align:center;"><b>Verify Your Details</b>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 text-left">
                        <address>
                            <strong>Customer Details:</strong><br>
                            <b>Name: </b><?php echo $name; ?><br>
                            <b>Phone: </b><?php echo $mobile; ?><br>
                            <b>Email: </b><?php echo $email; ?><br>
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            <?php echo date("d-m-Y");?><br><br>
                        </address>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" style="padding-bottom:30px;">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Item</strong></td>
                                        <td class="text-center"><strong>Price</strong></td>
                                        <td class="text-center"><strong>Quantity</strong></td>
                                        <td class="text-right"><strong>Totals</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                    <tr>
                                        <td>YouTube Package</td>
                                        <td class="text-center">49.00 ₹</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">49.00 ₹</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="text-center"> </td>
                                        <td class="text-center"></td>
                                        <td class="text-right"> -</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-right"> -</td>
                                    </tr>
                                    <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                        <td class="thick-line text-right">49.00 ₹</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>TAX RATE</strong></td>
                                        <td class="no-line text-right">00.00 ₹</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Total</strong></td>
                                        <td class="no-line text-right">49.00 ₹</td>
                                    </tr>
                                    <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>

                                        <td class="no-line text-right">
										<button id="rzp-button1" type="submit" value="Pay Now"
                                                class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                                style="width: 100%;">Pay Now
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    <?php
include("footer.php");
?>


</body>

</html>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var options = {
    "key": "<?php echo $apiKey; ?>", // Enter the Key ID generated from the Dashboard
    "amount": "4900", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Technical House", //your business name
    "description": "",
    "image": "https://yt3.googleusercontent.com/yti/AGOGRCqpMYAw_JXbe741H1TG2B6ckH7cirv5S9FtCe1lHQ=s88-c-k-c0x00ffffff-no-rj",
    "id": "<?php echo 'OID'.rand(10,100).'YTPKG'; ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "http://localhost/YouTube-package/successpayment.php?id=<?php echo $last_id; ?>&email=<?php echo $last_email;?>",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "<?php echo $_POST['name']; ?>", //your customer's name
        "email": "<?php echo $_POST['email']; ?>",
        "contact": "<?php echo $_POST['mobile']; ?>" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e) {
    rzp1.open();
    e.preventDefault();
}
</script>