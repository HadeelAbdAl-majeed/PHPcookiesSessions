
<?php
session_start();

if (empty($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(random_bytes(32));
}

$messag="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $submittedToken = $_POST["token"] ?? "";
}
if (is_string($submittedToken) && hash_equals($_SESSION["token"], $submittedToken)) {
    $message = "Form submitted successfully";
} else {
    $message = "Invalid request";
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>Secure Form</title>
</head>

<body>

    <h2>Secure Form</h2>

    <form method="POST" action="">
        <input type="hidden" name="token"
            value="<?php echo htmlspecialchars($_SESSION["token"], ENT_QUOTES, "UTF-8"); ?>">

        <label>Enter your name:</label>
        <input type="text" name="username" required>


        <button type="submit">Submit</button>
    </form>

    <?php
    if ($message !== "") {
        echo "<p>" . htmlspecialchars($message) . "</p>";
    }
    ?>

</body>

</html>