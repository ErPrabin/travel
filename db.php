<?php
$conn = mysqli_connect('localhost', 'root', '', '');
if (!$conn) {
    echo 'Not Connected to serve';
}
if (!mysqli_select_db($conn, 'travels')) {
    echo 'Travel Database  Not Selected';
}
