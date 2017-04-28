<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie7/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie7/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie7/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie7/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie7/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie7/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie7/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <form method="post" action="user.php">
            <label for="firstName">Prénom: <input type="text" name="firstName" id="firstName"/></label>
            <label for="secondName">Nom: <input type="text" name="secondName" id="secondName"/></label>
            <button type="submit">Envoyer</button>
        </form>
    </body>
</html