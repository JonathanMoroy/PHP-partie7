<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie7/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie7/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie7/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie7/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie7/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie7/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie7/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché.<br/> Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.<br/>
            Utiliser qu'une seule page.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètre de l'URL:
            <?php
            // Vérification que les elements ne sont pas vides
            if (empty($_POST['firstName']) || empty($_POST['secondName']) || empty($_POST['civility'])) {
                echo 'Il faut renseigner un nom et un prénom !';
                ?>
            <form method="post" action="index.php">
                <select name="civility">
                    <option>Monsieur</option>
                    <option>Madame</option>
                </select>
                <label for="firstName">Prénom: <input type="text" name="firstName" id="firstName"/></label>
                <label for="secondName">Nom: <input type="text" name="secondName" id="secondName"/></label>
                <button type="submit">Envoyer</button>
            </form>
            <?php
            } else {
            // Affiche les elements en sécurisant les valeurs pour ne pas afficher les balises HTML et supprimer les espaces avant et après
            echo strip_tags(trim($_POST['civility'])) . ' ' . strip_tags(trim($_POST['firstName'])) . ' ' . strip_tags(trim($_POST['secondName']));
            }
            ?>
         </p>
    </body>
</html