<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login form</h1>
    <form method="POST">
        <label>Enter Mail:</label>
        <input type="email" name="email" > <br>
        <label>Enter Password:</label>
        <input type="password" name="password" > <br>
        <button type="submit">Login</button>
    </form>
    <?php
$dummymail= "dddhanush@gmail.com";
$dummypassword = "1234";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === $dummymail && $password === $dummypassword) {
        header("Location:success.php");
        exit();
    } else {
        header("Location:fail.php");
        exit();
    
    }
}
?>
</body>
</html>