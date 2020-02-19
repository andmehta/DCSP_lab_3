<?php
  require_once "login.php";

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error)
      die($conn->connect_error);

  $query = "CREATE TABLE restaurants (
  name VARCHAR(128),
  category VARCHAR(32),
  cost VARCHAR(4),
  city VARCHAR(32),
  state VARCHAR(2)
)";

  $result = $conn->query($query);
  if (!$result)
      die($conn->error);


  // Starts insertion
  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES ('Mugshots', 'American', '$', 'Starkville', 'MS')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES (\"Harvey's\", 'American', '$$$', 'Starkville', 'MS')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES ('Little Dooey', 'BBQ', '$$', 'Starkville', 'MS')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES ('UMI Japanese Cuisine', 'Japanese', '$$$', 'Starkville', 'MS')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES ('Mugshots', 'American', '$', 'Memphis', 'TN')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES ('Memphis BBQ', 'BBQ', '$', 'Southaven', 'MS')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  $query = "INSERT INTO restaurants (name, category, cost, city, state)
   VALUES (\"Lambert's Cafe\", 'American', '$$', 'Springfield', 'MO')";

  $result = $conn->query($query);
  if (!$result)
    die($conn->error);

  else
      echo "Table build successful.";

?>
