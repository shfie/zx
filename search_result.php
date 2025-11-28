<?php include("db.php"); ?>

<?php
$consumer_no = $_POST['consumer_no'];
$month = $_POST['month'];

$q = "SELECT consumers.name, consumers.address, consumers.phone, 
             bills.units, bills.amount 
      FROM consumers 
      JOIN bills ON consumers.consumer_no = bills.consumer_no 
      WHERE bills.consumer_no='$consumer_no' AND bills.month='$month'";

$res = mysqli_query($conn, $q);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);

    echo "<h2>Bill Details</h2>";
    echo "Name: ".$row['name']."<br>";
    echo "Address: ".$row['address']."<br>";
    echo "Phone: ".$row['phone']."<br>";
    echo "Units: ".$row['units']."<br>";
    echo "Amount: ₹".$row['amount']."<br>";

} else {
    echo "No Bill Found!";
}
?>
