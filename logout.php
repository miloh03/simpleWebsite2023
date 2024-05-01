<?php
session_start();
session_destroy();
header("Location: session.php");
exit(); //exits the current php script (in this case logout.php)
//destroys session and redirects user to the login page
