<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<h2>Calculator Simple</h2>

<div class="container">
    <form method="POST">
    <label>Number 1 :</label>
    <input type="text" name="nb1"><br><br>

    <label>Number 2 :</label>
    <input type="text" name="nb2"><br><br>

    <label>Operator :</label>
    <select name="operation">
        <option value="add">Addition (+)</option>
        <option value="sub">Subtraction (-)</option>
        <option value="mul">Multiplication (×)</option>
        <option value="div">Division (÷)</option>
    </select><br><br>

    <button type="submit" name="calculer">Calculate</button>
</form>
</div>

<hr>

<?php
/* ===== FUNCTION DE CALCUL ===== */
function calculer($a, $b, $op) {
    switch ($op) {
        case "add":
            return $a + $b;
        case "sub":
            return $a - $b;
        case "mul":
            return $a * $b;
        case "div":
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;
        default:
            return "Opération invalide";
    }
}

/* ===== TRAITEMENT PHP ===== */
if (isset($_POST["calculer"])) {

    $nb1 = $_POST["nb1"];
    $nb2 = $_POST["nb2"];
    $operation = $_POST["operation"];

    /* VALIDATION DES DONNÉES */
    if ($nb1 === "" || $nb2 === "") {
        echo "Error: All fields are required";
    } elseif (!is_numeric($nb1) || !is_numeric($nb2)) {
        echo "Error: Please enter valid numbers";
    } else {
        /* APPEL DE LA FUNCTION */
        $resultat = calculer($nb1, $nb2, $operation);
        echo "Result : <strong>$resultat</strong>";
    }
}
?>

</body>
</html>
