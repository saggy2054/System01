<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".razorpay-payment-button").click();
            $(".razorpay-payment-button").hide();


        });</script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <form method="post" action="home.php">
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_VOayJ83bIlCjw2" data-amount="<?php echo $_GET['product_price']*100; ?>"
            data-currency="INR" data-id="7" data-buttontext="Pay with Razorpay" data-name="Traidev Solutions"
            data-description="Training & Development" data-image="https://traidev.com/img/web-desgin-development.png"
            data-prefill.name="SAGAR TAWARE" data-prefill.email="sagar@gmail.com" data-prefill.contact="7387613425"
            data-theme.color="#0e90e4">
            </script>
        <input type="hidden">
    </form>