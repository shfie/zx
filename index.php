<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Electricity Bill System</title>
</head>
<body>

<h2>Search Bill</h2>
<form method="POST" action="search_result.php">
    Consumer No: <input type="text" name="consumer_no" required><br><br>
    Month: <input type="text" name="month" required><br><br>
    <input type="submit" value="Search Bill">
</form>

<hr>

<h2>Admin Login</h2>
<form method="POST" action="login.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
