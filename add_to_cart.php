<?php
session_start();
include 'connection.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $klantID = $_SESSION['klantID'];
    $aantal = 1;

    
    $sql_check = "SELECT * FROM tblwinkelmandje WHERE klantID = '$klantID' AND productID = '$product_id'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        
        $row = $result_check->fetch_assoc();
        $new_quantity = $row['aantal'] + 1;
        $sql_update = "UPDATE tblwinkelmandje SET aantal = '$new_quantity' WHERE klantID = '$klantID' AND productID = '$product_id'";
        $conn->query($sql_update);
    } else {
        
        $sql = "INSERT INTO tblwinkelmandje (klantID, productID, aantal) VALUES ('$klantID', '$product_id', '$aantal')";
        $conn->query($sql);
    }

    header("Location: winkelmandje.php");
    exit();
} else {
    echo "Invalid product ID";
}
?>
