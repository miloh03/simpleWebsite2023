<?php
session_start();
if (isset($_SESSION['loggedin'])) header("Location: secret.php"); //if user is logged in, go to secret.php
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>

    <style>

        body {
            font-family: sans-serif;
            animation: background-gradient-animation 12s linear infinite;
        }

        button:hover {
            transform: scale(1.2);
        }


        @keyframes background-gradient-animation {
            0%,
            100% {
                background-color: #f27168;
            }
            80% {
                background-color: white;
            }
        }


        button, input[type=submit] {
           
            color: white;
            background-color: black;
            border: 5px solid white;
            border-radius: 12px;
            margin: 10px;
            transition: transform 0.3s;
        }

        .navigationbar {
            background-color: black;
            overflow: hidden;
            border: 5px solid white;
            border-radius: 12px;
            margin-bottom: 40vh;
            
        }

      

        .navigationbar a {
            float: left;
            color: white;
            text-align: center;
            padding: 1.5%;
            text-decoration: none;
            font-size: 20px;

        }


        .login-form-styling {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-panel {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  background-color: black;
  border:5px solid white;
  border-radius: 12px;
  margin-left: 30%;
  margin-right: 30%;
  transition: transform 0.3s;
  text-align: center;
}

input{
  border:5px solid white;
  border-radius: 12px;
}
    </style>

</head>

<body>

<div class="navigationbar">
      <a href="index.html" title="Click to go to Home">
        <button>Home</button>
      </a>
      <a href="cv.html" title="Click to go to CV">
        <button>CV</button>
      </a>
      <a href="weather.html" title="Click to go to Weather">
        <button>Weather</button>
      </a>
      <a href="session.php" title="Click to go to Login">
        <button>Login</button>
      </a>
    </div>

    <div class="login-panel">

        

        <div class="login-form-styling">
            
            <form action="login.php" method="POST">
                <br>
                Username: <input type="text" name="username" title="Click here to enter username" min="1" required placeholder="Enter username here" autofocus><br>
                <br>
                Password: <input type="password" name="password" title="Click here to enter password" min="1" required placeholder="Enter password here">
                <br>
                <br>
                <input type="submit"> <!--creates a validated login box. the box is styled for UI/UX improvements and requires input to submit. minimum, values, placeholder and autofocus properties have been added to improve validation/security -->






            </form>
        </div>
</body>

</html>