<?php
session_start();

$users = array(); //initialise array to hold user data

if (($open_file = fopen("users.csv", "r")) !== FALSE) { 
    while (($data = fgetcsv($open_file, 1000, ",")) !== FALSE) { //pull user data from users.csv and populate data array with its contents
        // "," parameter specifies the character used to separate data used to populate the array
        $users[$data[0]] = array("password" => $data[1], "admin" => $data[2]);
    } //multi-dimensional associative array where user data is given specific values, username[0], password[1]
    // and [2] via in the data array. its contents are then passed to the users array.
    fclose($open_file);
}

$u = $_POST['username']; //retreives username and password entered in session.php file
$p = $_POST['password'];


if (isset($users[$u]) and $users[$u]['password'] == $p) {
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['username'] = $u;
    $_SESSION['admin'] = $users[$u]['admin']; // validates if the user is registered as well as if theyre an admin using session variables

    header("Location: secret.php");
} else {
    header("Location: session.php");
}