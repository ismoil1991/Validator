<?php
include 'validator';

$email = $_POST['email'];
$password = $_POST['password'];
$password = $_POST['full_name'];

validate($email,'email');
validate($email,'password');
validate($email,'full_name');