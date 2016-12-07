<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: skrill-ipn
 * Date: 06.12.2016
 * Time: 17:21
 * All rights and copyrights are owned by Sevio Solutions®
 */

define("MD5_VALUE", "THE MD5 VALUE ASCII");


$transactionPayEmail = $_POST['pay_to_email'];
$transactionPayFromEmail = $_POST['pay_from_email'];
$transactionMerchantId = $_POST['merchant_id'];
$transactionMbTransactionId = $_POST['mb_transaction_id'];
$transactionMAmount = $_POST['mb_amount'];
$transactionMbCurrency = $_POST['mb_currency'];
$transactionStatus = $_POST['status'];
$transactionMd5sig = $_POST['md5sig'];
$transactionAmount = $_POST['amount'];
$transactionCurrency = $_POST['currency'];


if (isset($_POST['customer_id']))
    $transactionCustomerId = $_POST['customer_id'];

if (isset($_POST['transaction_id']))
    $transactionId = $_POST['transaction_id'];
else $transactionId = '';

if (isset($_POST['failed_reason_code']))
    $transactionFailedReasonCode = $_POST['failed_reason_code'];

if (isset($_POST['sha2sig']))
    $transactionSha2sig = $_POST['sha2sig'];

if (isset($_POST['neteller_id']))
    $transactionNetellerId = $_POST['neteller_id'];

if (isset($_POST['payment_type']))
    $transactionPaymentType = $_POST['payment_type'];


if (isset($_POST['merchant_fields']))
    $transactionMerchantFields = $_POST['merchant_fields'];


$md5signature = $transactionMerchantId . $transactionId . $transactionMAmount . $transactionMbCurrency . $transactionStatus;

echo $md5signature;

file_put_contents('response.txt',$transactionMd5sig);

if ($transactionStatus == 2) {
    // Transaction is processed, do whatever you want with the given information
} else {
    // Transaction is not complete, do whatever you want with the given information
}

// You can get that info by accessing you account at Merchand Services -> IPN Settings -> Generate New Shared Secret
//
//$rawPostedData = file_get_contents('php://input');
//
//// Extracting Field=Value Pairs
//$i = strpos($rawPostedData, "&key=");
//$fieldValuePairsData = substr($rawPostedData, 0, $i);
//
//// Calculating Key (Notification Signature)
//$calculatedKey = md5($fieldValuePairsData . IPN_SHARED_KEY);
//
//// Verifying Notification Key (Signature)
//$isValid = $_POST["key"] == $calculatedKey ? true : false;
//
//if(!$isValid)
//{
//    //Invalid POST request, we are closing the script execution.
//    die;
//}
//
//// These are all the details provided in the POST variables from paxum
//$buyer_email = $_POST["buyer_email"];
//$buyer_username = $_POST["buyer_username"];
//$buyer_name = $_POST["buyer_name"];
//$buyer_id = $_POST["buyer_id"];
//$buyer_status = $_POST["buyer_status"];
//
//$resend = $_POST["resend"];
//$test = $_POST["test"];
//
//$transaction_id = $_POST["transaction_id"];
//$transaction_amount = $_POST["transaction_amount"];
//$transaction_status = $_POST["transaction_status"];
//$transaction_description = $_POST["transaction_description"];
//$transaction_item_id = $_POST["transaction_item_id"];
//$transaction_item_name = $_POST["transaction_item_name"];
//$transaction_exchange_rate = $_POST["transaction_exchange_rate"];
//$transaction_currency = $_POST["transaction_currency"];
//$transaction_date = $_POST["transaction_date"];
//$transaction_type = $_POST["transaction_type"];
//$transaction_quantity = $_POST["transaction_quantity"];
//
//$reference = $_POST["reference"];
//
//if($transaction_status == "done") {
//    // Transaction is complete, do whatever you want with the given information
//}else{
//    // Transaction is not complete, do whatever you want with the given information
//}
