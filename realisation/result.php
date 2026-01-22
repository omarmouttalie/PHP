<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
</body>
</html>
<?php
$score = 0;

if ($_POST['q1'] == "PHP: Hypertext Preprocessor") { $score++; }
if ($_POST['q2'] == "$") { $score++; }
if ($_POST['q3'] == "echo") { $score++; }
if ($_POST['q4'] == "Returns True if a variable is declared, not null") { $score++; }
if ($_POST['q5'] == "Back-end") { $score++; }

echo "<h1>Your Score: $score / 5</h1>";
echo "<a href='index.php'>Try Again</a>";
?>