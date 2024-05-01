<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
<title>Displaying Full Record</title>
<style>
      body{
        font-family: sans-serif; 
        animation: background-gradient-animation 12s linear infinite;
      }
  
      button:hover, .record-display:hover {
        transform: scale(1.2); 
      }

      @keyframes background-gradient-animation {
    0%,100%{
      background-color: #f27168;
    }
    80%{
      background-color: white;
    }
  }
  
      button {
        color: white; 
        background-color: black; 
        border: 5px solid white; 
        border-radius: 12px; 
        margin: 10px; 
        transition: transform 0.3s; 
      }

      a:link, a:visited {
  color: white; 
  background-color: transparent; 
  text-decoration: none; /* removes underline and colours links*/
}
     

      .navigationbar {
  background-color: black; 
  overflow: hidden; 
  border:5px solid white; 
      border-radius: 12px; 
      margin-bottom: 0%; 
}


.navigationbar a {
  float: left; 
  color: white;  
  padding: 1.5%; 
  text-decoration: none; 
  font-size: 20px; 
  
}

.record-display {
    
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  background-color: black;
  border: 5px solid white;
  border-radius: 12px;
  margin-top: 20%;
  margin-left: 30%;
  margin-right: 30%;
  transition: transform 0.3s;
  
}


.record-display:hover {
    transition: transform 0.3s;
}
    </style>

</head>

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

    <div class="record-display">
        
<?php
echo "<br/>";
echo "Title:"; 

echo "<br/>";
echo $_GET['title']; //utilises the GET superglobal to retrieve data from the 'title' element. 
//this functionality is enabled by appending the url with the correct data stored in the books.csv file based on which entry is clicked.
echo "<br/>";
echo "<br/>";

echo "ISBN:";
echo "<br/>";
echo $_GET['isbn'];
echo "<br/>";
echo "<br/>";

echo "Description:";
echo "<br/>";
echo $_GET['description'];
echo "<br/>";
echo "<br/>";

echo "Associated Modules:";
echo "<br/>";
echo $_GET['modules'];
echo "<br/>";
echo "<br/>";

?>
</div>

<body>

</body>
</html>