<?php
$query = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "'";
$query .= " AND password = '" . $_POST['password'] . "'"; 
?>