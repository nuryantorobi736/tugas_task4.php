<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["name"])){
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if(empty($_POST["email"])){
    $emailErr = "email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if(empty($_POST["website"])) {
    $website = " ";
  } else {
    $website = test_input($_POST["website"]);
  }

if(empty($_POST["comment"])){
$comment = "";
} else {
    $comment = test_input($_POST["comment"]);
}

if(empty($_POST["gender"])){
    $genderErr = "gender id required";
} else {
    $gender = test_input($_POST["gender"]);
}


if ($nameErr == "" && $emailErr == "" && $genderErr == "" && $websiteErr == "") {
  // Display the submitted data
  echo "<h2>Your Input:</h2>";
  echo "Name: " . $name;
  echo "<br>";
  echo "Email: " . $email;
  echo "<br>";
  echo "Website: " . $website;
  echo "<br>";
  echo "Comment: " . $comment;
  echo "<br>";
  echo "Gender: " . $gender;
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>