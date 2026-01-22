<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <h1>PHP Quiz</h1>
    <form action="result.php" method="post">
        <p>1. What does PHP stand for?</p>
        <input type="radio" name="q1" value="Personal Home Page">Personal Home Page<br>
        <input type="radio" name="q1" value="Private Hypertext Processor">Private Hypertext Processor<br>
        <input type="radio" name="q1" value="PHP: Hypertext Preprocessor">PHP: Hypertext Preprocessor<br>

        <p>2. Which symbol is used to declare variables in PHP?</p>
        <input type="radio" name="q2" value="$">$<br>
        <input type="radio" name="q2" value="%">%<br>
        <input type="radio" name="q2" value="@">@<br>

        <p>3. Which function outputs text in PHP?</p>
        <input type="radio" name="q3" value="echo">echo<br>
        <input type="radio" name="q3" value="printText">printText<br>
        <input type="radio" name="q3" value="write">write<br>

        <p>4. What isset() function does in PHP?</p>
        <input type="radio" name="q4" value="Sends POST request to the server">Sends POST request to the server<br>
        <input type="radio" name="q4" value="Returns True if a variable is declared, not null">Returns True if a variable is declared, not null<br>
        <input type="radio" name="q4" value="Pushes the last item of an array">Pushes the last item of an array<br>

        <p>5. What is PHP language is used for?</p>
        <input type="radio" name="q5" value="Back-end">Back-end<br>
        <input type="radio" name="q5" value="Front-end">Front-end<br>
        <input type="radio" name="q5" value="Artificial Intelligence Developing">Artificial Intelligence Developing<br>
        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>
