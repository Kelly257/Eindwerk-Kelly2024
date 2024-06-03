<?php
session_start();
include 'connection.php';
include 'sessionCheckUser.php';

$klantID = $_SESSION['klantID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Winkelmandje</title>
</head>
<body>
<?php
        include_once("header.php");
    ?>   

    <div class="container">
        <h3>Winkelmandje</h3>
        <?php
        $sql = "SELECT w.aantal, p.naam, p.prijs, p.afbeelding FROM tblwinkelmandje w JOIN producten p ON w.productID = p.id WHERE w.klantID = '$klantID'";
        $result = $conn->query($sql);
        $totaal = 0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $totaal += $row['prijs'] * $row['aantal'];
                ?>
                <div class="product">
                    <img src="Image/<?php echo $row['afbeelding']; ?>" alt="<?php echo $row['naam']; ?>" class="product-image">
                    <p><?php echo $row['naam']; ?></p>
                    <p>PRIJS: €<?php echo $row['prijs']; ?></p>
                    <p>Aantal: <?php echo $row['aantal']; ?></p>
                </div>
                <?php
            }
        } else {
            echo "<p>Je winkelmandje is leeg.</p>";
        }
        ?>

        <h4>Totale prijs: €<?php echo $totaal; ?></h4>
        <?php if ($totaal > 0) { ?>
            <button onclick="window.location.href='orderverwerken.php'">KOOP</button>
        <?php } ?>
    </div>
<!----------------Part---------------------------------->
<?php include "Part.php"; ?>
<!-------------------------------footer---------------------------------------------->
<?php include "footer.php"; ?>

</body>
</html>

<?php $conn->close(); ?>
