<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: skrill-ipn
 * Date: 06.12.2016
 * Time: 17:21
 * All rights and copyrights are owned by Sevio Solutions®
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skrill Payment Form</title>
    <style>
        label {
            display: block;
            padding: 5px 0;
        }

        input {
            display: block;
        }
    </style>
</head>
<body>
<form action="https://pay.skrill.com" method="post">
    <input type="hidden" name="pay_to_email" value="demoqco@sun-fish.com">
    <input type="hidden" name="prepare_only" value="1">
    <input type="hidden" name="transaction_id" value="<?php echo rand(1,999)?>">
    <input type="hidden" name="return_url" value="http://botlist.net/skrill-ipn/finished.php">
    <input type="hidden" name="cancel_url" value="http://botlist.net/skrill-ipn/cancelled.php">
    <input type="hidden" name="status_url" value="http://botlist.net/skrill-ipn/ipn.php">
    <input type="hidden" name="language" value="EN">
    <input type="hidden" name="merchant_fields" value="customer_number,session_id">
    <input type="hidden" name="customer_number" value="C1234">
    <input type="hidden" name="session_ID" value="A3DFA2234">
    <input type="hidden" name="pay_from_email" value="payer123@skrill.com">
    <input type="hidden" name="amount2_description" value="Product Price:">
    <input type="hidden" name="amount2" value="29.90">
    <input type="hidden" name="amount3_description" value="Handling Fees & Charges:">
    <input type="hidden" name="amount3" value="3.10">
    <input type="hidden" name="amount4_description" value="VAT (20%):">
    <input type="hidden" name="amount4" value="6.60">
    <input type="hidden" name="amount" value="39.60">
    <input type="hidden" name="currency" value="EUR">
    <input type="hidden" name="firstname" value="Sevio">
    <input type="hidden" name="lastname" value="Solutions">
    <input type="hidden" name="address" value="Payerstreet">
    <input type="hidden" name="postal_code" value="EC45MQ">
    <input type="hidden" name="city" value="Payertown">
    <input type="hidden" name="country" value="RO">
    <input type="hidden" name="detail1_description" value="Product ID:">
    <input type="hidden" name="detail1_text" value="4509334">
    <input type="hidden" name="detail2_description" value="Description:">
    <input type="hidden" name="detail2_text" value="Romeo and Juliet (W.Shakespeare)">
    <input type="hidden" name="detail3_description" value="Special Conditions:">
    <input type="hidden" name="detail3_text" value="5-6 days for delivery">
    <input type="submit" value="Pay!">
</form>
</body>
</html>