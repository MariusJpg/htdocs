<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabell</title>
</head>
<body>
    <?php
    $tabell = array("Marius", "Thomas", "Linus", "Tobias", "Erling", "Jovan", "Fredrik", "Szymon", "Steinar", "Oscar", "Luan", "Sebastian", "clausen");

    echo "<ul>";

    for($i = 0; $i < count($tabell); $i++ ) {
        echo "<li>" . $tabell[$i] . "</li>";
    }

    echo "</ul>";
    
    ?>
</body>
</html>