<!DOCTYPE html>
<html>
    <head>
<title>List of Records</title>


<style>

      body {
        font-family: sans-serif;
        animation: background-gradient-animation 12s linear infinite;
      }
  
      button:hover {
        transform: scale(1.2);
      }
     

      .list-items:hover {
       
        transform: scale(1.10);
       
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
        background-color: black;
        color: white;
        border: 5px solid white;
        border-radius: 12px;
        margin: 10px;
        transition: transform 0.3s;
      }

      a:link, a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
     

      .navigationbar {
  background-color: black;
  overflow: hidden;
  border:5px solid white;
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

.list-items {
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
}

.instruction-text {
    display: flex;
    justify-content: center;
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

    <div class="instruction-text">   
        <H4>Click an entry to see full details</H4>
    </div> <!-- displays message to user to click an entry, eliminates any confusion and improves UI/UX-->

<div class="list-items"> <!-- creates a div to allow for styling of list items-->

    <?php
   

    
    $books = array(); //initialises array called books to store data in


    if (($open_file = fopen("books.csv", "r")) !== FALSE) { //opens books.csv and sets the fopen function to read only
      while (($books_data = fgetcsv($open_file, 1000, ",")) !== FALSE) { 
        $books[$books_data[0]] = array("isbn" => $books_data[1], "description" => $books_data[2], "modules" => $books_data[3]); //populates array multi-dimensional associative array with book data.


        echo "</br>"; //br tag helps organise data on the screen better for UI/UX purposes
            
        for ($books_data_index = 0; $books_data_index < 2; $books_data_index++) { // displays the first 2 elements of the books array. "2" can be changed to alter the amount of elements displayed

          echo "<a href=\"display.php?isbn=$books_data[1]&description=$books_data[2]&modules=$books_data[3]&title=$books_data[0]\" >$books_data[$books_data_index] </a>"; //displays links to display.php while appending the url with the data of the clicked entry

            echo "</br>"; 
        } //only the number of elements specified in the books_data_index variable are displayed, which here is the first 2 elements. 
            //it works by echoing the current array element, then incrementing the books_data_index variable and displaying the new current array element up to the desired limit, which here is 2 lines.
      }
      fclose($open_file); //closes the file
    }

  

    ?>
    </div>

</body>

</html>