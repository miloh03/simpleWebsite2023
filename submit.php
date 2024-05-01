<?php

$title = '';
$isbn = '';
$description = '';
$associated_modules = ''; //initialise variables used to hold users inputted data

if (isset($_POST["submit"])) {

  $title = ($_POST["title"]); //once submitted, retrive data inputted by user and store in previously declared variables
  $isbn = ($_POST["isbn"]);
  $description = ($_POST["description"]);
  $associated_modules = ($_POST["associated_modules"]);

  $open_file = fopen("books.csv", "a"); //opens csv file. 
  // "a" specifies the read/write functionality of fopen, in this case setting it to write only.

  $book_details = array(
    'title'  => $title,
    'isbn'  => $isbn,
    'description' => $description,
    'associated_modules' => $associated_modules
  ); 

  fputcsv($open_file, $book_details);
  //initialises associative array which stores variables holding the entered data. data from array is then placed into the open file (books.csv).

  $title = '';
  $isbn = '';
  $description = '';
  $associated_modules = ''; 
//resets value of variables so that multiple entries can be made without refreshing the page
 
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>
    Submit new records here
  </title>


  <style>
    body {
      font-family: sans-serif;

      animation: background-gradient-animation 12s linear infinite;
    }

    button:hover, input[type=submit]:hover {
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
      margin-bottom: 30vh;
      
    }


    .navigationbar a {
      float: left;
      color: white;
      text-align: center;
      padding: 1.5%;
      text-decoration: none;
      font-size: 20px;

    }

    .record-add {
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

textarea{
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

  <br />

  <div class="record-add">

    <form method="post">

      <br />
      <textarea type="text" name="title" required placeholder="Enter Title"></textarea>
      <br />

      <br />
      <textarea type="text" name="isbn" required placeholder="Enter ISBN"></textarea>
      <br />

      <br />
      <textarea type="text" name="description" required placeholder="Enter Description"></textarea>
      <br />

      <br />
      <textarea type="text" name="associated_modules" required placeholder="Enter Associated Modules"></textarea>
      <br />



      <input type="submit" name="submit" value="Add record" />
      <br />
      <br />


    </form>
  </div>
<!--initialises form to take user input. data is validated using the required tag-->
<!-- text area has been used to allow user to resize boxes. this improves UI/UX-->
</body>

</html>