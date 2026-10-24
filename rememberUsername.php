<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    setcookie("userName", $username,  time() + (7 * 24 * 60 * 60));
    $_COOKIE["username"] = $username;
    
}
  $username = $_COOKIE["username"] ?? "";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>

    <h2>Login Form</h2>

    <form method="POST" action="">
        <label for="username">Username:</label>

        <input
            type="text"
            name="username"
            id="username"
            value="<?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>"
            placeholder="Enter your username"
            required>

        <button type="submit" name="submit">Login</button>
    </form>

</body>

</html>