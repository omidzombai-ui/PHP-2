<?php
// for loop = repeat a block of code a specified number of times
for ($i = 1; $i <= 100; $i++) {
    echo $i . ": " . $i . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="x">Enter a number to count down:</label>
        <input type="text" name="x" id="x">

        <label for="y">Y:</label>
        <input type="text" name="y" id="y">
        <input type="submit" value="total">
    </form>
</body>
</html>