<?php
// Exchange rate
$kursi = 97; // 1 € = 97 Lek

// Initialize variables to hold the result or error message
$rezultat_shfaqur = "";

// Check if the form has been submitted (i.e., data has been sent via POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check if both 'shifra' and 'zgjedhja' are set
    if (isset($_POST['shifra']) && isset($_POST['zgjedhja'])) {
        
        // Get data from the form
        $shifra = $_POST['shifra']; 
        $zgjedhja = $_POST['zgjedhja'];
        $vlera = floatval($shifra);

        // Run the conversion logic
        if ($zgjedhja == "1") {
            $rezultat = $vlera / $kursi;
            $rezultat_shfaqur = "$vlera Lek = " . round($rezultat, 2) . " Euro";
        } elseif ($zgjedhja == "2") {
            $rezultat = $vlera * $kursi;
            $rezultat_shfaqur = "$vlera Euro = $rezultat Lek";
        } else {
            $rezultat_shfaqur = "Zgjedhje e pavlefshme!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lek-Euro Converter (Web)</title>
</head>
<body>

    <h1>Currency Converter</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <label for="shifra">Enter amount to convert:</label>
        <input type="number" id="shifra" name="shifra" required><br><br>

        <input type="radio" id="lek_to_euro" name="zgjedhja" value="1" required>
        <label for="lek_to_euro">Lek -> Euro</label><br>

        <input type="radio" id="euro_to_lek" name="zgjedhja" value="2">
        <label for="euro_to_lek">Euro -> Lek</label><br><br>

        <input type="submit" value="Convert">
    </form>
    
    <hr>
    
    <?php if (!empty($rezultat_shfaqur)): ?>
        <h2>Rezultati:</h2>
        <p><strong><?php echo $rezultat_shfaqur; ?></strong></p>
    <?php endif; ?>

</body>
</html>
