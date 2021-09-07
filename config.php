<?php

$conn = mysqli_connect("localhost", "root", "", "email_verification");

if (!$conn) {
    echo "Connection Failed";
}