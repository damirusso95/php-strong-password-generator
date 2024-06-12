<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La tua password</h1>
    <?php
        // operatore di coalescenza nulla (??) verifica se una variabile è definita e non è null
    $length = $_GET['length'] ?? null;

    if($length !== null) {
        $password = '';

        // caratteri consentiti
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:",.<>?/`~';
        // recuperiamo la lunghezza della stringa di caratteri
        $charactersLength = strlen($characters);
    

        for ($i = 0; $i < $length; $i++) {
            // rand() genere un numero casuale tra 0 e la lunghezza della stringa dei caratteri -1
            $randomIndex = rand(0, $charactersLength - 1);
            $password .= $characters[$randomIndex];
        }
    echo "<p>La tua password è: $password</p>";
    }
    ?>
</body>
</html>