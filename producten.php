<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Producten</title>
</head>
<body>
<?php include "header.php"; ?>

<div class="container">
    <h1>Producten</h1>
    <div class="row">
        <?php
        $sql = "SELECT * FROM producten";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $formatted_price = number_format($row['prijs'], 2, ',', '.');
                echo "
                <div class='col-sm-4'>
                    <div class='card'>
                        <img src='Image/{$row['afbeelding']}' class='card-img-top' alt='{$row['naam']}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['naam']}</h5>
                            <p class='card-text'>{$row['omschrijving']}</p>
                            <p class='card-text'>€{$formatted_price}</p>
                            <form action='winkelmandje.php' method='post'>
                                <input type='hidden' name='product_id' value='{$row['id']}'>
                                <input type='hidden' name='product_name' value='{$row['naam']}'>
                                <input type='hidden' name='product_price' value='{$row['prijs']}'>
                                <input type='hidden' name='product_image' value='{$row['afbeelding']}'>
                                <button type='submit' name='add_to_cart' class='btn btn-primary'>Voeg toe aan je winkelmandje</button>
                            </form>
                        </div>
                    </div>
                </div>
                ";
            }
        } else {
            echo "Geen producten gevonden.";
        }
        $conn->close();
        ?>
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
