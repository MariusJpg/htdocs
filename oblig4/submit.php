<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
</head>
<body>
    <form action="oblig_4.php" method="post" >
        <input type="text" name="name"> Ditt navn<br>
 


        <label for="ganger">Hvor mange ganger skal printen printe?</label>

            <select name="ganger" id="ganger">
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>
            </select>

        <input type="submit" value="submit">
    </form>
</body>
</html>