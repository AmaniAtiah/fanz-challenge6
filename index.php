<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Prime number</h1>

            <?php
            include 'prime.php';

            findPrimeNumbers(2, 12);

            ?>
        </div>
    </div>
</body>

</html>