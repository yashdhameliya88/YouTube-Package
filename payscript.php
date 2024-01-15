<?php
$apiKey = "rzp_live_uKtN55KQReOrk3";
?>
<button id="rzp-button1">Payment 123d</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var options = {
    "key": "<?php echo $apiKey; ?>", // Enter the Key ID generated from the Dashboard
    "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Technical House", //your business name
    "description": "Do your Payment TH...",
    "image": "https://yt3.googleusercontent.com/yti/AGOGRCqpMYAw_JXbe741H1TG2B6ckH7cirv5S9FtCe1lHQ=s88-c-k-c0x00ffffff-no-rj",
    "id": "<?php echo 'OID'.rand(10,100).'YTPKG'; ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "http://localhost/youtube-package/successpayment.php",
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
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>