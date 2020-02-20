<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Choose a City</title>
    </head>
    <body>
        <h1>Choose a City</h1>

        <p>Select a city to see the restaurants in our database.</p>
        <form method="GET" action="bycity.php">
              <select name="city">
        <?php
        require 'login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        if($conn->connect_error)
          die($conn->connect_error);
        $query = "SELECT DISTINCT city FROM restaurants";
        $result = $conn->query($query);
          while($row = $result->fetch_array()){
            	$city = $row['city'];
                echo "<option>$city</option>";
              }
        ?>
      </select>
      <input type="submit">
  </form>
    </body>
</html>
