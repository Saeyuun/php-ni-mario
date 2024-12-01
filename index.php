<!DOCTYPE html>

<?php
include "database.php";
?>
<html>
<head>
    <title>Apateu. Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
    <h1>Apateu.</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>
    </div>
    
</body>
</html>