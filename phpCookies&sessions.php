<!-- 1 -->
<?php

if (isset($_POST["submit"])) {
    $color = $_POST["color"];

    setcookie("editBGColor", $color,time() + (7 * 24 * 60 * 60), "/");

    $_COOKIE["editBGColor"] = $color;
}

$bgColor = $_COOKIE["editBGColor"] ?? "white";

// $allowedColors = ["red", "blue", "green"];

// if (!in_array($bgColor, $allowedColors, true)) {
//     $bgColor = "white";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color Preference</title>
</head>

<body style="background-color: <?= htmlspecialchars($bgColor) ?>;">

    <h2>Choose Your Background Color</h2>

    <form method="POST" action="">
        <label for="color">Select a color:</label>

        <select name="color" id="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>

        <button type="submit" name="submit">Save Color</button>
    </form>
    <hr>

</body>

</html>

<!-------------------------------------------------->
<!-- 2 -->
 
 <?php 
  if(isset($_COOKIE["visits"])){
    $visit = $_COOKIE["visits"] +1;
  }else{
    $visit=1;
  }

  setcookie("visitsUser" , $visit , time() + (7 * 24 * 60 * 60));

  echo "<h3> You have visited this page ". $visit ."  times</h3>"
  ?>

<!--------------------------------------------------->
<!-- 3 -->