<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Consumer Registration</title>
</head>
<body>

<h2>Consumer Registration</h2>

<form method="POST">
    Consumer No: <input type="text" name="consumer_no" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Address: <input type="text" name="address" required><br><br>
    Phone: <input type="text" name="phone" required><br><br>
    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST['register'])) {
    $c = $_POST['consumer_no'];
    $n = $_POST['name'];
    $a = $_POST['address'];
    $p = $_POST['phone'];

    $q = "INSERT INTO consumers VALUES ('$c', '$n', '$a', '$p')";

    if (mysqli_query($conn, $q)) {
        echo "Consumer Registered Successfully!";
    } else {
        echo "Error!";
    }
}
?>

</body>
</html>
