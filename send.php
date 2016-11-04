<?php
// Configure your Subject Prefix and Recipient here
$subjectPrefix = '[victorsarda.fr] - ';
$emailTo       = 'victor.sarda@icloud.com';
$errors = array(); // array to hold validation errors
$data   = array(); // array to pass back data
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    $subject = stripslashes(trim($_POST['subject']));
    $message = stripslashes(trim($_POST['message']));
    if (empty($name)) {
        $errors['name'] = 'Please don\'t forget the subject field :).';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Looks like you e-mail is not valid :(.';
    }
    if (empty($subject)) {
        $errors['subject'] = 'Please don\'t forget the subject field :).';
    }
    if (empty($message)) {
        $errors['message'] = 'Please don\'t forget the message field :).';
    }
    // if there are any errors in our errors array, return a success boolean or false
    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        $subject = "$subjectPrefix $subject";
        $body    = '
            <strong>Name: </strong>'.$name.'<br />
            <strong>E-mail: </strong>'.$email.'<br />
            <strong>Message: </strong>'.nl2br($message).'<br />
        ';
        $headers  = "MIME-Version: 1.1" . PHP_EOL;
        $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $headers .= "Content-Transfer-Encoding: 8bit" . PHP_EOL;
        $headers .= "Date: " . date('r', $_SERVER['REQUEST_TIME']) . PHP_EOL;
        $headers .= "Message-ID: <" . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . PHP_EOL;
        $headers .= "From: " . "=?UTF-8?B?".base64_encode($name)."?=" . "<$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
        $headers .= "X-Originating-IP: " . $_SERVER['51.254.203.219'] . PHP_EOL;
        mail($emailTo, "=?utf-8?B?" . base64_encode($subject) . "?=", $body, $headers);
        $data['success'] = true;
        $data['message'] = 'Thank you! Your message has been sent, I will answer quickly.';
    }
    // return all our data to an AJAX call
    echo json_encode($data);
}
