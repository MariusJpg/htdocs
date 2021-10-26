<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizza</title>
</head>
<body>
    <form action="pizzaSvar.php" method="post" >
 
        <input type="text" name="name"> Ditt navn<br>
        <input type="text" name="adresse"> Adresse<br>
        <input type="radio" name="hentes"> Hente<br>
        <input type="radio" name="hentes"> Leveres<br>



        <label for="type"></label>

            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="aubergine">Aubergine</option>
                <option value="new york">New york</option>
            </select><br>

        <input type="radio" name="ekstra"> Ekstra Ost<br>
        <input type="radio" name="ekstra"> Uten ekstra ost<br>

        <input type="submit" value="submit">

    </form>
</body>
</html>