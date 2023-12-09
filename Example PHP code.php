<?php
    //Receive the response parameter
    $status = $_POST['status'];
    $signature = $_POST['signature'];
    $identifier = $_POST['identifier'];
    $data = $_POST['data'];

    // Generate your signature
    $customKey = $data['amount'].$identifier;
    $secret = 'YOUR_SECRET_KEY';
    $mySignature = strtoupper(hash_hmac('sha256', $customKey , $secret));

    $myIdentifier = 'YOUR_GIVEN_IDENTIFIER';

    if($status == "success" && $signature == $mySignature &&  $identifier ==  $myIdentifier){
        //your operation logic
    }
?>