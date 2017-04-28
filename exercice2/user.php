<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie7/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie7/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie7/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie7/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie7/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie7/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie7/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Vérification et affichage des paramètre de l'URL:
            <?php
            // Vérification que les elements ne sont pas vides
            if (empty($_POST['firstName']) || empty($_POST['secondName'])) {
                echo 'Il faut renseigner un nom et un prénom !';
            } else {
                // Affiche les elements en sécurisant les valeurs pour ne pas afficher les balises HTML et supprimer les espaces avant et après
                echo strip_tags(trim($_POST['firstName'])) . ' ' . strip_tags(trim($_POST['secondName']));
            }
            ?>
        </p>
    </body>
</html>