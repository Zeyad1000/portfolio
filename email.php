<?php

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$phone = $_POST['phone'];

$query = 'Insert into messages(name,email,subject,phone) values("'.$name.'","'.$email.'","'.$subject.'","'.$phone.'")';

