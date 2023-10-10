<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login || Registration</title>
</head>
<body>
    <div class="login-container">
    <h2>Login</h2>
    <form method="post" action="">
        <label><b>Username</b> :</label>
        <input type="text" name="username" required><br><br>
        <label><b>Password</b>:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
<div class="reg-container">
    <h2>Registration</h2>
    <form method="post" action="">
        <label><b>Username</b>:</label>
        <input type="text" name="username" required><br><br>
        <label><b>Password</b>:</label>
        <input type="password" name="password" required><br><br>
        <label><b>Email</b>:</label>
        <input type="email" name="email" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
</div>


</body>
</html>