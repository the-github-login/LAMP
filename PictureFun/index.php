<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Рисовальник</title>
        <link rel="stylesheet" href="styles/math.css" type="text/css">
    </head>
    <body>
        <div id="crib">
            <h3>Шпаргалка для юных математиков:</h3>
            <form action="drawer.php" method="post">
                <p>
                    <select name="curves" id="selector">
                        <option disabled="">Выберите график</option>
                        <option value="straight">Прямая</option>
                        <option value="parabola">Парабола</option>
                        <option value="hyperbola">Гипербола</option>
                    </select>    
                </p>

                <input type="submit" name="submit" value="Нарисовать" id="submit">
            </form>
        </div>
    </body>
</html>
