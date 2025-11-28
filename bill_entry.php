<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bill Entry</title>
</head>
<body>

<h2>Bill Entry</h2>

<form method="POST">
    Consumer No: <input type="text" name="consumer_no" required><br><br>
    Month: <input type="text" name="month" required><br><br>
    Units: <input type="number" name="units" required><br><br>
    Amount: <input type="number" step="0.01" name="amount" required><br><br>
    <input type="submit" name="save" value="Save Bill">
</form>

<?php
if (isset($_POST['save'])) {
    $c = $_POST['consumer_no'];
    $m = $_POST['month'];
    $u = $_POST['units'];
    $amt = $_POST['amount'];

    $q = "INSERT INTO bills (consumer_no, month, units, amount) 
          VALUES ('$c', '$m', '$u', '$amt')";

    if (mysqli_query($conn, $q)) {
        echo "Bill Saved Successfully!";
    } else {
        echo "Error!";
    }
}
?>

</body>
</html>
