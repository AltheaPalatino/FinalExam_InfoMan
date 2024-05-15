<!-- register.php -->
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Redirect to login page after successful registration
    header("Location: index.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

    <!-- Registration Form -->
    <h2>User Registration</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" action="index.html" method="POST" >
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
