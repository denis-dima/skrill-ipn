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

file_put_contents('response.txt',$transactionMd5sig, $md5signature);

if ($transactionStatus == 2) {
    // Transaction is processed, do whatever you want with the given information
} else {
    // Transaction is not complete, do whatever you want with the given information
}
