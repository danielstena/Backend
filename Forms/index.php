<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "what was gotten: <br/>";
    print_r( $_GET);
    echo "What was posted: <br/>";
    print_r( $_POST );
    ?>
    <form method="POST" action="test.html">
    <input type="hidden" value="mitt gömda värde" namnet="myKey">
    <button type="submit">Skicka formuläret</button>
</body>
</html>