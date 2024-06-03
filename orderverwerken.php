<?php
session_start();
include 'connection.php';
include 'sessionCheckUser.php';

$klantID = $_SESSION['klantID'];



$sql_order = "INSERT INTO orders (klantID, totaalprijs) VALUES ('$klantID', (SELECT SUM(p.prijs * w.aantal) FROM tblwinkelmandje w JOIN producten p ON w.productID = p.id WHERE w.klantID = '$klantID'))";
if ($conn->query($sql_order) === TRUE) {
    $orderID = $conn->insert_id;
    $sql_order_details = "INSERT INTO order_details (orderID, productID, aantal) SELECT '$orderID', productID, aantal FROM tblwinkelmandje WHERE klantID = '$klantID'";
    $conn->query($sql_order_details);
    $sql_clear_cart = "DELETE FROM tblwinkelmandje WHERE klantID = '$klantID'";
    $conn->query($sql_clear_cart);
    echo "Je bestelling is geplaatst. Je ontvangt je bestelling binnen 3 dagen.";
} else {
    echo "Er is een fout opgetreden bij het plaatsen van je bestelling: " . $conn->error;
}

$conn->close();
?>
