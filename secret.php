<?php session_start();

if (!isset($_SESSION['loggedin'])) header("Location: session.php");
if ($_SESSION['loggedin'] === FALSE) header("Location: session.php");


?>

<!DOCTYPE html>
<html>

<head>
  <title>
    You successfully logged in!
  </title>

  <style>
    body {
      font-family: sans-serif;
      animation: background-gradient-animation 12s linear infinite;
    }

    button:hover, input[type=submit]:hover {
      transform: scale(1.12);
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

    a:link,
    a:visited {
      color: white;
      background-color: transparent;
      text-decoration: none;
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

    .buttons {

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>


<body>
  <br>


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

  


  <div class="buttons">
  <?php
  if ($_SESSION['admin'] == 1) { //validates if user is an admin or not, if they are an admin, displays the link to submit.php page
  echo "<button><a href=\"submit.php\" >CLICK HERE TO ADD RECORDS</a></button>";

}
?>

    <br>
    <a href="list.php">
      <button>Go to list.php</button>
    </a>
    <br>
    <form action="logout.php" method="POST">
      <input type="submit" name="logout" value="Log out">
    </form>

  </div>
</body>

</html>