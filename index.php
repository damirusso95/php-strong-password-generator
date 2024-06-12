
<?php
// includiamo il file dove si trova la funzione per generare password
include __DIR__ . '/generate_password.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password</h1>
    <!-- form con input -->
    <form action="index.php" method="GET">
        <label for="length">Lunghezza della password:</label>
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Genera</button>
    </form>

    <?php
    // Verifica se il parametro 'length' è presente in $_GET
    $length = $_GET['length'] ?? null;

    if ($length !== null) {

        // Genera la password utilizzando la funzione
        $password = generate_password($length);

        // Mostra la password generata
        echo "<p>La tua password è: $password</p>";
    }
    ?>
</body>
</html>
